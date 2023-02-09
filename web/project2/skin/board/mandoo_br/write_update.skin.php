<?php
include "./_common.php";



for($i=1;$i<11;$i++) {

	if(is_array($_REQUEST["wr_".$i])) {
		if(is_array($_REQUEST["wr_".$i][0])) {
			
			foreach($_REQUEST["wr_".$i] as $v) {
				$vs[] = @implode("-",$v);
			}
			$_POST["wr_".$i] = @implode("|",$vs);
		} else {
			$_POST["wr_".$i] = @implode("|",$_REQUEST["wr_".$i]);
		}
	}

	//print_r2($_REQUEST);
	
	$query[]="wr_".$i." = '".$_POST["wr_".$i]."' ";

}

$q=implode(",",$query);
$sql =" UPDATE $write_table SET $q  WHERE wr_id ='$wr_id' ";
sql_query($sql);

?>