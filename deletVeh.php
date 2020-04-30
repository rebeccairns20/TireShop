<?php
require_once('../model/database.php');
// Get IDs
$carID = $_POST['vDelete'];
//echo $carID;

    $queryDCar = 'DELETE FROM Vehicle
              WHERE vId = :carID';
    $statement6 = $db->prepare($queryDCar);
    $statement6->bindValue(':carID', $carID);
    $success = $statement6->execute();
    $statement6->closeCursor();

include('../Control/customerSearch.php');

?>
