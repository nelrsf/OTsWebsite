<?php
   function connection(){
       //$user = "b6_26604057";
       //$pass = "123456";
       //$server = "sql104.byethost6.com";
       $user = "root";
       $pass = "";
       $server = "localhost";
       $db = "b6_26604057_OTs";
       $con = mysqli_connect($server, $user, $pass) or die ("Error al conectar a la base de datos ".mysqli_error());
       mysqli_select_db($con, $db) or die ("Error no se encuentra la base de datos ".mysqli_error());
       return $con;
    }
?>
