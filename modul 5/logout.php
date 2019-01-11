<?php

session_start();
if(!(isset($_SESSION['t_user'])))
{
  header("location: ../modul 5/index.php");
}
session_destroy();

header("location: index.php");

 ?>