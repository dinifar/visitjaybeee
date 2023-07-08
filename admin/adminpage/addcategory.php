<?php
include_once 'C:/xampp/htdocs/mastervisitjaybee/visitjaybeee/include/db_connect.php';
if (isset($_GET['addcategory'])) {
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Task</title>
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
    <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="Admin.php">
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

       
        <div class="row tm-mt-big" >
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-black tm-block h-100" >
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block text-center">ADD CATEGORY</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-admin-row justify-content-center">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="function.php" class="tm-add-category-form" method="POST">
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label text-center">Admin
                                        Name
                                    </label>
                                    <input id="adname" name="adname" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="explaination" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea name="explaination" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                    <input id="task" name="task" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                              
                               
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" value="Submit" id="submit" name ="addcategory" class="btn btn-primary">Add
                              
                                    </button>

                                    </div>
                                </div>
                            </form>
                        </div>   
        </div>

                </div>
                </div>
                </div>

       
    </div>

    </div>
 
     <script src="js/jquery-3.3.1.min.js"></script>  
     <script src="js/bootstrap.min.js"></script>  


    <script>
  $(document).ready(function() {
    $(".tm-add-category-form").on("submit", function(e) {
      e.preventDefault();
      
      // Perform form submission via AJAX
      $.ajax({
        type: "POST",
        url: "function.php",
        data: $(this).serialize(),
        success: function(response) {
          // Show SweetAlert success message
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "Category added successfully!",
          }).then(function() {
            // Optionally redirect to another page after successful submission
            window.location.href = "addcategory.php";
          });
        },
        error: function() {
          // Show SweetAlert error message
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "An error occurred while adding the category.",
          });
        }
      });
    });
  });
</script>
  
</body>

</html>