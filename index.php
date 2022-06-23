<?php 
    
    session_start();
    
    if(!empty($_SESSION["erro"]) & $_SESSION["erro"] != "") {
       
        $msg = $_SESSION["erro"];
        echo $msg;
        $_SESSION["erro"] = ""; 

    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de autenticação</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="main-container">
        <form action="logado.php" method="POST">
            <div class="form-container">
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" placeholder="Digite seu login">
            </div>
            <div class="form-container">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Digite sua senha">
            </div>
            <input type="submit" class="enviar-btn" value="Entrar">
        </form>
    </div>
</body>
</html>