<?php

$paragrafo = $_POST['paragrafo'];

echo 'il tuo paragrafo è' .$paragrafo;

$parolaDaCensurare = $_POST["parola"];

echo 'la tua parola censurata è' .$parolaDaCensurare;

echo 'la lunghezza del tuo paragrafo è di' .strlen($paragrafo) . 'caratteri';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Richiesta php</title>

</head>

<body>
    
</body>

</html>