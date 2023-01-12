<?php

namespace Router;
abstract class RouteSwitch
{
    protected function home()
    {
        require __DIR__ . './index.php';
    }
    protected function imovel()
    {
        require __DIR__ . './imoveis.php';
    }
}