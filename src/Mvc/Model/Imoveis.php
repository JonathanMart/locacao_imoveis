<?php

namespace Mvc\Model;

use Mvc\Conexao\Database;

class Imoveis
{
    protected $camposNecessarios = [
        'tipo',
        'metragem',
        'comodos',
        'cep',
        'areas_comuns',
        'vagas_automovel'
    ];
    public function cadastrar(array $dados)
    {
        $database = new Database();
        $conexao = $database->getConexao();
        
        $localizacao = $this->getLocalizacaoApiCorreios($dados['cep']);
        
        $query = $conexao->prepare(
            'INSERT INTO imovel '.
            '(tipo, metragem, comodos, localizacao, cep, areas_comuns, vagas_automovel) '.
            'VALUES (:tipo, :metragem, :comodos, :localizacao, :cep, :areas_comuns, :vagas_automovel)'
        );

        $query->bindParam('tipo', $dados['tipo'], \PDO::PARAM_STR);
        $query->bindParam('metragem', $dados['metragem'], \PDO::PARAM_STR);
        $query->bindParam('comodos', $dados['comodos'], \PDO::PARAM_INT);
        $query->bindParam('localizacao', $localizacao, \PDO::PARAM_STR);
        $query->bindParam('cep', $dados['cep'], \PDO::PARAM_INT);
        $query->bindParam('areas_comuns', $dados['areas_comuns'], \PDO::PARAM_STR);
        $query->bindParam('vagas_automovel', $dados['vagas_automovel'], \PDO::PARAM_INT);

        $query->execute();
    }

    public function procurarImovel(int $idImovel)
    {
        $database = new Database();
        $conexao = $database->getConexao();
        
        $query = $conexao->prepare('SELECT * FROM imovel WHERE id = :id');
        $query->bindParam('id', $idImovel, \PDO::PARAM_INT);
        $query->execute();

        $resultado = $query->fetchObject();

        if (!$resultado) {
            throw new \Exception('Não foi possível encontrar o imóvel com o ID informado.');
        }

        return json_encode($resultado);
    }

    public function todosImoveis()
    {
        $resultado = array();
        $database = new Database();
        $conexao = $database->getConexao();
        
        $query = $conexao->prepare('SELECT * FROM imovel');
        $query->execute();

        $resultado = $query->fetchAll();
        
        if (!$resultado) {
            throw new \Exception('Não existem imóveis cadastrados.');
        }
        return json_encode($resultado);
    }

    public function editar(int $idImovel, array $dados)
    {
        $database = new Database();
        $conexao = $database->getConexao();

        $this->procurarImovel($idImovel);

        if (isset($dados['cep']) && $dados['cep']) {
            $localizacao = $this->getLocalizacaoApiCorreios($dados['cep']);
            $dados['localizacao'] = $localizacao;
        }

        $camposUpdate = '';

        foreach (array_keys($dados) as $campo) {
            $camposUpdate .= $campo . ' = :' . $campo . ',';
        }

        $camposUpdate = substr($camposUpdate, 0, -1);

        $query = $conexao->prepare(
            "UPDATE imovel SET {$camposUpdate} WHERE id = {$idImovel}"
        );

        foreach ($dados as $campo => $dado) {
            $query->bindValue($campo, $dado);
        }

        $query->execute();
    }

    public function deletarImovel(int $idImovel)
    {
        $database = new Database();
        $conexao = $database->getConexao();

        $this->procurarImovel($idImovel);
        
        $query = $conexao->prepare('DELETE FROM imovel WHERE id = :id');
        $query->bindParam('id', $idImovel, \PDO::PARAM_INT);
        $query->execute();

        return true;
    }

    private function getLocalizacaoApiCorreios($cep)
    {



        // $cep = "";
        // $url = "https://viacep.com.br/ws/{$cep}/json/";
        // $dados = json_decode(file_get_contents($url));
        

        // echo "Logradouro: {$dados->logradouro}";
        // echo "Complemento: {$dados->complemento}";
        // echo "Bairro: {$dados->bairro}";
        // echo "Cidade: {$dados->localidade}";
        // echo "Estado: {$dados->uf}";
        // echo "Logradouro: " . $dados->logradouro;




        $urlViaCep = 'https://viacep.com.br/ws/';
        $formatoSaida = '/json';

        $curl = curl_init($urlViaCep . $cep. $formatoSaida);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        $resultado = json_decode($data);

        if (!$resultado) {
            throw new \Exception('Não foi possível encontrar a localização, por favor, verifique o cep enviado.');
        }

        $enderecoFinal = $resultado->logradouro . ' - ' . $resultado->bairro . ', ' . $resultado->localidade . ' - ' . $resultado->uf;

        return $enderecoFinal;
       
    }
  


    
}