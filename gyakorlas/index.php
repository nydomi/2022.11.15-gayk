<?php 
    $menuitem = filter_input(INPUT_GET, "menu", FILTER_SANITIZE_STRING); 
    echo'A felhasználó ezt akarja: '.$menuitem;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FAQ</h1>
    <nav>
        <ul>
            <li><a href="index.php?menu=home">Home</a></li>
            <li><a href="index.php?menu=contact">Contact</a></li>
            <li><a href="index.php?menu=about">About</a></li>
        </ul>
    </nav>
    <?php
        echo("SUS");
    ?>
</body>
</html>