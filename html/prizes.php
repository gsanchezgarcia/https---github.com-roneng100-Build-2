<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="../style.css">
	<!-- Javascript -->
	<script type="text/javascript" src="../javascript.js"></script>
    <title>Mentor/Mentee Forum</title>
</head>
<body class="scroll-top" data-bs-spy="scroll" data-bs-target=".navbar">
	<nav class="navbar navbar-expand-md fixed-top navbar-dark" style="background-color: lightblue;">
		<div class="container">
		  <a class="navbar-brand" href="./profile.php"><i class="bi bi-person-circle"></i></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		  	<div class="navbar-nav">
				<a href="./disscussion_board.php" class="nav-link">Disscussion</a>
				<a href="./leaderboard.php" class="nav-link">Leaders</a>
				<a href="./prizes.php" class="nav-link">Prizes</a>
				<a onclick="logOut()" class="nav-link">Log Out</a>
			</div>
		  </div>
		</div>
	  </nav>
	<header>
		<h1 class="page-title">Prizes</h1>
		<h7 class="page-subtitle">“The key is not the will to win… everybody has that. It is the will to prepare to win that is important.” — Bobby Knight</h5>
	</header>
	<main>
		<center>
			<div class="container">
			<section id="prize-section">
				<div class="row">
				  <div class="card prize col-12 col-sm-6 col-lg-3" style="width: 19rem;">
					<img src="../images/1stPlace.png" class="card-img-top">
					  <div class="card-body">
						<p class="card-text">$500 Gift Card</p>
					  </div>
				  </div>
				  <div class="card prize col-12 col-sm-6 col-lg-3" style="width: 19rem;">
					<img src="../images/2ndPlace.png" class="card-img-top">
					  <div class="card-body">
						<p class="card-text">$300 Gift Card</p>
					  </div>
				  </div>
				  <div class="card prize col-12 col-sm-6 col-lg-3" style="width: 19rem;">
					<img src="../images/3rdPlace.png" class="card-img-top">
					  <div class="card-body">
						<p class="card-text">$100 Gift Card</p>
					  </div>
				  </div>
				</div>
			  </section>
			</div>
		</center>
    </main>