<?php

namespace Mvc\Conexao;

class Database
{

    private $DATABASE = 'imoveis';
    private $HOST = 'localhost';
    private $USER = 'root';
    private $PASSWORD = '';
    private $conexao = null;

    public function __construct()
    {
        try {
            $pdo = new \PDO("mysql:dbname=$this->DATABASE;host=$this->HOST", $this->USER, $this->PASSWORD);
            $this->conexao = $pdo;
        } catch (\PDOException $e) {
           echo "Erro com banco de dados:".$e->getMessage();
        }catch(\Exception $e){
            echo "Erro generico: ".$e->getMessage();
        }
    }

    public function getConexao()
    {
        return $this->conexao;
    }
}