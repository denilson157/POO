<?php

require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');
require('classes/Estoque.class.php');
require('classes/Movimentacao.class.php');

class Main
{

    private $objUsuario;
    private $objFabricante;
    private $objEstoque;
    private $objMovimentacao;

    public function __construct()
    {

        $this->objUsuario = new Usuario();
        $this->objFabricante = new Fabricante();
        $this->objEstoque = new Estoque();
        $this->objMovimentacao = new Movimentacao();

        $this->verificaExisteArg(1);
        $this->executaOperacao($_SERVER['argv'][1]);
    }

    private function executaOperacao(string $operacao)
    {
        switch ($operacao) {
            case 'gravaUsuario':
                $this->gravaUsuario();
                break;
            case 'editaUsuario':
                $this->editaUsuario();
                break;
            case 'listaUsuario':
                $this->listaUsuario();
                break;
            case 'apagaUsuario':
                $this->apagaUsuario();
                break;
            default:
                echo "\n Não existe essa Funcionalidade {$_SERVER['argv'][1]}";
                break;
        }
    }

    private function apagaUsuario()
    {
        $this->objUsuario->setDados($this->preparaDadosUsuario());

        if ($this->objUsuario->apagaDados()) {
            echo "\nUsuário apagado com sucesso\n";
        } else {
            echo "\nErro ao tentar pagar usuário\n";
        }
    }

    private function listaUsuario()
    {
        $lista = $this->objUsuario->listaDados();

        foreach ($lista as $usuario) {

            echo "{$usuario['id']}\t{$usuario['nome']}\t{$usuario['cpf']}\n";
        }

        return $lista;
    }

    private function gravaUsuario()
    {
        $this->objUsuario->setDados($this->preparaDadosUsuario());

        if ($this->objUsuario->gravaDados())
            echo "Usuário inserido com sucesso";
        else
            echo "Erro ao inserir";
    }

    private function editaUsuario()
    {
        $this->objUsuario->setDados($this->preparaDadosUsuario());

        if ($this->objUsuario->gravaDados())
            echo "Usuário editado com sucesso";
        else
            echo "Erro ao inserir";
    }

    private function verificaExisteArg(int $arg)
    {
        if (!isset($_SERVER['argv'][$arg]) && $arg === 1) {
            echo "\n\n Para utilizar o programa digite 'php estoque.php [operacao]'";

            exit();
        }
        if (!isset($_SERVER['argv'][$arg]) && $arg === 2) {
            echo "\n\n Para utilizar o programa digite 'php estoque.php [operacao] [dado=valor,dado2=valor2]'";

            exit();
        }
    }

    private function preparaDadosUsuario()
    {
        $this->verificaExisteArg(2);


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
