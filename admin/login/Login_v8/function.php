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

// Check if the username and password match
$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Login successful, set session variables
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['user_name'];
    $_SESSION['id'] = $row['id'];

    // Prepare the response
    $response = array('success' => true);
    echo json_encode($response);
} else {
    // Login failed, display error message
    $response = array('success' => false);
    echo json_encode($response);
}

// Close the database connection
mysqli_close($conn);
?>
