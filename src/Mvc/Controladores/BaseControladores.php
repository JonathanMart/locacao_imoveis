<?php

namespace Mvc\Controladores;

abstract class BaseControladores 
{
    protected $metodo_post = 'POST';
    protected $metodo_get = 'GET';
    protected $metodo_put = 'PUT';
    protected $metodo_delete = 'DELETE';


    protected function verificarCamposObrigatorios(mixed $camposEnviados, array $camposNecessarios)
    {
        if (!$camposEnviados || !is_array($camposEnviados)) {
            throw new \Exception('Você não enviou nenhum dado.');
        }

        foreach ($camposNecessarios as $campo) {
            if (!in_array($campo, array_keys($camposEnviados))) {
                throw new \Exception('Você não enviou o campo ' . $campo);
            }
        }

        return true;
    }
    
}