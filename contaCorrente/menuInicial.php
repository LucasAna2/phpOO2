<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <strong>SEJA BEM VINDO</strong>
    
    <br/>

    <form action="saque.php" method="GET">
        <strong>Saque</strong>
        <input type="number" name="valorSacado" id="valorSacado" placeholder="Digite o valor sacado">
        
        <input type="submit" value="Sacar">
    </form>

        <br/>

    <form action="deposito.php" method="get">    
        <strong>Depósito</strong>
        <input type="number" name="valorDepositado" id="valorDepositado" placeholder="Digite o valor depositado">
        
        <input type="submit" value="Depositar">
    </form>

        <br/>

    <form action="transferencia.php" method="GET">
        <strong>Transferência</strong>
        <input type="number" name="valorTransferido" id="valorTransferido" placeholder="Digite o valor transferido">
        

        <input type="submit" value="Transferir">

    </form>

    <br/><br/>

    <form action="checarSaldo.php" method="get">
        <input type="submit" value="Checar Saldo">
    </form>

</body>
</html>

