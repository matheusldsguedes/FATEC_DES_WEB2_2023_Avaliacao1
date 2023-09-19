<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['usuario'] == 'portaria' and $_POST['senha'] == 'fatecararas'){
        $_SESSION['login'] = TRUE;
         header("location: pginicial.php");
    } else {
        $_SESSION['login'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Usuario</label>
                <input type="text" name="usuario">
                <span class="help-block"></span>
            </div>    
            <div>
                <label>senha</label>
                <input type="password" name="senha">
                <span class="help-block"></span>
            </div>
            <div>
                <input type="submit" value="entrar">
            </div>
        </form>
</body>
</html>