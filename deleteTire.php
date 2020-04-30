<?php
require_once('../model/database.php');
// Get IDs
$tireID2 = $_POST['tDelete'];


    $queryTDel = 'DELETE FROM Tires
              WHERE tId = :tireID2';
    $statement9 = $db->prepare($queryTDel);
    $statement9->bindValue(':tireID2', $tireID2);
    $success2 = $statement9->execute();
    $statement9->closeCursor();

include('../Control/customerSearch.php');

?>
