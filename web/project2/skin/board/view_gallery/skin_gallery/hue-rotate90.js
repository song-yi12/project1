for (imageTotal = 0; this["image_" + (imageTotal + 1)]; imageTotal++);
imgNumber = autoCount = npMode = 1;
function galleryMode() {
    currentGallery = function() {
		if (currentDiv.style.opacity <= 0) {
			currentDiv.style.opacity = 0;
			clearInterval(galleryInterval);
		}
		else currentDiv.style.opacity -= 0.01;
	}
    galleryInterval = setInterval(currentGallery, 20);
}
if (autoSec > 0) setInterval(function() {
	autoCount += 1;
    if (autoCount == autoSec + 1) galleryGo(npMode ? "next" : "prev"), autoCount = 1;
}, 1000);
function galleryChange() {
	if (currentDiv.style.opacity == 0) {
		imgNumber = arguments[0];
		currentDiv.style.opacity = autoCount = 1;
		galleryDiv.style.backgroundImage = currentDiv.style.backgroundImage = "url(" + this['image_' + imgNumber] + ")";
		currentDiv.style.filter = "hue-rotate(90deg)";
		galleryMode();
		for (img = 1; img <= imageTotal; img++) {
			imageTable.getElementsByClassName("img-btn")[img - 1].style.filter = imgFilter;
			imageTable.getElementsByClassName("img-btn")[imgNumber - 1].style.filter = "none";
		}
	}
}
function galleryGo() {
	if (arguments[0] == "next") galleryChange(imgNumber == imageTotal ? 1 : imgNumber + 1), npMode = 1;
	else if (arguments[0] == "prev") galleryChange(imgNumber == 1 ? imageTotal : imgNumber - 1), npMode = 0;
	else galleryChange(arguments[0]);
}
onresize = function() {
    topHeight = galleryDiv.offsetWidth * hSize / wSize;
    galleryDiv.style.height = topHeight + "px";
	for (img = 1; img <= imageTotal; img++) imageTable.getElementsByClassName("y-gap")[img - 1].style.height = imageTable.getElementsByClassName("y-gap")[0].offsetWidth + "px";
}
document.addEventListener("DOMContentLoaded", function() {
	for (img = 1; img <= imageTotal; img++) {
		if (img <= xLimit) imageTable.getElementsByClassName("y-gap")[img - 1].style.paddingTop = "0px";
		imageTable.getElementsByClassName("img-btn")[img - 1].image = img;
		imageTable.getElementsByClassName("img-btn")[img - 1].onclick = function() {
			galleryGo(this.image);
		}
	}
} );
function galleryHtml() {
    document.write("<div><div style=display:flex;justify-content:center><div id=galleryDiv style=background-size:cover;background-position:center><div id=currentDiv style=width:100%;height:100%;background-size:cover;background-position:center></div>");
    document.write("<table id=buttonTable cellpadding=0 cellspacing=0 onmouseover=style.opacity=1 onmouseout=style.opacity=0><td style=width:20px></td><td align=left><img class=mode-btn src=" + prevImage + " onclick=galleryGo('prev')></td><td align=center><img id=soundBtn class=mode-btn style=display:" + (soundMp3 == "" ? "none" : "block") + " src=" + playImage + "></td><td align=right><img class=mode-btn src=" + nextImage + " onclick=galleryGo('next')></td><td style=width:20px></td></table></div></div>");
	document.write("<table id=imageTable cellpadding=0 cellspacing=0><tr>");
	for (img = 1; img <= imageTotal; img++) {
		if (img % xLimit == 0) {
			if (imageTotal <= xLimit || img == imageTotal) document.write("<td class=y-gap><img class=img-btn src=" + this['image_' + img] + "></td>");
			else document.write("<td class=y-gap><img class=img-btn src=" + this['image_' + img] + "></td></tr><tr>");
		}
		else document.write("<td class=y-gap><img class=img-btn src=" + this['image_' + img] + "></td><td class=x-gap></td>");
	}
	document.write(soundMp3 == "" ? "</tr></table></div>" : "</tr></table><audio id=galleryAudio src=" + soundMp3 + " loop></audio></div>");
    galleryGo(1);
	onresize();
}
galleryHtml();
soundBtn.onclick = function() {
	if (soundMp3 != "") soundBtn.src == playImage ? (galleryAudio.play(), soundBtn.src = stopImage) : (galleryAudio.pause(), soundBtn.src = playImage);	
}