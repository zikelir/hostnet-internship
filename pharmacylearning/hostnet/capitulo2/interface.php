<?php
# interface Aluno
interface IAluno {
    function getNome();
    function setNome($nome);
    function setResponsavel(Pessoa $responsavel);
}

#classe Aluno

class Aluno implements IAluno {
    private $nome;
    #atribui o nome do aluno
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    #retorna o nome do aluno
    function getNome() {
        return $this->nome;
    }
    function setResponsavel(Pessoa $responsavel) {
        $this->responsavel = $responsavel;
    }
}

#instancia novo Aluno
$joaninha->setNome('Joana Maranhao');
echo $joaninha->getNome();
