<?php

$paragraph = "Domani andrò a mangiare in un nuovo ristorante a Roma";

$paragraph_length = strlen($paragraph);

$word = $_GET["word"];


$censured = str_replace($word, '***', $paragraph);

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

</body>

</html>