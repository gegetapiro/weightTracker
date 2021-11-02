<?php
include "datacon.php";
$connection = new mysqli($host, $user, $password, $db);
if($connection->connect_error){
	die("connessione	 fallita " . $connection->connect_error);
	
	}else{
		$elements = array();
$myquery = "SELECT * FROM pesi";
$result = $connection -> query($myquery);

while($row = $result -> fetch_row()){
	$elements[] = $row;
}
echo json_encode($elements);
$connection -> close();
}



?>