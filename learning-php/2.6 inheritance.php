<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance of oop</title>
</head>
<body>
    
<?php
class Person{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;

    }
    public function display(){
       echo $this->name."<br>".$this->age."<br>";
    }
}
 class P1 extends Person{
    public $address;
    function display2($address){
        echo $address;

    }

}
$shanto= new P1("Shanto",23);
$shanto->display();
$shanto->display2("Ashulia");


?>
</body>
</html>