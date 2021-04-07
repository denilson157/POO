<?php

require_once(__DIR__ . '/../interfaces/fabricante.interface.php');
require_once(__DIR__ . '/abstratas/TipoPessoa.class.php');


class Fabricante extends TipoPessoa implements IFabricante
{
    public function setDados(array $dados):bool
    {
        return true;
    }

    public function getDados(int $idFabricante):array
    {
        return [];
    }
}
