<?php 
abstract class Person{
    public $name;
    public function __construct($name){
        $this->name=$name;

    }
    abstract public function display();
}
class P1 extends Person{
    public function display(){
        return "Hello! I am $this->name";
    }

}
$shanto = new P1("Shanto");
 echo $shanto-> display();





?>