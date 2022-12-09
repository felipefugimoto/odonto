<?php
include('../config/db.php');

if (isset($_POST['adicionar'])) {
    $empresa = $_POST['empresa'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $uf = $_POST['uf'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $municipio = $_POST['municipio'];
    $fone = $_POST['tel'];
    $cel = $_POST['cel'];


    $sql = "INSERT INTO empresa(empresa, cnpj, email, endereco, numeroEndereco, bairro, id_uf, cep, municipio, tel, cel) 
    VALUES ('$empresa', '$cnpj', '$email', '$endereco', '$numero', '$bairro', '$uf', '$cep', '$municipio', '$fone', '$cel')";

    if (mysqli_query($con, $sql)) {

        header('Location: ../view/administrativo.php');
    } else {
        header('Location: ../view/administrativo.php?ERRO');
    }
}