<?php
  include("EntityManager.php");
  $EM = new EntityManager;
  $Col = $_GET['Col'];
  $Val = $_GET['Val'];
  $cc = $_GET['cc'];
  $EM->Update($Col, $Val, $cc, "personal");
?>