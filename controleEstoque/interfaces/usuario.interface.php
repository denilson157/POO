<?php


interface IUsuario {
    public function setDados(array $dados):bool;
    public function getDados(int $idUsuario):array;
}