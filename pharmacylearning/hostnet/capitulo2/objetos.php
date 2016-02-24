<?php
# carrega as classes
include_once (__DIR__ . '/Pessoa1.class.php');    
include_once (__DIR__ . '/Conta1.class.php');

# criação do objeto $carlos
$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto {$carlos->Nome} :<br>\n";

echo "{$carlos->nome} é formado em: {$carlos->Escolaridade}<br>\n";
$carlos->Formar('Técnico em Eletricidade');
echo "{$carlos->nome} é formado em: {$carlos->Escolaridade}<br>\n";

echo "{$carlos->nome} possui: {$carlos->Idade} anos<br>\n";
$carlos->Envelhecer(1);
echo "{$carlos->nome} possui: {$carlos->Idade} anos<br>\n";

#criação do objeto $conta_carlos

$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "<br>\n";
echo "Manipilando a conta de: {$conta_carlos->Titular->Nome} <br>\n";
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()}<br>\n";

$conta_carlos->Depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n";

$conta_carlos->Retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n";