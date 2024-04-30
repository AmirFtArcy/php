<?php
class lingkaran{
    public$r;
    function luas(){
        $L=3.14 *$this->r*$this->r;
        return$L;
        
    }
    function keliling(){
        $K= 2 * 3.14 * $this->r;
        return $K;

    }
}
?>