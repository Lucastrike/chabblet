<?php

  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  include ("connection.php");

  //session_start();

  $user = $_POST["user"];
  $pass = $_POST["pass"];
  $md5pass = md5($pass);

  $rowQuery = "SELECT * FROM unitalk WHERE username='$user' AND password='$md5pass'";
  $query = mysqli_query($connection, $rowQuery);
  if ($fila = mysqli_fetch_array($query)) {
    //$_SESSION['loggedin']=true;
    echo 1;
  } else {
    echo 0;
  }

 ?>
