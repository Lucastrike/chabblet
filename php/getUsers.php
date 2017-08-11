<?php

  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  include ("connection.php");

  $arrayUsers = array();

  $rowQuery = "SELECT * FROM `users`";

  $query = mysqli_query($connection, $rowQuery);
  while ($row = mysqli_fetch_assoc($query)) {
    array_push($arrayUsers, $row);
  }
  echo json_encode($arrayUsers);

?>
