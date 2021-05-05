<?php

class RelatorioIncorreto //ferindo o principio da responsabilidade
{
    private $dados;

    public function setDados(array $dados)
    {
    }

    public function exportarParaPdf()
    {
    }

    public function exportarParaCsv()
    {
    }
}


class RelatorioCorreto
{
    private $dados;

    public function setDados(array $dados)
    {
    }

    public function exportarParaPdf()
    {
    }

    public function exportarParaCsv()
    {
    }
}

abstract class ExportaDados
{
}

class ExportaDadosPdf extends ExportaDados
{
    public function exportar()
    {
    }
}

class ExportaDadosExcel extends ExportaDados
{
    public function exportar()
    {
    }
}
