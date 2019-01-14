<?php

namespace CDC\Loja\RH;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;
use CDC\Loja\RH\CalculadoraDeSalario;
use CDC\Loja\RH\Funcionario;
use CDC\Loja\RH\TabelaCargos;

class CalculadoraDeSalariosTest extends PHPUnit
{

    public function test_Calculo_Salario_Desenvolvedores_Com_Salario_Abaixo_Do_Limite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
            "Andre",
            1500.00,
            TabelaCargos::DESENVOLVEDOR
        );

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(
            1500.00*0.9,
            $salario,
            null,
            0.00001
        );
    }

    public function test_Calculo_Salario_Desenvolvedores_Com_Salario_Acima_Do_Limite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
            "Pedro",
            4000.00,
            TabelaCargos::DESENVOLVEDOR
        );

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(
            4000.00*0.8,
            $salario,
            null,
            0.00001
        );
    }

    public function test_Calculo_Salario_DBAs_Com_Salario_Abaixo_Do_Limite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
            "Andre DBA",
            500.00,
            TabelaCargos::DBA
        );

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(
            500.00*0.85,
            $salario,
            null,
            0.00001
        );
    }

}

?>