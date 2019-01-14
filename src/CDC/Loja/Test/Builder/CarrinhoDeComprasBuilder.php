<?php

namespace CDC\Loja\Test\Builder;
use CDC\Loja\Carrinho\CarrinhoDeCompras,
    CDC\Loja\Produto\Produto;

class CarrinhoDeComprasBuilder
{
    public $carrinho;

    public function __construct(){
        $this->carrinho = new CarrinhoDeCompras();
    }

    public function comItens()
    {
        $valores = func_get_args();
        foreach ($valores as $key => $valor) {
            $this->carrinho->adiciona(
                new Produto("Item ". $key, $valor, 1)
            );
        }
        return $this;
    }

    public function cria()
    {
        return $this->carrinho;
    }
}

?>