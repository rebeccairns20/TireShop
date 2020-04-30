<?php

require_once('../model/database.php');

$tireID3 = filter_input(INPUT_POST, 'tireID');
$tpos3 = filter_input(INPUT_POST, 'pos');
$tcode3 = filter_input(INPUT_POST, 'code');
$tname3 = filter_input(INPUT_POST, 'name');
$trNum3 = filter_input(INPUT_POST, 'rNum');

//echo $tireID3 . $tpos3  . $tcode3  . $tname3  . $trNum3;

if(strlen($tireID3) < 1 || strlen($tpos3) < 1 || strlen($tcode3) < 1 || strlen($tname3) < 1 || strlen($trNum3) < 1){
        echo 'Error: All fields must be filled in';
        include '../Control/customerSearch.php';
}else{



$updateQuery = 'UPDATE Tires
                SET tPos = :tpos3, tCode = :tcode3, tName = :tname3, tRepairNum = :trNum3
                  WHERE tId = :tireID3';

$statement13 = $db->prepare($updateQuery);
    $statement13->bindValue(':tireID3', $tireID3);
    $statement13->bindValue(':tpos3', $tpos3);
    $statement13->bindValue(':tcode3', $tcode3);
    $statement13->bindValue(':tname3', $tname3);
    $statement13->bindValue(':trNum3', $trNum3);
    $success3 = $statement13->execute();
    $statement13->closeCursor();

include '../Control/customerSearch.php';

}
?>
