<?php

include "create.php";
include "read.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
<br><br>
<form action="index.php" method="POST">
    <label for="name">First name</label>
    <input class="field" type="text" name="name" id="name" required value=""><br><br>
    <label for="dis">Last name</label>
    <input class="field type="text" name="last_name" id="dis" required value=""><br><br>
    <input class="btn" type="submit" name="submit" value="Attachment">
</form>
<?php foreach ($result as $item) :?>
    <table class="table">
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= $item['description'] ?></td>
            <td><?= $item['created_at'] ?></td>
            <td class="for_btn"><a href="update.php?id= <?= $item['id'] ?>&name=<?= $item['name']?>&description=<?= $item['description']?>" class="btn-update">Update</a></td>
            <td class="for_btn"><a href="delete.php?id= <?= $item['id'] ?>" class="btn btn-delete">Delete</a></td>
        </tr>
    </table>
<?php endforeach; ?>
</body>
</html>