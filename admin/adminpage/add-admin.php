<?php
include_once 'C:/xampp/htdocs/mastervisitjaybee/visitjaybeee/include/db_connect.php';
if (isset($_GET['addadmin'])) {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Admin</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
     <link rel="stylesheet" type="text/css" href="sweetalert.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="admin.php">
                        <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                        <h1 class="tm-site-title mb-0">Dashboard</h1>
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
                                <a class="nav-link d-flex" href="login.html">
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
        <div class="row tm-content-row tm-mt-big ">
           
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-black tm-block h-100">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block text-center">Add Account</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-admin-row justify-content-center" >
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="function.php" class="tm-add-form" method="POST">
                                <div class="form-group">
                                    <label for="name">Account Name</label>
                                    <input placeholder="Name" id="name" name="name" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="email">Account Email</label>
                                    <input placeholder="Email address" id="user_name" name="user_name" type="email" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input placeholder="******" id="password" name="password" type="password" class="form-control validate">
                                </div>
                               
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input placeholder="No-Phone" id="phoneNum" name="phoneNum" type="tel" class="form-control validate">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" name ="addadmin" value="Submit" id="submit" class="btn btn-primary">Add
                                       
                                        </button>
                                    </div>
                                 
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showSuccessMessage(message) {
            Swal.fire({
                title: "Success",
                text: message,
                icon: "success",
            }).then(() => {
                // Redirect to desired page
                window.location = "admin.php?admin=success";
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            const form = document.querySelector(".tm-add-form");

            form.addEventListener("submit", (event) => {
                event.preventDefault(); // Prevent the default form submission

                const formData = new FormData(form);

                // Send an AJAX request
                fetch("function.php", {
                    method: "POST",
                    body: formData,
                })
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data); // Log the response
                        if (data.success) {
                            // Admin added successfully, show success message
                            showSuccessMessage("Admin added successfully");
                        } else {
                            // Admin addition failed, show an error message
                            Swal.fire("Error", "Admin addition failed", "error");
                        }
                    })
                    .catch((error) => {
                        console.log(error); // Log the error
                        // Error occurred, show an error message
                        Swal.fire("Error", "An error occurred", "error");
                    });
            });
        });
    </script>


    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->

    
</body>

</html>