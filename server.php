<?php
// Connect to the database
$host = "107.180.1.16:3306";
$username = "sprc2023team2";
$password = "sprc2023team2";
$dbname = "sprc2023team2";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$post_title = $_POST['post-title'];
$post_content = $_POST['post-content'];
$post_author = $_POST['post-author'];

// Insert the form data into the table
$sql = "INSERT INTO discussion_questions (post_title, post_content, post_author) VALUES ('$post_title', '$post_content', '$post_author')";

if (mysqli_query($conn, $sql)) {
    echo "New post created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

include('html/disscussion_board.php')
?>