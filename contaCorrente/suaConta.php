<?php
require_once "Conta.php";

if($_POST['dinheiroInicial'] < 200){
    header('Location: criarConta.php');
}else{

    session_start();

    $_SESSION['Conta'] = new Conta($_POST['Nome'],$_POST['dinheiroInicial'], time("d/m/Y"));

    header('Location: menuInicial.php');
}
?>