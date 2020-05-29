<?php

$movieName = $_GET["movieName"];
$actorName = $_GET["actorName"];
$movieYear = $_GET["movieYear"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Man</title>
</head>
<body>
    <h1>information about <b style="color:red;"><?php echo "$movieName"; ?></b> :</h1></br>
    <h3>based on the input, here is the information so far :</h3></br>
    <b style="color:red;"><?php echo "$actorName"; ?></b> <b>started in the movie </b><b style="color:red;"><?php echo "$movieName"; ?></b><b> wich was relased in </b><b style="color:red;"><?php echo "$movieYear"; ?></b>
</body>
</html>
