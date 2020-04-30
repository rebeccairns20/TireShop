<?php
require('../model/database.php');
$vin = filter_input(INPUT_POST, 'vin');
$mile = filter_input(INPUT_POST, 'mile');
$year = filter_input(INPUT_POST, 'year');
$model = filter_input(INPUT_POST, 'model');
$make = filter_input(INPUT_POST, 'make');
$customID = filter_input(INPUT_POST, 'customID');


//add catch for empty values

$queryNewVeh = 'INSERT INTO Vehicle(vVin, vMilage, vYear, vModel, vmake, cusId)
                VALUES(:vin, :mile, :year, :model, :make, :customID)';

$statement5 = $db->prepare($queryNewVeh);
$statement5->bindValue(':vin', $vin);
$statement5->bindValue(':mile', $mile);
$statement5->bindValue(':year', $year);
$statement5->bindValue(':model', $model);
$statement5->bindValue(':make', $make);
$statement5->bindValue(':customID', $customID);
$statement5->execute();
$statement5->closeCursor();

include '../Control/customerSearch.php';
?>
