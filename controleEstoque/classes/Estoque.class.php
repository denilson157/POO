<?php

require(__DIR__ . '/../interfaces/estoque.interface.php');


class Estoque implements IEstoque
{
    public function setDados(array $dados):bool
    {
        return true;
    }

    public function getDados(int $idEstoque):array
    {
        return [];
    }
}
