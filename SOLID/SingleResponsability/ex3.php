<?php


class PostErrado //ferindo o principio da responsabilidade
{
    private $titulo;

    public function setTitulo(string $titulo)
    {
    }

    public function gerarUrlAmigavel()
    {
    }

    public function buscarPostSemelhante()
    {
    }
}


class Post //ferindo o principio da responsabilidade
{
    private $titulo;

    public function setTitulo(string $titulo)
    {
    }
}

abstract class Busca
{
}

class BuscaSemelhanca extends Busca
{
    public function buscar()
    {
    }
}

class Url
{
    public function gerarUrlAmigavel()
    {
    }
}
