<?php
require('../model/database.php');

$username2 = filter_input(INPUT_POST, 'username');
$password2 = filter_input(INPUT_POST, 'password');

$queryEmployees = 'SELECT * FROM Employees
                  WHERE :username = empUsername';
$statement = $db->prepare($queryEmployees);
$statement->bindValue(':username', $username2);
$statement->execute();
$employees = $statement->fetchAll();
$statement->closeCursor();

foreach ($employees as $employee) {
        if($password2 != $employee['empPassword']){
                echo "Username or password is incorrect";
                include '../Control/home.php';

        }else{
                $lifetime = 60 * 60 * 24 * 14;
                session_set_cookie_params($lifetime, '/');
                session_start();
                include '../Control/customerSearch.php';
        }

}

?>
