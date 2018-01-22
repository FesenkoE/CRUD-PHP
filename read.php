<?php
$user = "root";
$pass = "123";
try {
        $pdo = new PDO("mysql:host=localhost; dbname=CRUD", $user, $pass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $sql = "SELECT * FROM user";

    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();




