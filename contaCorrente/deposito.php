<?php
    require_once "Conta.php";

    session_start();

    $_SESSION['Conta']->deposito($_GET['valorDepositado']);

    echo "<form action='menuInicial.php'>
        <input type='submit' value='Home'>
        </form>";
?>