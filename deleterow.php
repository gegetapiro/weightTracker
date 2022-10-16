<?php
$whattarow = 27;
$whattarow = $_POST["whichid"];
include "datacon.php";
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("connessione falita " . $conn->connect_error);
} else {
    $thequery = "DELETE FROM pesi WHERE id = $whattarow";
    if ($conn->query($thequery) === true) {
        echo "record " . $whattarow . " succefully deleted";
    } else {
        echo "some trouble in deleting " . $whattarow . " record";
    }
}
