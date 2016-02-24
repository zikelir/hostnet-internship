<?php
include_once (__DIR__ . '/Funcionario2.class.php');
include_once (__DIR__ . '/Estagiario.class.php');

$pedrinho = new Estagiario;
$pedrinho->SetSalario(248);
echo 'O Salário de Pedrinho é R$: ' . $pedrinho->GetSalario() . "\n"; 