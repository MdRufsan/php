<?php
interface Animal{
    public function sound();
    
}
class Cat implements Animal {
    public function sound(){
        echo "Mew!Mew!";
        echo "<br>";
    }
}
class Dog implements Animal {
    public function sound(){
        echo "Ghew!Ghew!";
    }


}
$c1= new Cat();
$c1->sound();

$d1= new Dog();
$d1->sound();
?>