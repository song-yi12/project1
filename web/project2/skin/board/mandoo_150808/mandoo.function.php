<?
/*
 ********************************************************
 * 기존 gnu4에서 만들었던 여분필드 활용 기능 설정 가능 게시판을 *
 * gnu5 로 변경 2015.06.25								*
 *														*
 * 만두야닷컴 http://mandooya.com							*	
 * admin@mandooya.com									*
 ********************************************************
 */


//지역번호
$areaCode = array(
	"02"  => "서울",
	"031" => "경기",
	"032" => "인천",
	"033" => "강원",
	"041" => "충남",
	"042" => "대전",
	"043" => "충북",
	"044" => "세종",
	"051" => "부산",
	"052" => "울산",
	"053" => "대구",
	"054" => "경북",
	"055" => "경남",
	"061" => "전남",
	"062" => "광주",
	"063" => "전북",
	"064" => "제주",
	"070" => "070"
);

//휴대폰 국번
$mNum = array("010", "011", "016", "017", "018", "019");


//여분필드 제목 가져오기
function mSubj($val) {
	GLOBAL $board;
	return $board["bo_".$val."_subj"];
}


//view.php
function mView($val,$type,$gubun='') {
	GLOBAL $view,$board;

	$view[$val] = @explode("|",$view["wr_".$val]);
	

	switch($type) {

		case "memo" :
			$rtn .= nl2br($view[$val][0]);
			break;


		case "address" : 
			$rtn .= "(".$view[$val][0].") ".$view[$val][1].$view[$val][2]." ".$view[$val][3];
			break;


		case "time" :
			$gb = @explode("@",$board["bo_".$val]);
			$fieldValue = @explode("|",$gb[0]);
			$filedNanum = @explode("|",$gb[1]);

			foreach($view[$val] as  $k => $v) {
				$vals = @explode("-",$v);
				
				if(in_array("h",$fieldValue)) {
					$tArray[$k] .= $vals[0]."시 ";
				}
				if(in_array("i",$fieldValue)) {
					$tArray[$k] .= $vals[1]."분 ";
				}
				if(in_array("s",$fieldValue)) {
					$tArray[$k] .= $vals[2]."초 ";
				}
			}



			$rtn .= @implode($gubun,$tArray);
				

			break;


		default :
			$rtn .= @implode($gubun,$view[$val]);
			break;
	}

	return $rtn;
}


