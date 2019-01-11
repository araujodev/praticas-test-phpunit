<?php
namespace CDC\Loja\Carrinho;

require "./vendor/autoload.php";

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\Produto;
use CDC\Loja\Produto\MaiorEMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class ApenasUmProdutoCarrinhoTest extends PHPUnit 
{
    public function seeder()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(
            new Produto("Geladeira", 450.00)
        );
        return $carrinho;
    }

    public function testMenor()
    {
        $maiorMenorObject = new MaiorEMenor();
        $maiorMenorObject->encontra($this->seeder());

        $this->assertEquals("Geladeira", $maiorMenorObject->getMenor()->getNome());
    }

    public function testMaior()
    {
        $maiorMenorObject = new MaiorEMenor();
        $maiorMenorObject->encontra($this->seeder());

        $this->assertEquals("Geladeira", $maiorMenorObject->getMaior()->getNome());
    }
}

?>