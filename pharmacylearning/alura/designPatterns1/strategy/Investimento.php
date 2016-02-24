<?php
 interface Investimento {
     public function calcula(Conta $conta);
}

Class Conservador implements Investimento {
    public function calcula(Conta $conta) {
        return $conta->getSaldo() * 0.008;
    }
}

Class Moderado implements Investimento {
   
    private $random;
    
    public function calcula(Conta $conta) {
        $this->random = mt_rand(1,100);
        if($this->random >= 50){
            return $conta->getSaldo();
           }
        else{
         return $conta->getSaldo() * 0.007;   
    }
   }
}

class Arrojado implements Investimento {
    private $random;
   
    public function calcula(Conta $conta) {
        $this->random = mt_rand(1,100);
        if($this->random >= 0 && $this->random <= 4){
            return $conta->getSaldo() * 0.3;
        } else if ($this->random >= 2 && $this->random <= 4) {
            return $conta->getSaldo() * 0.3;
        } else {
            return $conta->getSaldo() * 0.006;
        }
}
}