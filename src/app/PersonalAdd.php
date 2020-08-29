<?php
include("EntityManager.php");
$EM = new EntityManager;
$cc = $_GET['cc'];
$nom = $_GET['nom'];
$cargo = $_GET['cargo'];
$Cols = "($cc,'$nom','$cargo')";
$EM->Add($Cols, "personal");

?>