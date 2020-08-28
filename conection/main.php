<?php
echo "tratando de conectarme \n";
include("conect.php");

$con = connection();
$query = "SELECT * FROM users";
$data = mysql_query($query);
while($row = mysql_fetch_assoc($data)){
  echo "<br>";
  echo $row["id"];
  echo "<br>";  
  echo $row["Usuario"];
  echo "<br>";
  echo $row["Contrasena"];
  echo "<br>";
}

?>