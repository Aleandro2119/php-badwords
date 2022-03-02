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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP-BADWORDS</title>
</head>

<body>
    <header class="p-4 text-center">
        <h1>CENSURA LA PAROLA</h1>

        <form method="get">
            <input type="text" placeholder="Inserisci la parola da censurare..." name="word">
            <button type="submit">Censured</button>
        </form>
    </header>
    <main class="container text-center m-5">
        <h2><?php echo $censured ?></h2>
        <p><?php echo "Lunghezza paragrafo originale: $paragraph_length"; ?></p>
        <p><?php echo "Lunghezza paragrafo censurato: $censured_length"; ?></p>
    </main>
</body>

</html>