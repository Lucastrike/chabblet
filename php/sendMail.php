<?php

  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  include ("connection.php");

  $name = $_POST["name"];
  $lastName = $_POST["lastName"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];

  // if(mail("chabblet3@gmail.com", "Interested Chabblet product!", "Name: ".$name." Surname: ".$lastName." Age: ".$age." Telephone: ".$telephone, "From: ".$email)) {
  //   echo 1;
  // } else {
  //   echo 0;
  // }

  if (mysqli_query($connection, "INSERT INTO `users`(`name`, `surname`, `age`, `email`, `telephone`) VALUES ('$name', '$lastName', '$age', '$email', '$telephone')")) {
    echo 1;
  } else {
    echo 0;
  }

?>
