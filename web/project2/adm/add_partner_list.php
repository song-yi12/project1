<?php
$sub_menu = '910100';
include_once('./_common.php');

$bo_table = "partner"; //테이블 정의
$write_table = $g5['write_prefix'].$bo_table;

if(!sql_query(" DESCRIBE {$write_table} ", false)) {
    alert('게시판이 생성되지 않았습니다.\n게시판 ID가 '.$bo_table.' 인 게시판을 생성해 주세요.');
}

auth_check_menu($auth, $sub_menu, "r");

$g5['title'] = '지점 관리';
include_once (G5_ADMIN_PATH.'/admin.head.php');


$sql_common = " from {$write_table} ";

/* 검색 { */
$sql_search = " where (1) ";

if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        case 'mb_id' :
            $sql_search .= " ({$sfl} = '{$stx}') ";
            break;
        default :
            $sql_search .= " ({$sfl} like '%{$stx}%') ";
            break;
    }
    $sql_search .= " ) ";
}

if (!$sst) {
    $sst  = "wr_id";
    $sod = "desc";
}

$sql_order = " order by {$sst} {$sod} ";

$sql = " select count(*) as cnt
            {$sql_common}
            {$sql_search}
            {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select *
            {$sql_common}
            {$sql_search}
            {$sql_order}
            limit {$from_record}, {$rows} ";
$result = sql_query($sql);

$listall = '<a href="'.$_SERVER['SCRIPT_NAME'].'" class="ov_listall">전체목록</a>';

$mb = array();
if ($sfl == 'mb_id' && $stx)
    $mb = get_member($stx);

/* } */

if (strstr($sfl, "mb_id"))
    $mb_id = $stx;
else
    $mb_id = "";


?>

<div class="local_ov01 local_ov">
    <a href="/adm/add_partner_list.php" class="ov_listall">전체목록</a>
    <span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num">  <?php echo $total_count; ?>건</span></span>&nbsp;
</div>

<div class="btn_fixed_top ">
    <a href="./add_partner_form.php" class="btn btn_01">지점 등록</a>
</div>

<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
<label for="sfl" class="sound_only">검색대상</label>
<select name="sfl" id="sfl">
    <option value="wr_1"<?php echo get_selected($sfl, "wr_1"); ?>>지점명</option>
    <option value="wr_7"<?php echo get_selected($sfl, "wr_7"); ?>>지역</option>
    <option value="wr_subject"<?php echo get_selected($sfl, "wr_subject"); ?>>상호명</option>
    <option value="wr_2"<?php echo get_selected($sfl, "wr_2"); ?>>대표전화</option>
    
</select>
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<input type="text" name="stx" value="<?php echo $stx ?>" id="stx" required class="required frm_input">
<input type="submit" class="btn_submit" value="검색">

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col"><?php echo subject_sort_link('wr_7', '', 'desc') ?>지역</a></th>
        <th scope="col"><?php echo subject_sort_link('wr_1', '', 'desc') ?>지점명</a></th>
        <th scope="col"><?php echo subject_sort_link('wr_subject', '', 'desc') ?>상호명</a></th>
        <th scope="col">대표전화</th>
        <th scope="col">주소</th>
        <th scope="col">영업시간</th>
        <th scope="col">링크</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php
        
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        $bg = 'bg'.($i%2);  
    ?>
    <tr class="<?php echo $bg; ?>">

        <td class=""><?php echo $row['wr_7'] ?></td>
        <td class=""><?php echo $row['wr_1'] ?></td>
        <td class=""><?php echo $row['wr_subject'] ?></td>
        <td class=""><?php echo $row['wr_2'] ?></td>
        <td class="td_left" style="min-width:300px !important;"><?php echo $row['wr_3'] ?> <?php echo $row['wr_4'] ?></td>
        <td class=""><?php echo $row['wr_5'] ?></td>
        <td class=""><?php echo $row['wr_6'] ?></td>
       
        <td class="td_mng td_mng_m">
            <a href="./add_partner_form.php?w=u&amp;wr_id=<?php echo $row['wr_id']; ?>" class="btn btn_03">수정</a>
            <a href="./add_partner_form_update.php?w=d&amp;wr_id=<?php echo $row['wr_id']; ?>" onclick="return delete_confirm(this);" class="btn btn_02">삭제</a>
        </td>
    </tr>

    <?php
    }

    if ($i == 0) {
        echo '<tr><td colspan="8" class="empty_table">데이터가 없습니다.</td></tr>';
    }
    
    ?>
    </tbody>
    </table>
</div>
</form>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');