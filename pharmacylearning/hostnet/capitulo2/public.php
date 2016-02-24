<?php
include_once (__DIR__ . '/Funcionario3.class.php');
include_once (__DIR__ . '/Estagiario.class.php');

//cria objeto Funcionario
$pedrinho = new Funcionario;
$pedrinho->nome = 'Pedrinho';

// cria objeto Estagiário
$mariana = new Estagiario();
$mariana->Nome = 'Mariana';

// imprime propriedade Nome
echo $pedrinho->Nome;
echo "<br> \n";
echo $mariana->Nome;