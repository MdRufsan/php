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
}

$p1=new Person();//object create

echo $p1->name;//$obj -> property
echo"<br>";
echo $p1->age;//$obj -> property
?>
</body>
</html>