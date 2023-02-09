<?php
$sub_menu = '910100';
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

$bo_table = "partner"; //테이블 정의
$write_table = $g5['write_prefix'].$bo_table;

auth_check_menu($auth, $sub_menu, "w");

$wr_id = isset($_REQUEST['wr_id']) ? preg_replace('/[^0-9]/', '', $_REQUEST['wr_id']) : 0;

$html_title = "지점";


if ($w == "u")
{
    $html_title .= " 수정";
    $sql = " select * from {$write_table} where wr_id = '$wr_id' ";
    $nw = sql_fetch($sql);
    if (! (isset($nw['wr_id']) && $nw['wr_id'])) alert("등록된 자료가 없습니다.");
}
else
{
    $html_title .= " 등록";
}

$g5['title'] = $html_title;
include_once (G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="frmnewwin" action="./add_partner_form_update.php" onsubmit="return frmnewwin_check(this);" method="post">
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>">
<?php if($w == "u") { ?>
<input type="hidden" name="wr_datetime" value="<?php echo $nw['wr_datetime']; ?>">
<?php } ?>
    
<input type="hidden" name="token" value="">

<section>
<h2 class="h2_frm">지점정보</h2>
<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
        
    <tr>
        <th scope="row"><label for="nw_disable_hours">지점명</label></th>
        <td>
            <?php echo help("입력 예) 종로점"); ?>
            <input type="text" name="wr_1" value="<?php echo $nw['wr_1']; ?>" id="wr_1" required class="frm_input required">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="nw_disable_hours">상호명</label></th>
        <td>
            <?php echo help("실제 상호명을 입력하세요."); ?>
            <input type="text" name="wr_subject" value="<?php echo $nw['wr_subject']; ?>" id="wr_subject" required class="frm_input required" size="40">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="nw_disable_hours">대표전화</label></th>
        <td>
            <input type="text" name="wr_2" value="<?php echo $nw['wr_2']; ?>" id="wr_2" class="frm_input">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="nw_disable_hours">주소</label></th>
        <td>
            <input type="text" name="wr_3" value="<?php echo $nw['wr_3']; ?>" id="wr_3" required class="frm_input required" size="70" readonly>
            <input type="text" name="wr_4" value="<?php echo $nw['wr_4']; ?>" id="wr_4" class="frm_input" size="40" placeholder="나머지주소">
            <input type="text" name="wr_7" value="<?php echo $nw['wr_7']; ?>" id="wr_7" class="frm_input" placeholder="지역구분" readonly>
            <!-- API -->
            <div id="clickLatlng"></div>
            <script type="text/javascript" src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
            <script>
                // 주소검색 API (주소 > 좌표변환처리)
                $(function() {
                    $("#wr_3").on("click", function() {
                        new daum.Postcode({
                            oncomplete: function(data) {
                                $("#wr_3").val(data.address);
                                $("#wr_7").val(data.sido); //시도

                            }
                        }).open();
                    });

                });
            </script>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="nw_disable_hours">영업시간</label></th>
        <td>
            <input type="text" name="wr_5" value="<?php echo $nw['wr_5']; ?>" id="wr_5" class="frm_input" size="40">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="nw_disable_hours">링크</label></th>
        <td>
             <?php echo help("http:// 포함입력"); ?>
            <input type="text" name="wr_6" value="<?php echo $nw['wr_6']; ?>" id="wr_6" class="frm_input" size="70">
        </td>
    </tr>
    <!--
    <tr>
        <th scope="row"><label for="nw_disable_hours">내용</label></th>
        <td>
            <?php echo editor_html('wr_content', get_text(html_purifier($nw['wr_content']), 0)); ?>
        </td>
    </tr>
    -->

    </tbody>
    </table>
</div>
</section>


<div class="btn_fixed_top">
    <a href="./add_partner_list.php" class=" btn btn_02">목록</a>
    <input type="submit" value="확인" class="btn_submit btn" accesskey="s">
</div>
</form>

<script>
function frmnewwin_check(f)
{
    errmsg = "";
    errfld = "";

    <?php //echo get_editor_js('wr_content'); ?>
    
    check_field(f.wr_1, "지점명을 입력하세요.");
    check_field(f.wr_subject, "상호명을 입력하세요.");
    check_field(f.wr_3, "주소를 입력하세요.");

    if (errmsg != "") {
        alert(errmsg);
        errfld.focus();
        return false;
    }
    return true;
}
</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');