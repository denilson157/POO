<?php

interface IVeiculo
{
    static function setMarca(string $novaMarca): void;
    static function getMarca(): string;
    function setModelo(string $novoModelo): bool;
    function getModelo(): string;
}

class Veiculo implements IVeiculo
{
    static protected $marca;
    private $modelo;

    static public function setMarca(string $novaMarca): void
    {
        self::$marca = $novaMarca;
    }

    static public function getMarca(): string
    {
        return self::$marca;
    }

    public function setModelo(string $novoModelo): bool
    {
        $this->modelo = $novoModelo;
        return true;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }
   
}
