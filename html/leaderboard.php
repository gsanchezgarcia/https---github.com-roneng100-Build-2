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
		<h1 class="page-title">Leaderboard</h1>
		<h7 class="page-subtitle">
            "A genuine leader is not a searcher for consensus but a molder of consensus." — Martin Luther King Jr.</h5>
	</header>
	<main>
		<center><i class="bi bi-trophy-fill" style="font-size:xxx-large; color: lightblue;"></i></center>
		<table id="leaderboard">
			<tr>
				<td><i class="bi bi-1-circle-fill" style="color: gold;"></i></td>   
				<td><i class="bi bi-person-circle"></i></td>  
				<td>Mentor Name</td>
				<td><i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i></td>
				<td>2980</td>
			</tr>
			<tr>
				<td><i class="bi bi-2-circle-fill" style="color: silver;"></i></td>   
				<td><i class="bi bi-person-circle"></i></td>  
				<td>Mentor Name</td>
				<td><i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star"></i></td>
				<td>2721</td>
			</tr>
			<tr>
				<td><i class="bi bi-3-circle-fill" style="color: brown;"></i></td>   
				<td><i class="bi bi-person-circle"></i></td>  
				<td>Mentor Name</td>
				<td><i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star"></i>  <i class="bi bi-star"></i></td>
				<td>2579</td>
			</tr>
			<tr>
				<td><i class="bi bi-4-circle-fill" style="color: green;"></i></td>   
				<td><i class="bi bi-person-circle"></i></td>
				<td>Mentor Name</td>
				<td><i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star"></i>  <i class="bi bi-star"></i></td>
				<td>1874</td>
			</tr>
			<tr>
				<td><i class="bi bi-5-circle-fill" style="color: blue;"></i></td>   
				<td><i class="bi bi-person-circle"></i></td>
				<td>Mentor Name</td>
				<td><i class="bi bi-star-fill"></i>  <i class="bi bi-star-fill"></i>  <i class="bi bi-star"></i>  <i class="bi bi-star"></i>  <i class="bi bi-star"></i></td>
				<td>1756</td>
			</tr>
	</main>