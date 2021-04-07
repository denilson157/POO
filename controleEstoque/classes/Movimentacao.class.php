<?php

require(__DIR__ . '/../interfaces/movimentacao.interface.php');


class Movimentacao implements IMovimentacao
{
    public function setDados(array $dados):bool
    {
        return true;
    }

    public function getDados(string $tipo, string $datahora, int $idUsuario):array
    {
        return [];
    }
}
