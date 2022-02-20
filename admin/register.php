

<?php
error_reporting(0);
include 'connection.php';

    
    $name = $_POST["name"];
    $email= $_POST["email"];
     $phone= $_POST["phone"];


    $password = $_POST["password"];
    $cpassword =$_POST["cpassword"];

    
    // $exists=false;

    // Check whether this username exists
    $sql1 = "SELECT * FROM `admin` WHERE email = '$email'";
    $result1 = db_query($sql1);
    $numExistRows = mysqli_num_rows($result1);
    if($numExistRows > 0){
         // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
         // $exists = false; 
        if(($password == $cpassword)){
            
            $sql = "INSERT INTO `admin` ( `name`,`email`, `password`,`cpassword`) VALUES ('$name','$email', '$password','$cpassword') ";
          // print_r($sql);
          // die();
            $result = db_query($sql);
        
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError ="Password do not match";
        }
    }

    
?>


    
   

    


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Luvcite</title>

	<!-- Site favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
 -->
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="index.php">
					<img src="" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="index.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Sign Up</h2>
						</div>
						 
						<form action="" method="POST">

						
								<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="name" placeholder="Enter Your Name" required>
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" name="email" placeholder="Enter Your Email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div>
							<!-- <div class="input-group custom">
								<input type="number" class="form-control form-control-lg" name="phone" placeholder="Enter Your phone number" required>
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div> -->
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="Enter Your Password" required>
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="cpassword" placeholder="Confirm Password" required>
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div>
							<!-- <div class="input-group custom">
								<select class="form-control form-control-lg" name="status" required>
									<option value="admin">Admin</option>
									<option value="user">User</option>
								</select>
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div> -->
							
							<div class="row pb-30">
								
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										
											
											
										
										<button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
									</div>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>