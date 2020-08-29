<?php
   class EntityManager
   {
    var $con; 
    var $ruta;

    function __construct()
    {
        $this->ruta = dirname(__FILE__,3);
        include("$this->ruta/conection/conect.php");
        $this->con = connection();
    }

    public function Add($Values, $Table)
    {
        $query = "INSERT INTO $Table VALUES  $Values";
        $data = mysqli_query($this->con, $query) or die(mysqli_error($this->con));

        mysqli_close($this->con);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function GetRows($Table)
    {
        $query = "SELECT * FROM $Table";
        $data = mysqli_query($this->con, $query) or die(mysqli_error($this->con));
        $array = $data->fetch_all();
        mysqli_close($this->con);
        return $array;
    }

    public function Update($Col, $Val, $id, $Table)
    {
        $query = "UPDATE $Table SET $Col = '$Val' WHERE Cedula=$id";
        $data = mysqli_query($this->con, $query) or die(mysqli_error($this->con));
        mysqli_close($this->con);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function Delete($id, $Table)
    {
        $query = "DELETE FROM $Table WHERE Cedula=$id";
        $data = mysqli_query($this->con, $query) or die(mysqli_error($this->con));
        mysqli_close($this->con);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

   }
   

?>