//write.php 
function mWrite($val,$type="",$required="",$style="") {
	GLOBAL $board,$write,$areaCode,$mNum;

	$fieldValue = @explode("|",$board["bo_".$val]);

	if(strtolower($required) == "r") {
		$required = "required";
	}
	
	$type = @explode("/",$type);
	$perc = $type[1];


	$wr[$val] = @explode("|",$write["wr_".$val]);

	switch(strtolower($type[0])) {

		//라디오버튼
		case "radio" :			
			unset($checked);//체크확인
			$checked[$write['wr_'.$val]] = "checked";

			foreach($fieldValue as $k => $v) {
				$rtn .= "<input type='radio' name='wr_{$val}' id='wr_{$val}_{$k}' value='{$v}' {$checked[$v]} style='{$style}'> <label for='wr_{$val}_{$k}'>{$v}</label>&nbsp;";

				// 한칸 띄우기
				if( $perc && ($k % $perc == ($perc-1) )) {
					$rtn .= "<br />";
				}
			}

			break;
	



		//셀렉트박스
		case "select" :
			if(!$perc) {
				$perc = 1;
			}
			$field = @explode("@",$board["bo_".$val]);
			for($i=0;$i<$perc;$i++) {
				$fieldValue = @explode("|",$field[$i]);
				unset($selected);
				$selected[$wr[$val][$i]] = "selected";

				$rtn .= "<select name='wr_{$val}[]' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
				$rtn .= "<option value=''>선택하세요</option>";

				foreach($fieldValue as $v) {
					$rtn .= "<option {$selected[$v]} value='{$v}'>{$v}</option>";
				}

				$rtn .= "</select> ";
			}

			break;



		//체크박스
		case "checkbox" :
			unset($checks);
			$checks = @explode("|",$write['wr_'.$val]);

			foreach($fieldValue as $k => $v) {
				$chk ="";

				if(in_array($v, $checks)) {
					$chk = "checked";
				} 

				$rtn .= "<input type='checkbox' name='wr_{$val}[]' id='wr_{$val}_{$k}' value='{$v}' {$chk} style='{$style}'> <label for='wr_{$val}_{$k}'>{$v}</label>&nbsp;";

				// 한칸 띄우기
				if( $perc && ($k % $perc == ($perc-1) )) {
					$rtn .= "<br />";
				}
			}
			
			break;


		// 전화번호
		case "tel" :
			

			unset($selected);
			$selected[$wr[$val][0]] = "selected";

			$rtn .= "<select name='wr_{$val}[]' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
			$rtn .= "<option value=''>선택하세요</option>";

			foreach($areaCode as $k => $v) {
				$rtn .= "<option value='{$k}' {$selected[$k]}>{$k}({$v})</option>";
			}

			$rtn .= "</select>";

			$rtn .= " - <input type='text' name='wr_{$val}[]' value='{$wr[$val][1]}' size=5 maxlength=4 style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'> - ";
			$rtn .= "<input type='text' name='wr_{$val}[]' value='{$wr[$val][2]}' size=4 maxlength=4 style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
			
			break;


		//모바일
		case "mobile" :

			unset($selected);
			$selected[$wr[$val][0]] = "selected";

			$rtn .= "<select name='wr_{$val}[]' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
			$rtn .= "<option value=''>선택하세요</option>";

			foreach($mNum as  $v) {
				$rtn .= "<option value='{$v}' {$selected[$v]}>{$v}</option>";
			}

			$rtn .= "</select>";

			$rtn .= " - <input type='text' name='wr_{$val}[]' value='{$wr[$val][1]}' size=5 maxlength=4 style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'> - ";
			$rtn .= "<input type='text' name='wr_{$val}[]' value='{$wr[$val][2]}' size=4 maxlength=4 style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
			
			break;



		//텍스트에어리어
		case "textarea" :
			$rtn .= "<textarea name='wr_{$val}' id='wr_{$val}' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>{$write['wr_'.$val]}</textarea>";
			break;



		
		//날짜
		case "date" :		
			if(!$perc) {
				$perc = 1;
			}
			for($i=0;$i<$perc;$i++) { 
				$rtn .= "{$fieldValue[$i]}";
				$rtn .= "<input type='text' readonly name='wr_{$val}[]' id='wr_{$val}_{$i}' value='{$wr[$val][$i]}' style='{$style}' class='frm_input dates {$required}' title='".mSubj($val)."'>";
			}

			break;

		
		//시간
		case "time" :
			if(!$perc) {
				$perc = 1;
			}

			$field = @explode("@",$board["bo_".$val]);
			$fieldValue = @explode("|",$field[0]);
			$filedNanum = @explode("|",$field[1]);

			for($i=0;$i<$perc;$i++) {
				$rtn .= $filedNanum[$i];
				$v[$i] = @explode("-",$wr[$val][$i]);

				print_r2($fieldValue);

				if(in_array("h",$fieldValue)) {
					$rtn .= "<select name='wr_{$val}[{$i}][]' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
					for($h=0;$h<24;$h++) { 
						$h = sprintf("%02d",$h);
						unset($sel);
						if($h == $v[$i][0]) {
							$sel = "selected";
						}
						$rtn .= "<option value=".$h." ".$sel." >".$h."</option>";
					}
					$rtn .= "</select> 시 ";
				} else {
					$rtn .= "<input type='hidden' name='wr_{$val}[{$i}][]' value='.'>";
				}
				
				if(in_array("i",$fieldValue)) {
					$rtn .= "<input type='text' name='wr_{$val}[{$i}][]' value='".$v[$i][1]."' size='2' maxlength='2' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'> 분 ";
				} else {
					$rtn .= "<input type='hidden' name='wr_{$val}[{$i}][]' value='.'>";
				}

				if(in_array("s",$fieldValue)) {
					$rtn .= "<input type='text' name='wr_{$val}[{$i}][]' value='".$v[$i][2]."' size='2' maxlength='2' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'> 초 ";
				} else {
					$rtn .= "<input type='hidden' name='wr_{$val}[{$i}][]' value='.'>";
				}
			}
			break;



		//이메일
		case "email" :

			unset($selected);
			$selected[$wr[$val][1]] = "selected";

			if(in_array($wr[$val][1],$fieldValue)) {
				$disp =";display:none;";
			}

			
			$rtn .= "<input type='text' name='wr_{$val}[]' value='{$wr[$val][0]}' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
			$rtn .= " @ ";
			$rtn .= "<input type='text' name='wr_{$val}[]' id='emailEnd_{$val}' value='{$wr[$val][1]}' style='{$style} {$disp}' class='frm_input {$required}' title='".mSubj($val)."'>";

			$rtn .= " <select name='email_sel_{$val}' id='email_sel_{$val}' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."' onchange=\"chkEmail('{$val}','{$wr[$val][1]}')\" >";
			$rtn .= "<option value='direct'>직접입력</option>";
			
			foreach($fieldValue as $v) {
				$rtn .= "<option value='{$v}' {$selected[$v]}>{$v}</option>";
			}
			$rtn .= "</select>";

			break;


		//달력
		case "address" :
					add_javascript(G5_POSTCODE_JS, 0);    //다음 주소 js
					$rtn .= "
					<label for='wr_{$val}_0' class='sound_only'>우편번호</label>
					<input type='text' name='wr_{$val}[0]' value='{$wr[$val][0]}' id='wr_{$val}_0' class='frm_input readonly' size='5' maxlength='5'> 

					<button type='button' class='btn_frmline' onclick=\"mandoo_zip('wr_{$val}_0', 'wr_{$val}_1', 'wr_{$val}_2', 'wr_{$val}_3', 'wr_{$val}_4');\">주소 검색</button><br>

					<input type='text' name='wr_{$val}[1]' value='{$wr[$val][1]}' id='wr_{$val}_1' class='frm_input readonly' size='60'>
					<label for='wr_{$val}_1'>기본주소</label><br>
					<input type='text' name='wr_{$val}[2]' value='{$wr[$val][2]}' id='wr_{$val}_2' class='frm_input' size='60'>
					<label for='wr_{$val}_2'>상세주소</label>
					<br>
					<input type='text' name='wr_{$val}[3]' value='{$wr[$val][3]}' id='wr_{$val}_3' class='frm_input' size='60'>
					<label for='wr_{$val}_3'>참고항목</label>
					<input type='hidden' name='wr_{$val}[4]' id='wr_{$val}_4' value='{$wr[$val][4]}'><br>
					";

			break;



		//텍스트, 기본 
		case "text" :
		default :
			if($perc>1) {
				for($i=0;$i<$perc;$i++) {
					$rtn .= "<input type='text' name='wr_{$val}[]' id='wr_{$val}_$i' value='{$wr[$val][$i]}' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>&nbsp;";
				}
			} else { 
				$rtn .= "<input type='text' name='wr_{$val}' id='wr_{$val}' value='{$write['wr_'.$val]}' style='{$style}' class='frm_input {$required}' title='".mSubj($val)."'>";
			}

			break;


	}
	return $rtn;
}


