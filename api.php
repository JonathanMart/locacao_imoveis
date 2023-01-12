<?php

require_once './vendor/autoload.php';

use Mvc\Controladores\Imoveis as ControladorImoveis;
    
$acao = filter_input(INPUT_GET, 'acao');

$modelCadastro = new ControladorImoveis();

if (!method_exists($modelCadastro, $acao)) {
    echo 'Não foi possível encontrar a requisição, essa ação não existe!';
    return false;
}

$modelCadastro->{$acao}();