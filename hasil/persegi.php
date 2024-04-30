<?php
class persegi{
    public $sisi;
    function luas (){
        $L=$this->sisi *$this->sisi;
        return$L;
    }
    function keliling(){
        $K=4 * $this ->sisi;
        return $K;
    }
}
?>