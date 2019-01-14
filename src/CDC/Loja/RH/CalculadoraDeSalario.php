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
        if($funcionario->getCargo() === TabelaCargos::DBA || $funcionario->getCargo() === TabelaCargos::TESTADOR){
            if($funcionario->getSalario() > 2500)
                return $funcionario->getSalario() * 0.75;
            return $funcionario->getSalario() * 0.85;
        }
        
        throw new Exception("Error Processing Request", 1);
        
    }
}

?>