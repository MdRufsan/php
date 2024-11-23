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
    public $name="Rufsan";
    public $age=21;

    public function my_full_name()//create function
    {
        return "My full name is MD. Rufsan jani Shanto.";
    }
    public function hello($name){
        return "Hello , " .$name."<br>";
    }
}

$p1=new Person();//object create
echo $p1->my_full_name().'<br>';//call function
echo $p1->hello("Shanto");


?>
</body>
</html>