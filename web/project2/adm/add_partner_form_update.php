<?php
$sub_menu = '910100';
include_once('./_common.php');

$bo_table = "partner"; //테이블 정의
$write_table = $g5['write_prefix'].$bo_table;

if ($w == "u" || $w == "d")
    check_demo();

if ($w == 'd')
    auth_check_menu($auth, $sub_menu, "d");
else
    auth_check_menu($auth, $sub_menu, "w");

check_admin_token();


$wr_id = (int) $wr_id;

$wr_subject = isset($_POST['wr_subject']) ? strip_tags(clean_xss_attributes($_POST['wr_subject'])) : '';

$wr_content = substr(trim($_POST['wr_content']),0,65536);
$wr_content = preg_replace("#[\\\]+$#", "", $wr_content);

$mb_id = $member['mb_id'];
$wr_name = $member['mb_name'];
$wr_email = addslashes($member['mb_email']);

if($w == "u") {
    $wr_datetime = $_POST['wr_datetime'];
} else { 
    $wr_datetime = G5_TIME_YMDHIS;
}

$sql_common = " wr_num = '$wr_num',
                wr_comment = 0,
                wr_subject = '$wr_subject',
                wr_content = '$wr_content',
                wr_option = 'html1',
                wr_hit = 0,
                wr_nogood = 0,
                mb_id = '$mb_id',
                wr_password = '$wr_password',
                wr_name = '$wr_name',
                wr_email = '$wr_email',
                wr_datetime = '$wr_datetime',
                wr_last = '".G5_TIME_YMDHIS."',
                wr_1 = '$wr_1',
                wr_2 = '$wr_2',
                wr_3 = '$wr_3',
                wr_4 = '$wr_4',
                wr_5 = '$wr_5',
                wr_6 = '$wr_6',
                wr_7 = '$wr_7',
                ca_name = '$wr_7',
                wr_ip = '{$_SERVER['REMOTE_ADDR']}' ";

if($w == "")
{

    $sql = " insert {$write_table} set $sql_common ";
    sql_query($sql);

    $wr_id = sql_insert_id();
    
    
    // 부모 아이디에 UPDATE
    sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");
    
    // 부모 아이디에 UPDATE
    sql_query(" update $write_table set wr_num = '-$wr_id' where wr_id = '$wr_id' ");
    
    // 새글 INSERT
    sql_query(" insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '{$bo_table}', '{$wr_id}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");
    
    // 게시글  증가
    sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = '{$bo_table}'");
    
}
else if ($w == "u")
{
    
    $sql = " update {$write_table} set $sql_common where wr_id = '$wr_id' ";
    sql_query($sql);

}
else if ($w == "d")
{
    
    $sql = " delete from {$write_table} where wr_id = '$wr_id' ";
    sql_query($sql);
    
    // 새글 삭제
    sql_query(" delete from {$g5['board_new_table']} where bo_table = '$bo_table' and wr_parent = '$wr_id' ");
    
    // 게시글수 삭제
    sql_query(" update {$g5['board_table']} set bo_count_write = bo_count_write - 1 where bo_table = '$bo_table' ");

}

if ($w == "d")
{
    goto_url('./add_partner_list.php');
}
else
{
    goto_url("./add_partner_list.php");
    //goto_url("./add_partner_form.php?w=u&amp;wr_id=$wr_id");
}