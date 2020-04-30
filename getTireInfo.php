<?php
require('../model/database.php');

$carID2 = filter_input(INPUT_POST, 'vTires');

$queryCar = 'SELECT * FROM Vehicle
                  WHERE :carID2 = vId';
$statement7 = $db->prepare($queryCar);
$statement7->bindValue(':carID2', $carID2);
$statement7->execute();
$vehicles2 = $statement7->fetchAll();
$statement7->closeCursor();

foreach ($vehicles2 as $vehicle2) {
        //echo  $vehicle2['vVin'];
}

$queryTire = 'SELECT * FROM Tires
              WHERE :carID2 = vId';
$statement8 = $db->prepare($queryTire);
$statement8->bindValue(':carID2', $carID2);
$statement8->execute();
$tires = $statement8->fetchAll();
$statement8->closeCursor();

foreach ($tires as $tire) {
      // echo  "</br>" . $tire['tId'];
}




include  '../Control/viewTire.php';





?>
