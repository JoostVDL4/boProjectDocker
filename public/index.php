<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Music</title>
</head>
<body>
<header>

<?php
?>
</header>




<?php

/**
 * views folder test.
 */
include('../views/data.php');

for ($i = 0; $i < 10; $i++) {
    
    foreach ($dataLibrary as $musicItem) {
        echo $musicItem['id'] . "br";

       

    }
}






?>
</body>
</html>


