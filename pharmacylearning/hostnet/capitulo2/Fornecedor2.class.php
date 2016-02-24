<?php
class Fornecedor {
    public $Codigo;
    public $RazaoSocial;
    public $Endereco;
    public $Cidade;
    public $Contato;
    
    # método construtor
    function __construct() {
        // instancia novo Contato 
        $this->Contato = new Contato;
    }
    
    # grava contato
    function SetContato($Nome, $Telefone, $Email) {
        $this->Contato->SetContato($Nome, $Telefone, $Email);
    }
    
    # retorna contato
    
    function GetContato() {
        // delega chamada de método
        return $this->Contato->GetContato();
    }
}
