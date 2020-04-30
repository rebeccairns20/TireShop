<?php
    $dsn = 'mysql:host=localhost;dbname=TireShop';
    $username = 'person2';
    $password = 'Passw0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
       echo "Sorry there has been a problem.";
    }
?>
