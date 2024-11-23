<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
    <style>
        #h{
            text-align: center;
            text-decoration: underline;
        }
        b{
            color: blue;
        }
        .red{
            color: red;
            font:50px bold ;
        }
        h1{
            color: green;
            
        }
    </style>
</head>
<body>
   
    <?php 
    echo "Hello";
    echo "<br>";
    $food="Pizza";//variable
    echo " I love ".$food;//concate
    echo "<br>";
    $x=10;
    $y=15;
    echo $x+$y;
    echo "<br>";
    echo "Addition by echo is : ".$x+$y;
    echo "<br>";
    print "Addition by print is : ".$x+$y+5 . '<br>';
    //print thika echo fast. echo te return thake na ,print e return hisabe 1 add hoy 

    $name='Shanto';
    $age=23;
    $wight=60.5;
    $religion_islam=true;
    $fruits= array('Apple','Banana','Orange');
    $null=null;

    var_dump($name);//function ta data_type dekhar jonno use hoy
    var_dump($wight);
    var_dump($age);
    var_dump($religion_islam);
    var_dump($fruits);
    var_dump($null);
    echo "<br>";
    echo '<h1 id="h">Object</h1>';



    class Phone{
        var $model;
        function phoneModel ($number){
            global $model;
            $model=$number;
            echo "This is <b >$model</b> <br>";
        }

    }

    $iPhone=new Phone;
    $iPhone -> phoneModel("iPhone 14");
    $samsung=new Phone;
    $samsung-> phoneModel("S23");

    echo '<h1 id="h">String</h1>';
    echo"I love pizza";
    echo"<br>";
    echo"Length is : ";
    echo strlen( "I love pizza");//strlen() string length er jonno use hoy 
    echo"<br>";
    echo"Number of word is : ";
    echo str_word_count( "I love pizza");
    echo"<br>";
    echo"Reverse string  is : ";
    echo strrev( "I love pizza");
    echo"<br>";
    echo"Position of love is : ";
    echo strpos( "I love pizza","love");
    echo"<br>";
    echo"After replace pizza to burger : ";
    echo str_replace( "pizza","Burger",'I love pizza');




    echo '<h1 id="h">Math Function</h1>';
    echo ("Value of pi = ");
    echo (pi());
    echo"<br>";
    echo ("Minimum is : ");
    echo (min(1,7,6,9,2));
    echo"<br>";
    echo ("Maximum is : ");
    echo (max(1,7,6,9,2));
    echo"<br>";
    echo ("Absulate is : ");
    echo (abs(-10));
    echo"<br>";
    echo ("Square root is : ");
    echo (sqrt(25));
    echo"<br>";
    echo ("Before point in the value of pi is: ");
    echo (round(pi()));
    echo"<br>";
    echo ("Random number is: ");
    echo (rand());
    echo"<br>";
    echo ("Random number in a dice(1 to 5) is: ");
    echo ( rand (1,6) );




    echo '<h1 id="h">Conditional statements</h1>';
    //$date= date('H');//H= America default time zone
    $c=20;
    if($c<10){
        echo("Small" );
    }
    elseif($c==$c){
        echo'Equal';
    }
    else{
        echo "Big";
    }




    echo '<h1 id="h">Switch case</h1>';

    switch("red"){
        case 'red' : 
            echo "<p class='red'>Red color  </p>";
            break;

            case 'green' : 
                echo "<p class='green'>Green color</p>";
                break;
        default:
        echo "Other color";

    }



    echo '<h1 id="h"> While Loop</h1>';
    $s = 0;
    while($s <= 5){
        echo "$s<br>";
        $s++;
    }


    echo '<h1 id="h"> For Loop</h1>';
    $x = 10;
    for($s=0; $s<$x;$s++){
        echo "$s<br>";
        
    }

    echo '<h1 id="h"> Function</h1>';

    function f_name(){
        echo "This is a function .It's name is f_name  <br>";
    }

    f_name();//call the function

   //parameterize a function
   function my_name($name , $age){
    echo "My name is-- $name and age is-- $age <br>";
   }
   echo "...........<b>Parameterize </b> ...........<br>";
   my_name("Rufsan" , 23);
   my_name("Shanto" ,25 );
   

   echo '<h1 id="h">Date and time</h1>';
   echo 'Random date <br>';
   echo "Today is ".date('1')."<br>";
   echo "Actual date----<br>";

   date_default_timezone_set("Asia/Dhaka");//eyta na dele America er time date bydefault dekhabe....
   echo "Today is : ".date('d/m/y')."<br>";
   echo "Today is : ".date('h:i:sa')."<br>";//time
   
   echo '<h1 id="h">Arry</h1>';
   //index arry
   $a=array (1,2,3,4,5,6);
   echo 'Element in 2 no index = '.$a[2] . "<br>";
   echo 'Element in 3 no index = '.$a[3]. "<br>";

   //array er sob element eksathe dekhte foreach() use 
   foreach($a as $value){
    echo $value."<br>";
   }

   //associative arry. name & value 2 tay rakha jabe 
   $name = array("Rufsan" => 20 , "Shanto"=>30);//name call korle value dekha jbe
   echo 'Value of Shanto = '.$name["Shanto"]."<br>";

   foreach($name as $key=>$value){
    echo $key."= ".$value."<br>";
   }


   //multi_dimentional array

   $info = array (
    array("Rufsan",23,"Dhaka"),//0 no array
    array("Jani",24,"Savar"),//1 no array
    array("Shanto",25,"Ashulia"),//2no array

   );
   echo $info[0][0]."</br>";//0 no array er 0 no index e access er jonno
   
   echo $info[2][2]."</br>";//2 no array er 2 no index e access er jonno

   //sob assess er jonno
   for($x=0;$x<3;$x++){
    for($y=0;$y<3;$y++){
        echo $info[$x][$y].",";
    }
   }
   echo'<br>';

   echo"Array's functions: <br>";

   $b=array (10,2,31,4,55,6);
   echo count($b);//number of element in array
   echo'<br>';
?>
</body>
</html>