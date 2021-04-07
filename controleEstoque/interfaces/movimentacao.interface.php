<?php


interface IMovimentacao {
    public function setDados(array $dados):bool;
    public function getDados(string $tipo, string $datahora, int $idUsuario):array;
}