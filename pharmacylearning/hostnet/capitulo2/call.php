<?php
#inclui classe Produto 
include_once (__DIR__ . '/Produto4.class.php');

#criando novo produto com o preço R$ 345.67
$produto= new Produto(1,'Pendrive 512 Mb', 1, 345.67);

#executando método Vender, passando 10 unidades.
echo $produto->Vender(10);


