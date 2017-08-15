<?php

include ("php/connection.php");
include ("php/check_active_session.php");

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chabblet Admin</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style media="screen">
    .table {
      margin-top: 50px;
    }

    th,
    td {
      text-align: center;
    }
    .modal-content {
      padding: 20px;
    }
    .form-control {
      margin-bottom: 10px;
    }
    .logout {
      margin-right: 0;
      margin-top: 20px;
      margin-bottom: 20px;
    }
  </style>

</head>

<body>

  <div class="container">

    <a href="php/close_session.php" class="btn btn-danger center-block hidden logout col-xs-1 pull-right" type="button" name="button">Logout</a>

    <div class="modal fade bs-example-modal-sm" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="modal">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <input class="form-control" type="text" name="user" placeholder="Username" id="user">
          <input class="form-control" type="password" name="pass" placeholder="Password" id="pass">
          <button class="btn btn-info center-block" type="submit" name="button" id="login">Connect</button>
        </div>
      </div>
    </div>

    <table class="table table-hover hidden logout">
      <tr id="table-head">
        <th>id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>email</th>
        <th>Telephone</th>
      </tr>
    </table>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/admin.js"></script>

</body>

</html>
