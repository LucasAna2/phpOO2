<?php
    include_once('Aluno.php');

    $aluno1 = new Aluno($_GET['nomeAluno1'], $_GET['aluno1Bim1'], $_GET['aluno1Bim2'], 
    $_GET['aluno1Bim3'], $_GET['aluno1Bim4']);
    $aluno2 = new Aluno($_GET['nomeAluno2'], $_GET['aluno2Bim1'], $_GET['aluno2Bim2'], 
    $_GET['aluno2Bim3'], $_GET['aluno2Bim4']);

    echo $aluno1->getNome() . " possui média " . $aluno1->getMedia() . ", ou seja, " . $aluno1->converterMencao();
    echo '<br />';
    echo $aluno2->getNome() . " possui média " . $aluno2->getMedia() . ", ou seja, " . $aluno2->converterMencao();
    
?>