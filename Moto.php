<?php

require_once "./Veiculo.php";

class Moto extends Veiculo
{
    private $idadeProprietario;

    public function setIdadeProprietario(int $novaIdade): bool
    {
        $this->idadeProprietario = $novaIdade;
        return true;
    }

    public function verificarSeguroSobreIdade(): string
    {
        if ($this->idadeProprietario < 18)
            return "O dono da moto nem deveria ter um veículo;";
        else if ($this->idadeProprietario >= 18 && $this->idadeProprietario <= 25)
            return "O dono da moto irá ter seguro altos pela sua baixa idade";
        else if ($this->idadeProprietario > 25 && $this->idadeProprietario <= 35)
            return "O dono da moto irá ter seguro moderados pela sua idade um pouco baixa";
        else
            return "O dono da moto irá ter seguro baixos por conta de sua idade";

        return "Erro";
    }
}

class Scotter
{
    private $moto;

    public function __construct($moto)
    {
        $this->moto = $moto;
    }

    public function __destruct()
    {
        echo "\n Destrutor executado\n";
    }
}

class Condutor
{
    private $nome;
    private $moto;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function inserirMoto(Moto $moto)
    {
        $this->moto = $moto;
    }

    public function getInfoMoto()
    {
        echo "A marca da moto é: " . Moto::getMarca() . "\n";

        echo "E seu modelo: " . $this->moto->getModelo() . "\n";


        echo "E seus seguro: " . $this->moto->verificarSeguroSobreIdade() . "\n";
    }
}


$moto = new Moto();
$moto->setMarca("Yamaha");

$moto->setModelo("Factor");
$moto->setIdadeProprietario(60);

// $scotters = new Scotter($moto);

// var_dump($scotters);

$condutor = new Condutor();
$condutor->setNome("Denílson");

$condutor->inserirMoto($moto);
$condutor->getInfoMoto();
