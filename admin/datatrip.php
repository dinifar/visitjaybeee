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
$package = $_POST['package'];
$price = $_POST['price'];
$message = "New trip planning added successfully";

// Handle image upload
$targetDir = "../images/"; // Directory where images will be stored
$imageName = $_FILES['image']['name'];
$imageTargetFilePath = $targetDir . $imageName;
$imageFileType = pathinfo($imageTargetFilePath, PATHINFO_EXTENSION);

// Handle planning upload
$planningName = $_FILES['planning']['name'];
$planningTargetFilePath = $targetDir . $planningName;
$planningFileType = pathinfo($planningTargetFilePath, PATHINFO_EXTENSION);

// Check if image file is a valid upload
$imageUploadOk = 1;
if (isset($_POST['submit'])) {
    $imageCheck = getimagesize($_FILES['image']['tmp_name']);
    if ($imageCheck !== false) {
        $imageUploadOk = 1;
    } else {
        echo "Image file is not valid.";
        $imageUploadOk = 0;
    }
}

// Check if planning file is a valid upload
$planningUploadOk = 1;
if (isset($_POST['submit'])) {
    // Add your specific checks for the planning file, if required
}


// Check file sizes (modify as needed)
$maxFileSize = 5000000; // 5MB
if ($_FILES['image']['size'] > $maxFileSize) {
    echo "Sorry, the image file is too large.";
    $imageUploadOk = 0;
}
if ($_FILES['planning']['size'] > $maxFileSize) {
    echo "Sorry, the planning file is too large.";
    $planningUploadOk = 0;
}

// Allow certain file formats
$allowedFormats = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed for the image.";
    $imageUploadOk = 0;
}
// Add additional checks for planning file format, if needed

// If all checks pass, try to upload the files
if ($imageUploadOk == 1 && $planningUploadOk == 1) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $imageTargetFilePath) && move_uploaded_file($_FILES['planning']['tmp_name'], $planningTargetFilePath)) {
        // Insert new trip data into the database
        $sql = "INSERT INTO trip (image, package, price, planning) VALUES ('$imageName', '$package', '$price', '$planningName')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('$message'); window.location.href='tripadmin.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

$conn->close();
?>
