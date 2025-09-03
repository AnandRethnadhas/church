<?php
class calculator{
    public $value=0;
    function add($num){
        $this->value+=$num;
        return $this;
    }
    function subtract($num){
        $this->value-=$num;
        return $this;
    }
}

$calc=new calculator();
echo $calc->add(10)->value;
echo $calc->subtract(3)->value;
?>