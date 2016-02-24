<?php
include_once (__DIR__ . '/Fornecedor2.class.php');
include_once (__DIR__ . '/Contato.class.php');

#instancia novo fornecedor

$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A.';

#atribui informações de contato
$fornecedor->SetContato('Mauro', '51 12345678', 'mauro@bomgosto.com.br');

#imprime informações
echo $fornecedor->RazaoSocial . "<br>\n";
echo "Informações de Contato<br>\n";
echo $fornecedor->GetContato();
