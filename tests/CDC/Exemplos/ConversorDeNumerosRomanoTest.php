<?php

namespace CDC\Exemplos;
require "./vendor/autoload.php";

use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
    public function test_Deve_Entender_O_Simbolo_I()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero);
    }

    public function test_Deve_Entender_O_Simbolo_V()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("V");
        $this->assertEquals(5, $numero);
    }

    public function test_Deve_Entender_O_Simbolo_X()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("X");
        $this->assertEquals(10, $numero);
    }

    public function test_Deve_Entender_O_Simbolo_II()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("II");
        $this->assertEquals(2, $numero);
    }

    public function test_Deve_Entender_O_Simbolo_XXII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXII");
        $this->assertEquals(22, $numero);
    }

    public function test_Deve_Entender_O_Simbolo_IX()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("IX");
        $this->assertEquals(9, $numero);
    }

    public function test_Deve_Entender_O_Simbolo_XXIV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXIV");
        $this->assertEquals(24, $numero);
    }
}

?>