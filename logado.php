<?php

    include_once("data/data.php");

    $verificacao = true;

    foreach($users as $user){
            
        if($_POST["login"] == $user["email"]) { 
                
            echo "Bem vindo(a) " . $user["nome"];
            $verificacao = false;

        }

    }

    if($verificacao = false){
        echo "oi";
        session_start();
        $_SESSION["erro"] = "Login ou senha incorretos, tente novamente";
        header("Location: index.php");
    

    }

?>
