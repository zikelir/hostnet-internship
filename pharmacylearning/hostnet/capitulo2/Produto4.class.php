<?php
class Produto {
    public $Codigo;
    public $Descricao;
    public $Quantidade;
    private $Preco;
    const MARGEM = 10;
    
    #Método construtor de um Produto
    
    function __construct($Codigo, $Descricao, $Quantidade, $Preco) {
     $this->Codigo = $Codigo;
     $this->Descricao = $Descricao;
     $this->Quantidade = $Quantidade;
     $this->Preco = $Preco;
    }
    
    #intercepta a chamada à métodos
    function __call($método, $parametros) {
        echo "Você executou o método: {$método}<br>\n";
        foreach ($parametros as $key => $parametro) {
            echo "\tParâmetro $key: $parametro <br>\n";
        }
    }
}
