<?php
require_once(__DIR__ . '/Imposto.class');
require_once(__DIR__ . '/Orcamento.class.php');
require_once(__DIR__ . '/cliente.class.php');

$reforma = new Orcamento(500);
$novoImposto = new ICCC();

echo $novoImposto->calcula($reforma);