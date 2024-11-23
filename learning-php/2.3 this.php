<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOC</title>
</head>
<body>
    

<?php 
class Person {//class
    public $name;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;

    }

}

$p1=new Person();//object create
$p1->setName("Rufsan");
echo $p1->getName()."<br>";


$p2=new Person();
$p2->setName("Shanto");
echo $p2->getName();


?>
</body>
</html>