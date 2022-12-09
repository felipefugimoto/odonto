<?php

if(isset($_POST['enviar'])){
    $senha = $_POST['senha'];
    $senhaCorreta = 'admin';

    $login = $_POST['login'];
    $loginCorreto = 'admin';
 

    if($senha == $senhaCorreta && $login == $loginCorreto){
        header('Location: ../view/home.php');
    }else{
        
        header('Location: ../index.php');
    }



   
}