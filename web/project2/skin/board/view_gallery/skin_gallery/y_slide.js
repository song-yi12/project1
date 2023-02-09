gallerySpeed = 10; 
for (imageTotal = 0; this["image_" + (imageTotal + 1)]; imageTotal++);
imgNumber = autoCount = npMode = 1;
currentPosition = 0;
function galleryMode(current) {
    currentPosition = Number(galleryTable.style.marginTop.slice(0, -2));
    currentGallery = function() {
        if (currentPosition == current) clearInterval(galleryInterval);
        else {
            if (Math.abs(currentPosition - current) <= 0.5) currentPosition = current;
            else currentPosition += (current - currentPosition) / gallerySpeed;
            galleryTable.style.marginTop = currentPosition + "px";
        }
    }
    galleryInterval = setInterval(currentGallery, 10);
}
if (autoSec > 0) setInterval(function() {
	autoCount += 1;
    if (autoCount == autoSec + 1) galleryGo(npMode ? "next" : "prev"), autoCount = 1;
}, 1000);
function galleryChange() {
	currentSize = Math.round(galleryDiv.offsetWidth * hSize / wSize); 
    if (currentPosition % currentSize == 0) {
        galleryMode(-currentSize * ((imgNumber = arguments[0]) - 1));
        autoCount = 1;
    }
}
function galleryGo() {
    if (arguments[0] == "next") galleryChange(imgNumber == imageTotal ? 1 : imgNumber + 1), npMode = 1;
    else if (arguments[0] == "prev") galleryChange(imgNumber == 1 ? imageTotal : imgNumber - 1), npMode = 0;
    else galleryChange(arguments[0]);
	for (img = 1; img <= imageTotal; img++) {
		imageTable.getElementsByClassName("img-btn")[img - 1].style.filter = imgFilter;
		imageTable.getElementsByClassName("img-btn")[imgNumber - 1].style.filter = "none";
	}
}
onresize = function() {
    topHeight = Math.round(galleryDiv.offsetWidth * hSize / wSize);
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
    document.write("<div><div style=display:flex;justify-content:center><div id=galleryDiv><table id=galleryTable cellpadding=0 cellspacing=0 style=width:100%;height:" + imageTotal * 100 + "%;table-layout:fixed;margin-top:0px>");
    for (img = 1; img <= imageTotal; img++) document.write("<tr><td style=background-image:url(" + this['image_' + img] + ");background-size:cover;background-position:center></td></tr>");
    document.write("</table><table id=buttonTable cellpadding=0 cellspacing=0 onmouseover=style.opacity=1 onmouseout=style.opacity=0><td style=width:20px></td><td align=left><img class=mode-btn src=" + prevImage + " onclick=galleryGo('prev')></td><td align=center><img id=soundBtn class=mode-btn style=display:" + (soundMp3 == "" ? "none" : "block") + " src=" + playImage + "></td><td align=right><img class=mode-btn src=" + nextImage + " onclick=galleryGo('next')></td><td style=width:20px></td></table></div></div>");
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