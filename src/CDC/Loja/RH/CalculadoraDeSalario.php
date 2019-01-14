<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;
use CDC\Loja\RH\TabelaCargos;

class CalculadoraDeSalario
{
    public function calculaSalario(Funcionario $funcionario)
    {
        if($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR){
            if($funcionario->getSalario() > 3000)
                return $funcionario->getSalario() * 0.8;
            return $funcionario->getSalario() * 0.9;
        }
        return 425.00;
    }
}

?>