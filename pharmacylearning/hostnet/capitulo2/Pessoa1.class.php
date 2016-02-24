<?php

Class Pessoa {
    public $Codigo;
    public $Nome;        
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;
    
    /* método crescer aumenta a
     * altura em $centimentros
     */
    
    function Crescer($centimetros) {
        if ($centimetros > 0) {
            $this->Altura += $centimetros;
        }
    }
    
    /* método Formar
     * altera a Escolaridade para $titulacao
     */
    
    function Formar($titulacao) {
        $this->Escolaridade = $titulacao;
    }
    
    /* método Envelhecer
     * aumenta a Idade em $anos
     */
    
    function Envelhecer($anos) {
        if ($anos > 0) {
            $this->Idade += $anos;
        }
    }
    
}
