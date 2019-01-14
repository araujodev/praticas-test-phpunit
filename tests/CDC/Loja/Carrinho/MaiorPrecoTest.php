<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Carrinho\CarrinhoDeCompras,
    CDC\Loja\Test\Builder\CarrinhoDeComprasBuilder;
use CDC\Loja\Produto\Produto;

class MaiorPrecoTest extends TestCase
{

    private $carrinho;

    protected function setUp()
    {
        $this->carrinho = (new CarrinhoDeComprasBuilder())->comItens(200.00, 300.00, 1500.00)->cria();
        parent::setUp();
    }

    public function test_Deve_Retornar_Zero_Se_Carrinho_Vazio()
    {
        $valor = $this->carrinho->maiorValor();
        $this->assertEquals(0, $valor, null, 0.0001);
    }

    public function test_Deve_Retornar_Valor_Do_Item_Se_Carrinho_Com_1_Elemento(Type $var = null)
    {
        $valor = $this->carrinho->maiorValor();
        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }

    public function test_Deve_Retornar_Maior_Valor_Se_Carrinho_Com_Muitos_Elementos()
    {
        $valor = $this->carrinho->maiorValor();

        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }
}

?>