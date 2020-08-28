<?php
 $ruta = dirname(__FILE__,3);
 include("$ruta/conection/conect.php");
 $con = connection();
 $user = $_POST["getUser"];
 $pass = $_POST["getPass"];
 $query = "SELECT * FROM users WHERE Usuario = '$user' AND Contrasena= '$pass'";
 echo "<br>";
 $result = mysqli_query($con, $query);
 $numResults=mysqli_num_rows($result);


 if($numResults==0)
 {
     echo "Usuario o contraseña no validos, pongase en contacto con el administrador del aplicativo";
 }
 else
 {
    echo "<h2> Menu principal </h2>";
    echo "<br>";
    echo "<br>";
    echo "<form action='Personal.php'>";
    echo "<input type='submit' value='Personal'>";
    echo "</form>";
    echo "<br>";
    echo "<br>";
    echo "<input type='submit' action='' value='Componentes'>";
    echo "<br>";
    echo "<br>";
    echo "<input type='submit' action='' value='Material e Insumos>";
    echo "<br>";
    echo "<br>";
 }
?>