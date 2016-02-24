<?php
#função de carga automática
function __autoload($classe) {
    #busca classe no diretório de classes...
    include_once (__DIR__ . "/{$classe}.class.php");
}


#instanciando novo produto
$bolo = new Produto(500, 'Bolo de Fubá', 4, 4.12);
echo 'Código: ' . $bolo->Codigo . "<br>\n";
echo 'Nome: ' . $bolo->Descricao . "<br>\n";
