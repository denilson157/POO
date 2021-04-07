<?php

require_once(__DIR__ . '/../interfaces/usuario.interface.php');
require_once(__DIR__ . '/abstratas/TipoPessoa.class.php');


class Usuario extends TipoPessoa implements IUsuario
{
    public function setDados(array $dados):bool
    {
        return true;
    }

    public function getDados(int $idUsuario):array
    {
        return [];
    }
}
