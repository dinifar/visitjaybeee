<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "visitjaybeee";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$transportationId = $_POST['id'];
$name = $_POST['name'];
$caption = $_POST['caption'];
$message = "Transportation updated successfully";

// Handle file upload
$targetDir = "../transportationimages/"; // Directory where images will be stored
$fileName = $_FILES['image']['name'];
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

// Check if image file is a valid upload
$uploadOk = 1;
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($targetFilePath)) {
    echo "Sorry, the file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES['image']['size'] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = array("jpg", "jpeg", "png", "gif");
if (!in_array($fileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    $uploadOk = 0;
}

// If all checks pass, try to upload the file
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        // Update transportation data in the database
        $sql = "UPDATE transportation SET image='$fileName', name='$name', caption='$caption' WHERE id='$transportationId'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('$message'); window.location.href='transportationadmin.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
