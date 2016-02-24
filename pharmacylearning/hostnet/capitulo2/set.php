<?php
include_once (__DIR__ . '/Cachorro.class.php');

$toto = new Cachorro('Totó');
$toto->Nascimento = '3 de março'; //atribuição inválida
$toto->Nascimento = '10/04/2005'; //atribuição correta
