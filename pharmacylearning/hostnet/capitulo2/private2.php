<?php
include_once (__DIR__ . '/Funcionario2.class.php');

//instancia novo Funcionario
$pedro = new Funcionario;

//atribui novo Salário
$pedro->SetSalario(876);

//obtém Salário
echo 'Salário : (R$)' . $pedro->GetSalario();