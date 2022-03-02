<?php

$paragraph = "Domani andrò a mangiare in un nuovo ristorante a Roma";

$paragraph_length = strlen($paragraph);

$word = $_GET["word"];


$censured = str_replace($word, '***', $paragraph);
$censured_length = strlen($censured);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>

<body>
    <main>
        <h1><?php echo $censured ?></h1>
        <h2><?php echo "Lunghezza paragrafo originale: $paragraph_length"; ?></h2>
        <h2><?php echo "Lunghezza paragrafo censurato: $censured_length"; ?></h2>

        <form method="get">
            <input type="text" placeholder="Inserisci la parola da censurare" name="word">
            <button type="submit">Censured</button>
        </form>
    </main>
</body>

</html>