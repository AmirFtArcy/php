<?php
class segitiga {
    public $alas;
    public $tinggi;
    function luas (){
        $L = 0.5 * $this ->alas * $this-> tinggi;
        return$L;
    }
}


?>