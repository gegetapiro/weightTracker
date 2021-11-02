<?php
echo "Hello World";
include "datacon.php";
if(!$conn = mysqli_connect($host, $user, $password, $db)){
	echo "connesione fallita " . mysqli_error();
}
echo "connessione ok";


$entertime = $_POST["entrytime"];
$exittime = $_POST["exittime"];
$firstweight = $_POST["firstweight"];
$lastweight = $_POST["secondweight"];
$companyname = $_POST["companyname"];
$note = $_POST["note"];
$targa = $_POST["targa"];
$resultedweight = $_POST["resultweight"];



/*$entertime = "07,12";
$exittime = "08,34";
$firstweight = 15678;
$lastweight = 25678;
$companyname = "Petrol Carbail";
$note = "chisto e o paese di sole";
$targa = "FG765MB";
$resultedweight = 38964;*/

$thequery = "INSERT INTO pesi(entertime, exittime, firstweight, lastweight, companyname, note, targa, resultedweight) VALUES ('$entertime', '$exittime', $firstweight, $lastweight,'$companyname', '$note', '$targa', $resultedweight)";
if($result = mysqli_query($conn, $thequery)){
	echo json_encode("dati inseriti correttamente");
}else{
	echo json_encode("inserimento dati fallito " . mysqli_error($conn));
}

?>