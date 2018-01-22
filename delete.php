<?php
$user = "root";
$pass = "123";
try {
    $pdo = new PDO("mysql:host=localhost; dbname=CRUD", $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if ( isset($_GET['id']) ) {
    $sql = "DELETE FROM user WHERE id = :id";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindValue(":id", $_GET["id"]);
    $pdo_statement->execute();
}
header("Location: index.php");
$pdo = null;
?>

