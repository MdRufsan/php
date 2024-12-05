<?php
class Man{
    public $age;
    public  $name;
    public $address;
    public function __construct($name,$age,$address) {
        $this->name= $name;
        $this->age= $age;
        $this->address= $address;
    }
    //function call sara implement korte chayle destruct() use kora hoy..
    function __destruct(){
        echo "Name is:  ". $this->name."<br>"."Age is : ". $this->age."<br>"."Address is : ".$this->address;

    }
}
$m1 = new Man("Shanto",23,"Ashulia");

?>