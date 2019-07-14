<?php
class Test 
{
    public $name;

    function __construct(){}

    function sendBasicData(){
        $testApiReturn = array(
            "id" => "1",
            "name" => $this->getName()
        );
        return json_encode($testApiReturn);
    }

    function getName(){
        return $this->$name;
    }
}
?>