<?php
    include "datacon.php";
    $con = new mysqli($host, $user, $password, $db);
    if ($con->connect_error){
        die("connessione falita " . $conn->connect_error);
    }else{
        $entertime = $_POST["enter"];
        $exitime = $_POST["exit"];
        $firstweight = $_POST["weight1"];
        $lastweight = $_POST["weight2"];
        $companyname = $_POST["company"];
        $note = $_POST["note"];
        $targa = $_POST["targa"];
        $resultedweight = $lastweight - $firstweight;
        $id = $_POST["whattaid"];
        $query = "UPDATE pesi SET entertime = $entertime, exittime = $exitime, 
        firstweight = $firstweight, lastweight = $lastweight, companyname = '$companyname',
         note = '$note', targa = '$targa', resultedweight = $resultedweight WHERE id = $id";
        if(@ $con->query($query)===true){
            echo "record " . $id . " aggiornato con successo";
        }else{
            echo "some trouble " . mysqli_error($con);
        }
    }

    
