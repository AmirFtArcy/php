<?php
class persegi_panjang{
    public $panjang;
    public $lebar;
    function luas (){
        $L =$this -> panjang * $this->lebar;
        return$L;        
    }
    function keliling(){
        $K=($this->panjang + $this->lebar )* 2;
        return$K;
    }



}
?>