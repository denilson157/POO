<?php

interface IPessoa
{

    public function enviarCorrespondencia();
    public function receberCorrespondencia();
}


abstract class Pessoa implements IPessoa
{
    protected $nome;
    protected $endereco;

    public function enviarCorrespondencia()
    {
        echo "chamou 1";
    }

    public function receberCorrespondencia()
    {
    }
}

class PessoaFisica extends Pessoa
{
    private $cpf;
    private $imc;

    public function enviarCorrespondencia()
    {
        echo "chamou primeiro";
    }

    public function praticarExercicio()
    {
    }

    public function comer()
    {
    }
}

class PessoaJuridica  extends Pessoa
{
    private $cnpj;
    private $nomeFantasia;

    public function abrirFilial()
    {
    }

    public function fecharFilial()
    {
    }
}

$joao = new PessoaFisica();
$joao->enviarCorrespondencia();

var_dump($joao);
