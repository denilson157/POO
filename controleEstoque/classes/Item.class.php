<?php

require(__DIR__ . '/../interfaces/item.interface.php');


class Item implements IItem
{
    public function setDados(array $dados):bool
    {
        return true;
    }

    public function getDados(int $idItem):array
    {
        return [];
    }
}
