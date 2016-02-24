<?php
include_once (__DIR__ . '/Produto2.class.php');
include_once (__DIR__ . '/Fornecedor1.class.php');
include_once (__DIR__ . '/Cesta.class.php');

$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A.';

$cesta = new Cesta;
$cesta->AdicionaItem($fornecedor);
$cesta->CalculaTotal();