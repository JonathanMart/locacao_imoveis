<?php

namespace Router;
use Router\RouteSwitch;

class Router extends RouteSwitch
{

//$inq = new inquilino("imoveis","localhost","root","");
//$imo = new imovel("imoveis","localhost","root","");
//$imob = new imobiliaria("imoveis","localhost","root","");
//$prop = new proprietario("imoveis","localhost","root","");

    public function run(string $requestUri){
        $route = substr($requestUri, 1);
        
        if ($route === ''){
            $this->home();
        } else {
            $this->$route();
        }
    }
}