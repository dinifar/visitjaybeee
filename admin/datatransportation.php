<?php
// Connect to your database
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "visitjaybeee";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$imageUrl = $_POST['imageUrl'];
$name = $_POST['name'];
$caption = $_POST['caption'];
$message = "New place added successfully";

// Insert new trip data into the database
$sql = "INSERT INTO transportation (image, name, caption) VALUES ('$imageUrl', '$name', '$caption')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('$message');
 window.location.href='transportationadmin.php '
 </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>