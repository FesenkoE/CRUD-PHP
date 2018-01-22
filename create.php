<?php
$user = "root";
$pass = "123";

if (isset($_POST['name']) && $_POST['last_name']) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];


try {
    $link = new PDO("mysql:host=localhost; dbname=CRUD", $user, $pass);
//    echo "Connect success!";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

    $sql = "INSERT INTO user (name, description) 
            VALUES (:name, :description)";

    $pdo_statement = $link->prepare($sql);
    $pdo_statement->bindParam(':name', $name);
    $pdo_statement->bindParam(':description', $last_name);
    $pdo_statement->execute();
}
$link = null;

//header("Location: index.php");
//exit;

/*Test for ERROR
echo "<br>PDOStatement::errorInfo():<br>";
$arr = $pdo_statement->errorInfo();
print_r($arr);
*/



