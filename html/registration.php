<?php
// Connect to the database
$host = "107.180.1.16:3306";
$username = "sprc2023team2";
$password = "sprc2023team2";
$dbname = "sprc2023team2";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['psw'];

  // Prepare statement
  $stmt = $conn->prepare("INSERT INTO users (username, password, email, role_id) VALUES (?, ?, ?, 1)");
  $stmt->bind_param("sss", $name, $password, $email);
  // Execute statement
  if ($stmt->execute() === TRUE) {
      echo "Account created successfully";
      header("Location: ../html/disscussion_board.php");
      exit();
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}

?>


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
  <body>
    <header>
		  <h1 style="font-size: 500%;">Create An Account</h1>
	  </header>
    <main class="account">
        <form method="POST">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <div id="inputs" style="text-align:center; font-size:large;">
                  <label for="name"><b>Username: </b></label>
                  <input type="text" placeholder="Enter Username" name="name" required>
                  <br>
                  <label for="email"><b>Email: </b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>
                  <br>
                  <label for="psw"><b>Password: </b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                  <br>
                  <p>Role: </p>
                  <input type="radio" id="mentor" name="role" value="mentor" required>
                  <label for="mentor">Mentor</label><br>
                  <input type="radio" id="mentee" name="role" value="mentee" required>
                  <label for="mentee">Mentee</label><br>
                  <br>
                <div id="buttons">
                  <br>
                  <a href="./home.php"><button type="button" class="cancelbtn">Cancel</button></a>
                  <a href="./disscussion_board.php"><button type="submit" class="signupbtn">Sign Up</button></a>
                </div>
                </div>
            </div>
        </form>
    </main>
  </body>
</html>
