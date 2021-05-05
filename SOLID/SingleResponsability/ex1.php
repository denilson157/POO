<?php

class Usuario
{

    private $nome;

    public function setNome()
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function enviarEmail()
    {
    }
}


class Email
{

    public function enviarEmail()
    {
    }
}

abstract class ExportarDados
{
}

class ExportarDadosPlanilha extends ExportarDados
{
    public function exportarParaPlanilha()
    {
    }
}
