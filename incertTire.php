<?php
require('../model/database.php');
$pos = filter_input(INPUT_POST, 'pos');
$Code = filter_input(INPUT_POST, 'code');
$Name = filter_input(INPUT_POST, 'name');
$RepairNum = filter_input(INPUT_POST, 'rNum');
$CarID4 = filter_input(INPUT_POST, 'cID');


if(strlen($pos) < 1 || strlen($Code) < 1 || strlen($Name) < 1 || strlen($RepairNum) < 1 || strlen($CarID4) < 1){
        echo 'Error: All fields must be filled in';
        include '../Control/customerSearch.php';
}else{

$queryNewTire = 'INSERT INTO Tires(tPos, tCode, tName, tRepairNum, vId)
                VALUES(:pos, :Code, :Name, :RepairNum, :CarID4)';

$statement8 = $db->prepare($queryNewTire);
$statement8->bindValue(':pos', $pos);
$statement8->bindValue(':Code', $Code);
$statement8->bindValue(':Name', $Name);
$statement8->bindValue(':RepairNum', $RepairNum);
$statement8->bindValue(':CarID4', $CarID4);
$statement8->execute();
$statement8->closeCursor();

include '../Control/customerSearch.php';
}
?>
