<?php
    class CalculadorDeImposto {
        public function calcula(Orcamento $orcamento, Imposto $estrategiaDeImposto) {
            $resultado = $estrategiaDeImposto->calcula($orcamento);
            return $resultado;
        }
    }