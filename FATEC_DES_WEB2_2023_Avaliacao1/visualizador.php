<?php
session_start();

if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: index.php");
    exit;
}

$filename = 'cadastro.txt';
    if(!file_exists($filename)) {
        echo('nao ha cadastro existente'.PHP_EOL.'<br>');
    }
    else {
        $handle = fopen($filename, 'r');
        while(!feof($handle)) {
            echo(fgets($handle).PHP_EOL.'<br>');
        }
        fclose($handle);
    }

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
<button onclick="location.href='pginicial.php'">
            voltar
        </button>
</body>
</html>