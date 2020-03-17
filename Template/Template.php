<?php


class Template {
    public $assiv = array(); //proměnná do které se uloží pázné pole
    public $tpl; // prázná proměnná
//Konstruktor nám do proměnné $path uloží cestu souboru html. Pokud soubor html existuje uloží nám cestu souboru do proměnné $tpl.
    function __construct($path = '') {
        if(!empty($path)){//pokud je proměnná prázná provede podmínku existenci souboru.
            if(file_exists($path)){ //pokud soubor html existuje uloží se do proměnné $tpl
                $this->tpl = file_get_contents($path);
            }
 else {
     echo "<b>Template nenalezen</b>"; //pokud ne vypíše chybu
 }
        }
       
    }
 
    function assign($search,$replace){ // proměnná $search je text, který chceme nahradit textem, který je v proměnné $replace
       if(!empty($search)){
           $this->assiv[strtoupper($search)] = $replace; //text psaný velkými písmeny, který chceme nahradit určitým textem, které si sami zvolíme a uloží se do pole $assiv
       } 
        //V poli tedy budeme mít např [TITLI] => 'text, kterým nahrazujeme TITLE'
    }
    
    function show(){ // tato funke nám nahradí uřičitý text v html textem, kterým chceme a vypíš jej.
        if(count($this->assiv) > 0){
            foreach ($this->assiv as $key => $value){
                $this->tpl = str_replace('{'.$key.'}' , $value, $this->tpl);
            }
        }
        echo $this->tpl;
    }
}
