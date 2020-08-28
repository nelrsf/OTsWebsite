<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <h1>App Ordenes de trabajo</h1>
   <h3>Iniciar Sesión</h3>
   <form action="./src/app/menu.php" method="post">
      <label>
         Nombre de Usuario
      </label>
      <input type="text" name="getUser">
      <br>
      <label>
         Contraseña
      </label>
      <input type="password" name="getPass">
      <br>
      <input type="submit" value="Iniciar">
      <br>
   </form>
   <?php 
      include("conection/main.php");
   ?>

   
</body>
</html>
