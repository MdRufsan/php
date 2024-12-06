<?php
//database nea kaj korar jonno php te 3 ta podhoti ase 1.PHP Data Object 2.MySQLi Object Oriented 3.MySQLi Procedual

//Ekhane 2 no ta kora ase

// 1st e database er sathe connection set kora lagbe. Er jonno hostname,username,password ey 3ta poperties lage ja (localhost/phpmyadmin )e geye User accounts e gele dekha jbe
 $hostname="localhost";
 $username="root";
 $password ='';
 $dbname="firstdb";
 //new object hisebe ekta method  mysqli()nibo & parameters pass korbo. eke 1ta variable  $conn er moddhe rakhbo
 $conn = new mysqli($hostname,$username,$password,$dbname);

 //connection cheek
   if($conn->connect_error){
    //echo "Connection faild!";
    echo $conn->connect_error;

   }
   else{
    echo "Connection done!";
   }


  //table create
  $sql="CREATE TABLE student 
  (
  id INT(6) AUTO_INCREMENT PRIMARYKEY,
  firstname VARCHAR(20),
  lastname VARCHAR(20),
  email VARCHAR(20)
  )";
 if($conn->query($sql)==TRUE){
    echo "Table Created";
 }else{
    echo $conn->error;
 }


   
   //erpor server er sathe connection ta close kore dite hbe
   $conn->close();
?>  