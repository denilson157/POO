<?php


interface IItem
{
    public function setDados(array $dados): bool;
    public function getDados(int $idItem): array;
}
