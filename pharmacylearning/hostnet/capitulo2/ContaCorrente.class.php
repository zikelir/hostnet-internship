<?php
class ContaCorrente extends Conta {
    public $Limite;
    
    /* método construtor (sobrescrito)
     * agora também inicializa a variável $Limite
     */
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite) {
       //chamada do método construtor da classe-pai.
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }
    /*Método Retirar(sobrescrito)
     * 
     */
    function Retirar ($quantia) {
        // imposto sobre movimentação fincanceira
        $cpmf - 0.05;
        
        if(($this->Saldo + $this->Limite) >= $quantia){
            //Executa método da classe-pai.
            parent::Retirar($quantia);
            
            //Debita o Imposto
            parent::Retirar($quantia * $cpmf);
        }
        else
        {
            echo "Retirada não permitida...\n";
            return false;
        }
        
        //retirada permitida
        return true;
    }
}