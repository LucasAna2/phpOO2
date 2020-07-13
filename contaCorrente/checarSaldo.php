<?php
    require_once "Conta.php";

    session_start();
    
    $saldo = $_SESSION['Conta']->getSaldo();
    
    echo "Você possui um saldo de R$" . $saldo;
?>