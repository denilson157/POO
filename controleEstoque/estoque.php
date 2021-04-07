<?php

require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');


class Main {
    public function __construct(){
        $objUsuario = new Usuario();
        $objFabricante = new Fabricante();
    }

    public function __destruct()
    {
        echo "FIM";
    }
}

new Main;