<?php

class ISS implements Imposto {
    public function calcula(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
    }
}

class ICMS implements Imposto {
    public function calcula(\Orcamento $orcamento) {
       return $orcamento->getValor() * 0.05 + 50 ;
    } 
}

class ICCC implements Imposto {
    public function calcula(\Orcamento $orcamento) {
        if ($orcamento->getValor() < 1000) {
            return $orcamento->getValor() * 0.05;
        } elseif ($orcamento->getValor() > 1000 && $orcamento < 3000) {
            return $orcamento->getValor() * 0.07;
    } elseif ($orcamento->getValor() > 3000) {
        return $orcamento->getValor() * 0.08 + 30;
        }
    }
}