<?php
    require_once "Conta.php";

    session_start();

    $_SESSION['Conta']->transferir($_GET['valorTransferido']);

    echo "<form action='menuInicial.php'>
        <input type='submit' value='Home'>
        </form>";
?>