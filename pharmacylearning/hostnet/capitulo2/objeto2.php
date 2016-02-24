<?php

//insere a classe


//cria dois objetos
$produto1 = new Produto;
$produto2 = new Produto;

//atribui valores
$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - The Eagles Hotel California';

// imprime informações de etiqueta
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();
