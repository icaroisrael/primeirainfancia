<?php
    $usuario = $_POST['user'];
    $senha = $_POST['pass'];
    if(($usuario == "stone") && ($senha == "stone01")){
        session_start();
        $_SESSION['usuario'] = "stone";
        header('Location:home.php');
    }else{
        header('Location:../index.html');
    }
?>