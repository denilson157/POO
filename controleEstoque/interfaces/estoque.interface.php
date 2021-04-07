<?php


interface IEstoque {
    public function setDados(array $dados):bool;
    public function getDados(int $idEstoque):array;
}