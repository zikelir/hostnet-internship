<?php
class ConectaBanco {
private $conexao;
    function __construct() {
        $conexao = mysqli_connect('mysql.pvcs.com.br', 'pvcs', 'root', 'pvcs'); 
    }

    public function getConexao() {
       return $this->conexao;
    } 

}
