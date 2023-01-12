<?php

namespace Mvc;

class Rotas 
{

    public function route(array $caminhos)
    {
        $caminho = 'Mvc\\';

        foreach ($caminhos as $local) {
            $caminho .= $local.'\\';
        }

        $classeControlador = new $caminho;
    }

}