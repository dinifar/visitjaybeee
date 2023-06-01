<?php
include_once 'C:/xampp/htdocs/visitjaybeee/include/db_connect.php';

  session_start();

if (isset($_POST['addcategory'])) {
    addcategory();
    header('location: ../adminpage/addcategory.php?msg=addSuccess');
    exit();
} elseif (isset($_POST['addadmin'])) {
    addadmin();
    header('location: ../adminpage/add-admin.php?msg=addSuccess');
    exit();
} elseif (isset($_POST['delAdmin'])) {
    delAdmin();
    echo '<div class="alert alert-hi';
    header('location: admin.php?msg=delSuccess');
    exit();

} elseif (isset($_POST['delCategory'])) {
    delCategory();
    header('location: admin.php?msg=delSuccess');
    exit();
}
    else {
    header('location: ../adminpage/admin.php');
    exit();
}

function addcategory()
{
    if (!$GLOBALS['con']) {
        echo mysqli_error($GLOBALS['con']);
    } else {
        $adname = mysqli_real_escape_string($GLOBALS['con'], $_POST['adname']);
        $explaination = mysqli_real_escape_string($GLOBALS['con'], $_POST['explaination']);
        $task = mysqli_real_escape_string($GLOBALS['con'], $_POST['task']);

        $sql = "INSERT INTO category (adname, explaination, task) VALUES ('$adname', '$explaination', '$task')";
    }

    if (!mysqli_query($GLOBALS['con'], $sql)) {
        header("Location: addcategory.php?addcategory=failed");
        exit();
    } else {
        return 0;
    }
}


function addadmin()
{
    if (!$GLOBALS['con']) {
        echo mysqli_error($GLOBALS['con']);
    } else {
        $name= mysqli_real_escape_string($GLOBALS['con'], $_POST['name']);
        $user_name = mysqli_real_escape_string($GLOBALS['con'], $_POST['user_name']);
        $password = mysqli_real_escape_string($GLOBALS['con'], $_POST['password']);
        $phoneNum = mysqli_real_escape_string($GLOBALS['con'], $_POST['phoneNum']);
       
        
        

        $sql = "INSERT INTO users (name, user_name, password, phoneNum) VALUES ('$name', '$user_name', '$password', '$phoneNum')";
    }

    if (!mysqli_query($GLOBALS['con'], $sql)) {
        header("Location: add-admin.php?add-admin=failed");
        exit();
    } else {
        return 0;
    }
}

function delAdmin(){
    if (!$GLOBALS['con']) {
        echo mysqli_error($GLOBALS['con']);
    } else {
        
     
   
    $id = $_POST ['delAdmin'];
    $sql= "DELETE FROM users WHERE id='$id'";
    $usersResult = mysqli_query($GLOBALS['con'], $sql);
}

if (!mysqli_query($GLOBALS['con'], $sql)) {
    header("Location: admin.php?admin=failed");
    exit();
} else {
    return 0;
}

}

function delCategory(){
    if (!$GLOBALS['con']) {
        echo mysqli_error($GLOBALS['con']);
    } else {
        
     
   
    $id = $_POST ['delCategory'];
    $sql= "DELETE FROM category WHERE id='$id'";
    $categoryResult = mysqli_query($GLOBALS['con'], $sql);
}

if (!mysqli_query($GLOBALS['con'], $sql)) {
    header("Location: admin.php?admin=failed");
    exit();
} else {
    return 0;
}
}

?>
