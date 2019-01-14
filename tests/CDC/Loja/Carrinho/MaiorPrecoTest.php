<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\Produto;

class MaiorPrecoTest extends TestCase
{
    public function test_Deve_Retornar_Zero_Se_Carrinho_Vazio()
    {
        $carrinho = new CarrinhoDeCompras();
        $valor = $carrinho->maiorValor($carrinho);

        $this->assertEquals(0, $valor, null, 0.0001);
    }

    public function test_Deve_Retornar_Valor_Do_Item_Se_Carrinho_Com_1_Elemento(Type $var = null)
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(
            new Produto("Geladeira", 1, 900.00)
        );

        $valor = $carrinho->maiorValor($carrinho);

        $this->assertEquals(900.00, $valor, null, 0.0001);
    }

    public function test_Deve_Retornar_Maior_Valor_Se_Carrinho_Com_Muitos_Elementos()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(
            new Produto("Geladeira", 1, 900.00)
        );
        $carrinho->adiciona(
            new Produto("Fogão", 1, 1500.00)
        );
        $carrinho->adiciona(
            new Produto("Maquina de Lavar", 1, 750.00)
        );

        $valor = $carrinho->maiorValor($carrinho);

        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }
}

?>