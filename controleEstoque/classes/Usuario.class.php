<?php

require_once(__DIR__ . '/../interfaces/usuario.interface.php');
require_once(__DIR__ . '/abstratas/TipoPessoa.class.php');


class Usuario extends TipoPessoa implements IUsuario
{
    protected $id;
    protected $nome;
    protected $cpf;

    public function __construct()
    {
        parent::__construct();
    }

    public function setDados(array $dados): bool
    {
        $this->id = $dados['id'] ?? null;
        $this->nome = $dados['nome'] ?? null;
        $this->cpf = $dados['cpf'] ?? null;

        return true;
    }

    public function gravaDados(): bool
    {

        if (empty($this->id))
            return $this->insereDados();
        else
            return $this->atualizaDados();
    }


    public function atualizaDados(): bool
    {
        $stmt = $this->prepare('UPDATE usuarios 
        SET cpf = :cpf, nome = :nome 
        WHERE
            id = :id');

        if ($stmt->execute([':cpf' => $this->cpf, ':nome' => $this->nome, ':id' => $this->id]))
            return true;
        else
            return false;
    }

    public function insereDados(): bool
    {
        $stmt = $this->prepare('INSERT INTO usuarios (cpf, nome) 
        VALUES 
        (:cpf, :nome)');

        if ($stmt->execute([':cpf' => $this->cpf, ':nome' => $this->nome]))
            return true;
        else
            return false;
    }

    public function listaDados(): array
    {
        $stmt = $this->prepare('SELECT * from usuarios');

        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function apagaDados(): bool
    {
        if ($this->id) {

            $stmt = $this->prepare('DELETE FROM usuarios WHERE id = :id');

            if ($stmt->execute([':id' => $this->id]))
                return true;
            else
                return false;
        }
        return false;
    }


    public function getDados(int $idUsuario): array
    {
        return [];
    }
}
