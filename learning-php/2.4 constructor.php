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
    public $age;

     public function __construct($name,$age) {//constructor always public hbe. eta kiso return kre na
        echo 'Name='.$name.' <br> '.'Age='.$age.'<br>';
        echo"------------------------<br>";
    }

}

$p1=new Person("Rufsan",23);//object create
$p2=new Person("Shanto",25);


?>
</body>
</html>