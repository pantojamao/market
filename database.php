<?php
  //credenciaales de conexion a BD
//127.0.0.1/market/database.php 
     $username="root";
     $servername="localhost";
     $password="";
     $dbname="market";

   $conn =new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
     die("ERROR : " . connect_error);
      } else{
       die("conexion exitosa a market");
        }
         
?>