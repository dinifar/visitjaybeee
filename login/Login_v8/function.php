<?php
// Start the session
session_start();

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "visitjaybee";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$username = $_POST["username"];
$password = $_POST["password"];

// Secure the input data
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Hash the password
/* $password = hash("md5", $password); */

// Check if the username and password match
$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
	// Login successful, set session variables and redirect to the home page
	if ($row['username'] === $username && $row['password'] === $password) 
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
} else {
	// Login failed, display error message
	echo "Invalid username or password.";
}

// Close the database connection
mysqli_close($conn);
?>