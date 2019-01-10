<?php
namespace CDC\Loja\Produto;

require "./vendor/autoload.php";

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\Produto;
use CDC\Loja\Produto\MaiorEMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorEMenorTest extends PHPUnit 
{
    public function seeder()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(
            new Produto("Geladeira", 450.00)
        );

        $carrinho->adiciona(
            new Produto("Secador de Cabelo", 80.00)
        );

        $carrinho->adiciona(
            new Produto("Jogo de Prato", 250.00)
        );

        return $carrinho;
    }

    public function test_Adicao_Carrinho()
    {
        $carrinho = $this->seeder();

        $this->assertTrue($carrinho->adicionarProduto());
    }

    public function testMenor()
    {
        $maiorMenorObject = new MaiorEMenor();
        $maiorMenorObject->encontra($this->seeder());

        $this->assertEquals("Secador de Cabelo", $maiorMenorObject->getMenor()->getNome());
    }

    public function testMaior()
    {
        $maiorMenorObject = new MaiorEMenor();
        $maiorMenorObject->encontra($this->seeder());

        $this->assertEquals("Geladeira", $maiorMenorObject->getMaior()->getNome());
    }
}

?>