<?php
session_start();

include 'connect.php';

$Nis = $_POST['Nis'];
$password = $_POST['password'];

if($Nis == "" || $password == "")
{
  header("location: form-login.php?error=wrong");
}
else
{
  $query = "SELECT * FROM tb_login WHERE Nis = '$Nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

if($num == 1)
{
  header("location: add_data.php");
  $_SESSION['tb_login'] = $Nis;
}
else
{
  header("location: form-login.php?error=wrong");
}
}

 ?>