?>

<script>
function chkEmail(chkid,vval) {
	var nMail = $("#email_sel_"+chkid).val();
	
	if(nMail!="direct") {
		$("#emailEnd_"+chkid).hide().val(nMail).attr("required","");
	} else {
		$("#emailEnd_"+chkid).val(vval).show().attr("required","required");
	}
}

jQuery(function($){
	$('.dates').datepicker({
		showOn: 'button',
		buttonImage: '/skin/board/<?=$board[bo_skin]?>/img/calendar.gif',
		buttonImageOnly: true,
		buttonText: "달력",
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		yearRange: 'c-99:c+99'
	});
});

var mandoo_zip = function(frm_zip, frm_addr1, frm_addr2, frm_addr3, frm_jibeon) {
    if(typeof daum === 'undefined'){
        alert("다음 우편번호 postcode.v2.js 파일이 로드되지 않았습니다.");
        return false;
    }

    var zip_case = 1;   //0이면 레이어, 1이면 페이지에 끼워 넣기, 2이면 새창

    var complete_fn = function(data){
        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
        var fullAddr = ''; // 최종 주소 변수
        var extraAddr = ''; // 조합형 주소 변수

        // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
            fullAddr = data.roadAddress;

        } else { // 사용자가 지번 주소를 선택했을 경우(J)
            fullAddr = data.jibunAddress;
        }

        // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
        if(data.userSelectedType === 'R'){
            //법정동명이 있을 경우 추가한다.
            if(data.bname !== ''){
                extraAddr += data.bname;
            }
            // 건물명이 있을 경우 추가한다.
            if(data.buildingName !== ''){
                extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
            }
            // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
            extraAddr = (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
        }

        // 우편번호와 주소 정보를 해당 필드에 넣고, 커서를 상세주소 필드로 이동한다.

		$("#"+frm_zip).val(data.zonecode);
		$("#"+frm_addr1).val(fullAddr);
		$("#"+frm_addr3).val(extraAddr);


        if($("#"+frm_jibeon) !== undefined){
			$("#"+frm_jibeon).val(data.userSelectedType);
        }

		$("#"+frm_addr2).focus();

    };

    switch(zip_case) {
        case 1 :    //iframe을 이용하여 페이지에 끼워 넣기
            var daum_pape_id = 'daum_juso_page'+frm_zip,
                element_wrap = document.getElementById(daum_pape_id),
                currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
            if (element_wrap == null) {
                element_wrap = document.createElement("div");
                element_wrap.setAttribute("id", daum_pape_id);
                element_wrap.style.cssText = 'display:none;border:1px solid;left:0;width:100%;height:300px;margin:5px 0;position:relative;-webkit-overflow-scrolling:touch;';
                element_wrap.innerHTML = '<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnFoldWrap" style="cursor:pointer;position:absolute;right:0px;top:-21px;z-index:1" class="close_daum_juso" alt="접기 버튼">';
                jQuery('#'+frm_addr1).before(element_wrap);
                jQuery("#"+daum_pape_id).off("click", ".close_daum_juso").on("click", ".close_daum_juso", function(e){
                    e.preventDefault();
                    jQuery(this).parent().hide();
                });
            }

            new daum.Postcode({
                oncomplete: function(data) {
                    complete_fn(data);
                    // iframe을 넣은 element를 안보이게 한다.
                    element_wrap.style.display = 'none';
                    // 우편번호 찾기 화면이 보이기 이전으로 scroll 위치를 되돌린다.
                    document.body.scrollTop = currentScroll;
                },
                // 우편번호 찾기 화면 크기가 조정되었을때 실행할 코드를 작성하는 부분.
                // iframe을 넣은 element의 높이값을 조정한다.
                onresize : function(size) {
                    element_wrap.style.height = size.height + "px";
                },
                width : '100%',
                height : '100%'
            }).embed(element_wrap);

            // iframe을 넣은 element를 보이게 한다.
            element_wrap.style.display = 'block';
            break;
        case 2 :    //새창으로 띄우기
            new daum.Postcode({
                oncomplete: function(data) {
                    complete_fn(data);
                }
            }).open();
            break;
        default :   //iframe을 이용하여 레이어 띄우기
            var rayer_id = 'daum_juso_rayer'+frm_zip,
                element_layer = document.getElementById(rayer_id);
            if (element_layer == null) {
                element_layer = document.createElement("div");
                element_layer.setAttribute("id", rayer_id);
                element_layer.style.cssText = 'display:none;border:5px solid;position:fixed;width:300px;height:460px;left:50%;margin-left:-155px;top:50%;margin-top:-235px;overflow:hidden;-webkit-overflow-scrolling:touch;z-index:10000';
                element_layer.innerHTML = '<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" class="close_daum_juso" alt="닫기 버튼">';
                document.body.appendChild(element_layer);
                jQuery("#"+rayer_id).off("click", ".close_daum_juso").on("click", ".close_daum_juso", function(e){
                    e.preventDefault();
                    jQuery(this).parent().hide();
                });
            }

            new daum.Postcode({
                oncomplete: function(data) {
                    complete_fn(data);
                    // iframe을 넣은 element를 안보이게 한다.
                    element_layer.style.display = 'none';
                },
                width : '100%',
                height : '100%'
            }).embed(element_layer);

            // iframe을 넣은 element를 보이게 한다.
            element_layer.style.display = 'block';
    }
}
</script>