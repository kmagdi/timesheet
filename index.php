<?php
 session_start();
 //print_r($_SESSION);
 require_once "config.php";
?>  

<!DOCTYPE html>
<html lang="hu">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jelenlét</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="myStyle.css">
  <script src="menu.js"></script>
  <link rel="stylesheet" href="table.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img class="" src="ora3.jpg" alt="óra"></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Főoldal</a>
        <a href="index.php?p=alkalmazottak.php" class="list-group-item list-group-item-action bg-light">Alkalmazottak</a>
        <a href="index.php?p=szabadsag.php" class="list-group-item list-group-item-action bg-light">Szabadságnapok</a>
        <a href="index.php?p=kivetelek.php" class="list-group-item list-group-item-action bg-light">Kivételes naptári napok</a>
        <a href="index.php?p=kategoria.php" class="list-group-item list-group-item-action bg-light">Kategóriák</a>
        <a href="index.php?p=jelenlet.php" class="list-group-item list-group-item-action bg-light">Jelenlét</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Kapcsoló</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <?=isset($_SESSION['user'])? $_SESSION['user'] : (isset($_SESSION['msg'])? $_SESSION['msg'] :"Nem vagy bejelentkeztel!")?>
                <span class="sr-only">(current)</span>
              </a>
            </li>           
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
     
          <?php
            if(isset($_GET['p']))
              include $_GET['p'];
            else
              include "fooldal.php";
          ?>
      </div>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
