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

Veiculo::setMarca("Yamaha");

$moto = new Moto();
$moto->setModelo("Factor");


$moto->setIdadeProprietario(60);

echo "A marca da moto é: " . Moto::getMarca() . "\n";

echo "E seu modelo: " . $moto->getModelo() . "\n";


echo "E seus seguro: " . $moto->verificarSeguroSobreIdade() . "\n";
