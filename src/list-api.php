<?php 
include "conf.php"; 
$sql = "select * from hashes order by `hash_added` desc";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$cnt=0;
while($row = mysqli_fetch_assoc($query)):
	$text = $row['hash_text'];
	$hash = $row['hash_cont'];
	$date = $row['hash_added'];
	$mth = date('M', strtotime($date));
	switch($mth){
		case "Jan":
			$mth = "Ян";
			break;
		case "Feb":
			$mth = "Фев";
			break;
		case "Mar":
			$mth = "Март";
			break;
		case "Apr":
			$mth = "Апр";
			break;
		case "May":
			$mth = "Май";
			break;
		case "Jun":
			$mth = "Юни";
			break;
		case "Jul":
			$mth = "Юли";
			break;
		case "Aug":
			$mth = "Авг";
			break;
		case "Sep":
			$mth = "Септ";
			break;
		case "Oct":
			$mth = "Окт";
			break;
		case "Dec":
			$mth = "Дек";
			break;
		default:
			$mth = "Яну";
			break;
	}
	$date = date('j '.$mth.' Y H:i:s'.'ч.', strtotime($date));
	$list[] = array("text"=>$text, "hash"=>$hash, "date"=>$date);
	$cnt++;
endwhile;
$list["count"] = $cnt;

$json = json_encode($list);
echo $json;