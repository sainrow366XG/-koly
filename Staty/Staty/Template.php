<?php


class Template {
    public $assiv = array();
    public $tpl;
    
    function __construct($path = '') {
        if(!empty($path)){
            if(file_exists($path)){
                $this->tpl = file_get_contents($path);
            }
 else {
     echo "<b>Template nenalezen</b>";
 }
        }
      
       
    }

    function assign($search,$replace){
       if(!empty($search)){
           $this->assiv[strtoupper($search)] = $replace;
       } 
        
    }
    
    function show(){
        if(count($this->assiv) > 0){
            foreach ($this->assiv as $key => $value){
                $this->tpl = str_replace('{'.$key.'}' , $value, $this->tpl);
            }
        }
        echo $this->tpl;
    }
}?>