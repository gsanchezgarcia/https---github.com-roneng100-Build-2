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
		</div>
    </nav>
	<header>
		<h1 class="page-title">My Profile</h1>
		<h7 class="page-subtitle">"To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment." ― Ralph Waldo Emerson</h5>
	</header>
	<main>
        <center><i class="bi bi-person-circle" style="font-size: 100px;"></i></center>
        <center><h2>Javier Rivera</h2></center>
        <center><h7>Mentor</h7></center>
        <br>
        <div class="card">
              <div class="card-body">
                <p class="card-text">
                    <table>
                        <tr>
                            <td class="right">Email</td>
                            <td>:</td>
                            <td>jrivera@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="right">Position</td>
                            <td>:</td>
                            <td>Web Developer</td>
                        </tr>
                        <tr>
                            <td class="right">Career Goals</td>
                            <td>:</td>
                            <td>Promotion, Becoming Manager</td>
                        </tr>
                        <tr>
                            <td class="right">Alma Mater</td>
                            <td>:</td>
                            <td>Arizona State University</td>
                        </tr>
                        <tr>
                            <td class="right">Interests</td>
                            <td>:</td>
                            <td>Football</td>
                        </tr>
                        <tr>
                            <td class="right">Posts</td>
                            <td>:</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td class="right">Replies</td>
                            <td>:</td>
                            <td>2</td>
                        </tr>
                    </table>
                </p>
              </div>
          </div>
	</main>
</body>
</html>