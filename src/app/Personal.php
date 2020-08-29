<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/Personal.css"/>
    <title>Document</title>
</head>
<body>
   <h3>Listado de personal</h3>
   <form action="PersonalAdd.php" method="get">
   <h4>Agregar personal </h4>
       
       <p>Nombre: </p>
       <input type="text" name="nom">
       <br>
       <p>Cedula: </p>
       <input type="number" name="cc">
       <br>
       <p>Cargo: </p>
       <input type="text" name="cargo">
       <br>
       <br>
       <input type="submit" value="Agregar Personal">
   </form>
   <br>
   <h3>Personal Vigente</h3>
   <br>
   <div>
<table cellspacing="20" width="50%">
       <tr>
         <th>Cedula</th>
         <th>Nombre</th>
         <th>Cargo</th>
      </tr>
      <?php
        include("EntityManager.php");
        $Man = new EntityManager();
        $array = $Man->GetRows("personal");
        foreach($array as &$row)
        {
          echo  "<tr>";
          echo  "<td>";
          echo "<input value='$row[0]' type='number' name='Cedula' onchange='functionUpdate(this.value,this.name,this.defaultValue)'>";
          echo  "</td>";
          echo  "<td>";
          echo "<input value='$row[1]' type='text' name='Nombre' onchange='functionUpdate(this.value,this.name,$row[0])'>";
          echo  "</td>";
          echo  "<td>";
          echo "<input value='$row[2]' type='text' name='Cargo' onchange='functionUpdate(this.value,this.name,$row[0])'>";
          echo  "</td>";
          echo  "<td>";
          echo "<input value='Eliminar' type='button' onclick='functionDelete($row[0])'>";
          echo  "</td>";
          echo  "</tr>";
        }
      ?>
     </table>
     <script>
       function functionUpdate(Val,Col,cc){
         var req = new XMLHttpRequest();
         req.open('GET','PersonalUpdate.php?Val='+Val+'&Col='+Col+'&cc='+cc,false);
         req.send();
       }
       function functionDelete(cc){
         var req = new XMLHttpRequest();
         req.open('GET','PersonalDelete.php?cc='+cc,false);
         req.send();
         location.reload();
       }
    </script>
   </div>
</body>
</html>

