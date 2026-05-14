<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7edbd9491.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
  </head>
  <body>
    <?php
      $activePage = basename($_SERVER['PHP_SELF'], ".php");
      $dashboard = "";
      if ($activePage == 'dashboard') {
        $dashboard = "active";
      }
      $manageMo = "";
      if ($activePage == 'manage-movies') {
        $manageMo = "active";
      }
      $addmovies = "";
      if ($activePage == 'add-movies') {
        $addmovies = "active";
      }
      $manage = "";
      if ($activePage == 'manage') {
        $manage = "active";
      }
      $adduser = "";
      if ($activePage == 'add-user') {
        $adduser = "active";
      }
    ?>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="add-movies.php" class="logo">Flix</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="<?php echo $dashboard; ?>">
            <a href="dashboard.php"><span class="fa fa-home mr-3"></span>Dashboard</a>
          </li>
          <li class="<?php echo $manageMo; ?>">
            <a href="manage-movies.php"><span class="fa fa-home mr-3"></span> Manage Movies</a>
          </li>
          <li class="<?php echo $manage; ?>">
            <a href="manage.php"><span class="fa fa-paper-plane mr-3"></span>Manage Slide</a>
          </li>
          <li class="<?php echo $adduser; ?>">
            <a href="add-user.php"><span class="fa fa-paper-plane mr-3"></span> Add User</a>
          </li>
          <li>
            <a href="logout.php"><span class="fa fa-sticky-note mr-3"></span> Logout</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">