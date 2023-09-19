<?php
session_start();

if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: index.php");
    
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <div>
        <h1>Olá, seja Benvindo</h1>
    </div>
    <button onclick="location.href='cadastrar.php'">
            cadastrar
        </button>
        <br/>
        <button onclick="location.href='visualizador.php'">
            ver cadastros
        </button>
        <br/>
        <button onclick="location.href='sair.php'">
            sair
        </button>
</body>
</html>