<?php

    $sname= "localhost";
    $unmae= "root";
    $password = "";

    $db_name = "visitjaybeee";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{

    $transportationId = $_POST['id'];
    $imageUrl = $_POST['imageUrl'];
    $name = $_POST['name'];
    $caption = $_POST['caption'];
    $message = "New transport updated successfully";


    $sql = "UPDATE transportation SET image='$imageUrl', name='$name', caption ='$caption' WHERE id='$transportationId'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('$message');
        window.location.href='transportationadmin.php';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>