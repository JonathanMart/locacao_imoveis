<?php

namespace Mvc\Controladores;

use Mvc\Controladores\BaseControladores;
use Mvc\Model\Imoveis as ImoveisModel;
class Imoveis extends BaseControladores
{

    protected $camposNecessarios = [
        'tipo',
        'metragem',
        'comodos',
        'cep',
        'areas_comuns',
        'vagas_automovel'
    ];

    public function cadastrar()
    {
        try {
            $posts = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);

            $this->verificarCamposObrigatorios($posts, $this->camposNecessarios);
    
            $imoveisModel = new ImoveisModel();
            $imoveisModel->cadastrar($posts);
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function procurarImovel($retornoJson = true)
    {
        try {
            $idImovel = (int) filter_input(INPUT_GET, 'idImovel', FILTER_SANITIZE_STRIPPED);

            if (!$idImovel) {
                throw new \Exception('Você precisa enviar o parametro idImovel.');
            }

            $imoveisModel = new ImoveisModel();
            $imovelPesquisado = $imoveisModel->procurarImovel($idImovel);

            if ($retorno == 'json') {
                echo $imovelPesquisado;
            } else {
                return $retorno;
            }
            
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function todosImoveis()
    {
        try {
            $imoveisModel = new ImoveisModel();
            $imoveisPesquisados = $imoveisModel->todosImoveis();

            echo $imoveisPesquisados;
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function editar()
    {
        try {
            $posts = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
            $idImovel = filter_input(INPUT_GET, 'idImovel', FILTER_VALIDATE_INT);

            if (!$idImovel) {
                throw new \Exception('É necessário enviar o ID do imóvel que deseja editar');
            }
    
            $imoveisModel = new ImoveisModel();
            $imoveisModel->editar($idImovel, $posts);
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function deletarImovel()
    {
        try {
            $idImovel = (int) filter_input(INPUT_POST, 'idImovel', FILTER_SANITIZE_STRIPPED);

            if (!$idImovel) {
                throw new \Exception('Você precisa enviar o parametro idImovel.');
            }

            $imoveisModel = new ImoveisModel();
            $imovelDeletado = $imoveisModel->deletarImovel($idImovel);

            if ($imovelDeletado) {
                echo 'O imóvel foi deletado com sucesso!';
                return true;
            }

            echo 'Não foi possível deletar esse imóvel!';
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
}