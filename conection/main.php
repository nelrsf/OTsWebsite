<?php
include("conect.php");

$con = connection();
$query = "SELECT * FROM users";
$data = mysqli_query($con, $query);
//while($row = mysqli_fetch_assoc($data)){
//  echo "<br>";
//  echo $row["id"];
//  echo "<br>";  
//  echo $row["Usuario"];
//  echo "<br>";
//  echo $row["Contrasena"];
//  echo "<br>";
//}

?>