<?php
include_once (__DIR__ . '/Fornecedor1.class.php');
include_once (__DIR__ . '/Produto2.class.php');

// instacia Fornecedor

$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos S.A.';
$fornecedor->Endereco = 'Ria Ipiranga';
$fornecedor->Cidade = 'Poços de Caldas';

// instancia Produto
$produto = new Produto;
$produto->Codigo = 462;
$produto->Descricao = 'Doce de Pêssego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

//imprime atributos

echo 'Código    : ' . $produto->Codigo . "<br>\n";
echo 'Descrição : ' . $produto->Descricao . "<br>\n";
echo 'Código    : ' . $produto->Fornecedor->Codigo . "<br>\n";
echo 'Razão Social: ' . $produto->Fornecedor->RazaoSocial . "<br>\n";
echo 'Endereco  : ' . $produto->Fornecedor->Endereco . "<br>\n";

