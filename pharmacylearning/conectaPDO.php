<?php
try {
        // instancia objeto PDO, conectando no postgresql
        $conn = new PDO('mysql:host=mysql108.prv.f1.k8.com.br;dbname=pvcs','pvcs','root');
} catch (PDOException $e) {
    // caso ocorra uma exceção, exibe na tela
    print "Erro! " . $e->getMessage() . "\n";
    die();
}        
 