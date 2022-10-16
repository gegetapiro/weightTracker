<?php
$arow = array();
$whatid = $_POST["whattaid"];
//$whatid = 6;
include "datacon.php";
if($connection = mysqli_connect($host, $user, $password, $db)){

	$query = "SELECT * FROM pesi WHERE id = $whatid";

$result =	mysqli_query($connection, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
$arow = $row;

	echo json_encode($arow);
}else{
	echo "problema di connessione " . mysqli_connect_error();

}



?>
