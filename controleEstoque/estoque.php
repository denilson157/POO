<?php

require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');
require('classes/Estoque.class.php');
require('classes/Movimentacao.class.php');

class Main
{
    public function __construct()
    {

        $objUsuario = new Usuario();

        $objFabricante = new Fabricante();
        $objEstoque = new Estoque();
        $objMovimentacao = new Movimentacao();

        switch ($_SERVER['argv'][1]) {
            case 'gravaUsuario':

                $this->gravaUsuario($objUsuario);

                break;
            case 'editaUsuario':

                $this->gravaUsuario($objUsuario);

                break;

            default:
                echo "\n Não existe essa Funcionalidade {$_SERVER['argv'][1]}";
                break;
        }
    }

    public function gravaUsuario(Usuario $objUsuario)
    {
        $objUsuario->setDados($this->preparaDadosUsuario());

        if ($objUsuario->gravaDados())
            echo "Usuário inserido com sucesso";
        else
            echo "Erro ao inserir";
    }

    public function editaUsuario(Usuario $objUsuario)
    {
        $objUsuario->setDados($this->preparaDadosUsuario());

        if ($objUsuario->gravaDados())
            echo "Usuário editado com sucesso";
        else
            echo "Erro ao inserir";
    }

    public function preparaDadosUsuario(): array
    {
        $args = explode(',', $_SERVER['argv'][2]);

        foreach ($args as $valor) {

            $arg = explode('=', $valor);

            $dados[$arg[0]] = $arg[1];
        }

        return $dados;
    }

    public function __destruct()
    {
        echo "FIM";
    }
}

new Main;
