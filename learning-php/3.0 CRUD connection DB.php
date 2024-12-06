<?php
//database nea kaj korar jonno php te 3 ta podhoti ase 1.PHP Data Object 2.MySQLi Object Oriented 3.MySQLi Procedual

//Ekhane 2 no ta kora ase

// 1st e database er sathe connection set kora lagbe. Er jonno hostname,username,password ey 3ta poperties lage ja (localhost/phpmyadmin )e geye User accounts e gele dekha jbe
 $hostname="localhost";
 $username="root";
 $password ='';
 //new object hisebe ekta method  mysqli()nibo & parameters pass korbo. eke 1ta variable  $conn er moddhe rakhbo
 $conn = new mysqli($hostname,$username,$password);

 //connection cheek
   if($conn->connect_error){
    //echo "Connection faild!";
    echo $conn->connect_error;

   }
   else{
    echo "Connection done!";
   }
   
   //erpor server er sathe connection ta close kore dite hbe
   $conn->close();
?>