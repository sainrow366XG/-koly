<?php

class Kuzel {

    public function objem($r, $v) {
        return round(1 / 3 * Pi() * pow($r, 2) * $v);          
    }

    public function povrch($r , $v) {
        $s = sqrt(pow($r, 2) + pow($v, 2));         
        return round( pi() * $r * ($r + $s));
    }

    public function is3D() {
        
    }

    public function pocetVrcholu() {
        
        
    }

    public function info(){
    }
}
