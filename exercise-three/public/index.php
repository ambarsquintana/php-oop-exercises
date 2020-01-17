<?php

//require '../vendor/autoload.php';

class UnaClase
{
    public function __call($name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    public static function __callStatic($name, array $arguments)
    {
        var_dump($name, $arguments);
    }

}

$unObjeto = new UnaClase();

$unObjeto->unMetodo('Un argumento', 'Otro argumento');

UnaClase::unMetodoEstatico('Un argumento', 'Otro argumento');