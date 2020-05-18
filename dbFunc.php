<?php

function getTire(){
   require_once('database.php');

   $tireID3 = $_POST['tTires'];
   $queryTire2 = 'SELECT * FROM Tires
           WHERE :tireID3 = tId';
   $statement10 = $db->prepare($queryTire2);
   $statement10->bindValue(':tireID3', $tireID3);
   $statement10->execute();
   $tires2 = $statement10->fetchAll();
   $statement10->closeCursor();
}
?>
