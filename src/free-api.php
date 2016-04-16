<?php
include "conf.php";
if(isset($_GET['type']) && isset($_GET['text'])){
	$type = $_GET['type'];
	$text = $_GET['text'];
	
	switch($type){
		case "encrypt":
			$md5 = md5($text);
			$json = array("phrase"=>$md5, "phrased"=>$text, "report"=>"The text is successfully encrypted!");
			$json = json_encode($json);
			echo $json;
			$txt = htmlspecialchars($tеxt);
			$txt = mysqli_real_escape_string($conn, $txt);
			$sql = "select * from hashes where hash_text = '$txt'";
			
			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			$num = mysqli_num_rows($query);
			
			if($num < 1){
				$sql = "insert into hashes (`hash_text`, `hash_cont`, `hash_uIP`) values ('$txt', '$enTxt', '$ip')";
				$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			}
			
			break;
		case "decrypt":
			$lenght = strlen($text);
			if($lenght==32){
				$text = htmlspecialchars($text);
				$text = mysqli_real_escape_string($conn, $text);
				$sql = "select * from hashes where hash_cont = '$text'";
				$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				$num = mysqli_num_rows($query);
				if($num==1){
					$row = mysqli_fetch_assoc($query);
					$key = $row['hash_text'];
					$json = array("phrase"=>$key, "phrased"=>$text, "report"=>"The text is successfully decrypted!");
					$json = json_encode($json);
					echo $json;
				}else{
					$json = array("phrase"=>"", "phrased"=>$text, "report"=>"The text isn`t recognized from our DB");
					$json = json_encode($json);
					echo $json;
				}
			}else{
				$json = array("phrase"=>"", "phrased"=>$text, "report"=>"The text isn`t md5 formated!");
				$json = json_encode($json);
				echo $json;
			}
			break;
		default:
			$json = array("phrase"=>"", "phrased"=>$text, "report"=>"The type isn`t found.");
			$json = json_encode($json);
			echo $json;
	}
}