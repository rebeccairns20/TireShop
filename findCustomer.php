<?php
require('../model/database.php');

$phone = filter_input(INPUT_POST, 'phone');

$queryCust = 'SELECT * FROM Customers
                  WHERE :phone = cusPhone';
$statement2 = $db->prepare($queryCust);
$statement2->bindValue(':phone', $phone);
$statement2->execute();
$customers = $statement2->fetchAll();
$statement2->closeCursor();

foreach ($customers as $customer) {
        $cusID = $customer['cusId'];
}

$queryVeh = 'SELECT * FROM Vehicle
                  WHERE :cusID = cusID';
$statement3 = $db->prepare($queryVeh);
$statement3->bindValue(':cusID', $cusID);
$statement3->execute();
$vehicles = $statement3->fetchAll();
$statement3->closeCursor();

include  '../Control/viewCustomer.php';
?>
