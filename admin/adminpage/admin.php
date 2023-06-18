<?php
include_once 'C:\xampp\htdocs\visitjaybeee\include\db_connect.php';
// Retrieve data from the "users" table
$userQuery = "SELECT * FROM users";
$userResult = mysqli_query($GLOBALS['con'], $userQuery);

// Retrieve data from the "category" table
$categoryQuery = "SELECT * FROM category";
$categoryResult = mysqli_query($GLOBALS['con'], $categoryQuery);

if (isset($_GET['delAdmin'])) 
{
    delAdmin();
}
if (isset($_GET['delCategory'])) 
{
    delCategory();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="../images/logo.png" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body class="bg02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="Admin.php">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                            <h1 class="tm-site-title mb-0">Admin</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="../indexadmin.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">ADMIN</a>
                                </li>

                              
                                <div class="nav-item">
                                    <a class="nav-link" href="profile.php">PROFILE</a>
                                    
                                </div>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="../login\Login_v8\login.php">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col mx-auto">
                    <div class="tm-bg-black tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                            <form action="function.php" class="tm-del-form" method="POST">
                                <h2 class="tm-block-title d-inline-block text-center">ADMIN</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="add-admin.php" class="btn btn-small btn-primary">Add New Admin</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                            
                           

                                <thead>
                                    <tr class="tm-bg-gray">
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Admin Name</th>
                                        
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                <?php

                 if (mysqli_num_rows($userResult) > 0) {
                 foreach ($userResult as $row) {
                     $id = $row['id'];
                    $name = $row['name'];
                    $phoneNum = $row['phoneNum'];
                 ?>

            <tr>
                <th scope="row">
                    <!-- <input type="checkbox" aria-label="Checkbox"> -->
                </th>
                <td class="tm-product-name"><?php echo $name; ?></td>
                <td><?php echo $phoneNum; ?></td>
                <form action="function.php" class="tm-del-form" method="POST">
                <input type="hidden" name="delAdmin" value="<?php echo $id; ?>">
                <td><button value="<?php echo $id; ?>" id="submit" type="submit" name="delAdmin" >
                <i class="fas fa-trash-alt tm-trash-icon" ></i></button></form></td>
                
            </tr>

            
            <?php
        }
    } else {
        echo "<tr><td colspan='4'>No data available</td></tr>";
    }
    ?>
       

    
</tbody>
</table>
</div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                            <input type="hidden" name="delAdmin" value="<?php echo $id; ?>">
                <!-- <td><button value="<?php echo $id; ?>" id="submit" type="submit" name="delAdmin" class="btn btn-danger">Delete Selected Items</button> -->
                                
                            </div>
                            

                            
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="tm-bg-black tm-block h-100">
                        <h2 class="tm-block-title d-inline-block">Task Admin</h2>
                        <table class="table table-hover table-striped mt-3">
                            <tbody>
                           
                            <?php
                 if (mysqli_num_rows($categoryResult) > 0) {
                foreach ($categoryResult as $row) {
                  $id = $row['id'];
                  $task = $row['task'];
                    ?>
                <tr>
                <td class="tm-trash-icon-cell"><?php echo $task; ?></td>
                <form action="function.php" class="tm-del-form" method="POST">
                <input type="hidden" name="delCategory" value="<?php echo $id; ?>">
                <td><button value="<?php echo $id; ?>" id="submit" type="submit" name="delCategory">
                <i class="fas fa-trash-alt tm-trash-icon" ></i></button></form>
</td>
               
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='4'>No data available</td></tr>";
    }
    ?>

                        <a href="../adminpage/addcategory.php" class="btn btn-primary tm-table-mt">Add New Category</a>
                    </div>
                </div>
            </div>
            </tbody>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
   
</body>
</html>
