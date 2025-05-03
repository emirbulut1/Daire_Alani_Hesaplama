<?php 
class daire{
    public $yaricap;
    function __construct($yaricap){
        $this->yaricap=$yaricap;
    
        
    }
    function alan(){
        return $this->yaricap=3.14*$this->yaricap*$this->yaricap;
    }
    function __destruct(){
        echo"dairenin alani:$this->yaricap";
    }
}
$d1=new daire(3);
$d1->alan();
?>