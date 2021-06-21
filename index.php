<?php
session_start();
include 'assets/config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ASTRA MODERNLAND</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="stylesheet" href="css/cssreset-min.css"/>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

		<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/menu.js"></script>
		<script src="https://use.fontawesome.com/f924bc844c.js"></script>
	</head>
	<body>
		<!-- Navbar -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white d-flex">
		<div class="container">
			<a class="navbar-brand justify-content-start me-auto m-4 col-7" href="index.php">
				ASTRA MODERNLAND
			</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		     	</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				   <ul class="navbar-nav p-2">
				      <li class="nav-item m-4">
				        <a class="nav-link" href="?page=index&aksi=property">Property</a>
				      </li>
				      <li class="nav-item m-4">
				        <a class="nav-link" href="?page=index&aksi=agen">Agen</a>
				      </li>
				    </li>
				   </ul>
			</div>
		</div>
	</nav>
        <?php 
            include 'assets/config/db.php';
            error_reporting(0);
            $page = $_GET['page'];
            $aksi = $_GET['aksi'];
                if ($page == "index") {
                  if ($aksi == "property") {
                    include "assets/pages/property.php";
                  }else if ($aksi == "detail-property") {
                    include "assets/pages/detail-property.php";
                  }else if ($aksi == "agen") {
                    include "assets/pages/agen.php";
                  }else if ($aksi == "detail-agen") {
                    include "assets/pages/agen-detail.php";
                  }
                }else{
                    include "assets/pages/home.php";
                }
        ?>
			
	<div class="container-fluid bg-abu">
		<div class="container">
			<div class="row">
				<div class="d-flex justify-content-center">
					<a href="assets/admin/pages/login.php" class="nav-link item">Login /</a>
					<a href="assets/pages/register.php" class="nav-link item"> Regiter</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#" class="nav-link item"><span class="fa fa-instagram p-2 blue" style="font-size: 35px;"></span></a>
					<a href="#" class="nav-link item"><span class="fa fa-twitter-square p-2 blue" style="font-size: 35px;"></span></a>
					<a href="#" class="nav-link item"><span class="fa fa-facebook-square p-2 blue" style="font-size: 35px;"></span></a>
					<a href="#" class="nav-link item"><span class="fa fa-youtube-square p-2 blue" style="font-size: 35px;"></span></a>
				</div>
				<span class="d-flex justify-content-center">&copy 2021 Astra Modernland, All Rights Reserved</span>
			</div>
		</div>
	</div>
			
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Selamat Datang !!</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <form>
					<div class="form-group p-2">
					    <label for="exampleInputEmail1">Email Anda</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group p-2">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  	</div>
				</form>
		      </div>
		      <div class="modal-footer p-2">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Login</button>
		      </div>
		    </div>
		  </div>
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
</html>




