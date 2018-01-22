<?php
$user = "root";
$pass = "123";

if ( isset($_GET) ) {
    try {
        $pdo = new PDO("mysql:host=localhost; dbname=CRUD", $user, $pass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    if (isset($_GET['id'])) {
        $sql = "UPDATE user SET name = :name, description = :description WHERE id = :id";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindValue(":name", $_POST["name"]);
        $pdo_statement->bindValue(":description", $_POST["last_name"]);
        $pdo_statement->bindValue(":id", $_GET["id"]);
        $pdo_statement->execute();
    }
}
$pdo = null;

?>
<form action="" method="POST">
   <input type="text" name="name" value= "<?= $_GET['name'] ?>" required><br/>
   <input type="text" name="last_name" value="<?= $_GET['description'] ?>" required><br/>
    <input type="submit" name="submit" value="Update">
</form>
<a href="index.php">Return</a>
