<?php


interface IFabricante {
    public function setDados(array $dados):bool;
    public function getDados(int $idFabricante):array;
}