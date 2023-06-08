<?php 
  
  session_start();
  if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

      $uid = $_SESSION['id'];

  }else{
      $uid = '';
  }



if (isset($_SESSION['users'])) {
	//header("Location: ..admin dashboard/index.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="function.php" method="post">
					<span class="login100-form-title">
						Sign In
					</span>
					<form method="post" action="function.php">
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn p-t-30 p-b-23">
						<button class="login100-form-btn" id="loginButton">
							Sign in
						</button>
					</div>
					</form>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
		// Add an event listener to the login button
		document.getElementById('loginButton').addEventListener('click', function(event) {
			event.preventDefault(); // Prevent the form submission
			
			// Get the form data
			var username = document.getElementsByName('username')[0].value;
			var password = document.getElementsByName('password')[0].value;
			
			// Perform AJAX login request
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'function.php', true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
				if (xhr.status === 200) {
					var response = JSON.parse(xhr.responseText);
					if (response.success) {
						// Login successful, redirect to home page
						swal({
                        title: 'Success',
                        text: '',
                        icon: 'success',
                        closeOnClickOutside: false,
                    }).then(function() {
                        window.location.href = '../../adminpage/admin.php';
					
                    });
                } else {
						// Login failed, display error message
						swal('Invalid username or password.', '', 'error');
					}
				} else {
					// Error occurred, display error message
					swal('An error occurred. Please try again later.', '', 'error');
				}
			};
			xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
		});
	</script>

</body>
</html>
