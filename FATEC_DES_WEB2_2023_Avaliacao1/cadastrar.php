<?php
session_start();

if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: index.php");
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['nome']) and !empty($_POST['ra']) and !empty($_POST['placa'])) {
        $filename = 'cadastro.txt';
        $handle = fopen($filename, 'a');
        fwrite($handle, $_POST['nome'].'|'.$_POST['ra'].'|'.$_POST['placa'].PHP_EOL);
        fflush($handle);
        fclose($handle);
        print('cadastrado');
    }
    else {
        print('informações insuficientes');
    }
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
<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
            <input name='nome'>
            <label>
                nome:
            </label>
            <br/>
            <input name='ra'>
            <label>
                registro do aluno:
            </label>
            <br/>
            <input name='placa'>
            <label>
                placa:
            </label>
            <br/>
            <input type='submit' value='cadastrar'>
        </form>
        <button onclick="location.href='pginicial.php'">
            voltar
        </button>
</body>
</html>
