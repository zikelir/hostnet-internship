<?php
//insere a classe
include_once (__DIR__ . '/Produto1.class.php');

// cria um objeto
$produto = new produto;

// atribuir valores
$produto->Codigo = 4001;
$produto->Descricao = 'CD - The Best of Eric Clapton';

var_dump($produto);
