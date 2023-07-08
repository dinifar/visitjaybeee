<?php
if (isset($_POST['deletePlaces'])) {
    delPlacesInfo($_POST['deletePlaces']);
}

?>

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
$placeId = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$link = $_POST['link'];
$message = "Place updated successfully";

// Handle file upload
$targetDir = "../images/"; // Directory where images will be stored
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



// Check file size
if ($_FILES['image']['size'] > 5000000) {
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
        // Update place data in the database
        $sql = "UPDATE places SET image='$fileName', name='$name', category='$category', link='$link' WHERE id='$placeId'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('$message'); window.location.href='galleryadmin.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//$conn->close();
?>



<?php 
function delPlacesInfo(){

    $sname= "localhost";
    $unmae= "root";
    $password = "";

    $db_name = "visitjaybeee";

    $message = "Place deleted successfully";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{

    $id = $_POST['idToDelete'];
    $sql = "DELETE FROM places WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            $sql2 = "DELETE FROM places WHERE id='$id'";
            if ($conn->query($sql2) === TRUE) {
                echo "<script>alert('$message');
                window.location.href='galleryadmin.php';
                </script>";
            } else {
                echo "error sql2";
            }
        } else {
            echo "error sql";
        }
    }
}

?>