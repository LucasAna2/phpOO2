<?php
    require_once "Conta.php";

    session_start();

    $_SESSION['Conta']->sacar($_GET['valorSacado']);

    echo "<form action='menuInicial.php'>
        <input type='submit' value='Home'>
        </form>";
?>