<?php
include("EntityManager.php");
$EM = new EntityManager;
$cc = $_GET['cc'];
$EM->Delete($cc, "personal");
?>