

<?php
include 'connection.php';
error_reporting(0);

    if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    
    $sql = "Select * from admin where email='$email' AND password='$password'";

    $result = db_query($sql);

    if ($result->num_rows > 0) 
    {
        while($row = mysqli_fetch_assoc($result))
        { 
            //echo "Login Successfully";
            
            session_start();
            $_SESSION['email']=$row["email"];
            
            header("location:dashboard.php");
            }
           
        }
        else{
          $msg = "Incorrect Password";
            setcookie("msg", $msg, time() + 3);
            print "<script>";
            print "self.location = 'index.php';";
            print "</script>";
            exit;
        }
        
    
   
}
    
?>


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Luvcite</title>

	

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
				<a href="login.html">
					<img src="#" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="register.php">Register</a></li>
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
							<h2 class="text-center text-primary">Login </h2>
						</div>
						 <!--message-->
			      <?php if ($_COOKIE['msg']) { ?>
			        <div class="clearfix"></div>
			        <div class="col-lg-8">        
			        <div class="alert alert-success">
			          <a href="#" class="close" data-dismiss="alert" onClick="$('.alert').hide('slow');">&times;</a>
			          <?php print str_replace("+", " ", $_COOKIE['msg']); ?>
			        </div>
			        </div>
			      <?php } ?>
			      <!--message-->
						<form action="" method="POST">

							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" name="email" placeholder="User Email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<!-- 
								<div class="col-12">
									<div class="forgot-password"><a href="forgot-password.php">Forgot Password</a></div>
								</div> -->
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										
											
											<!-- <input class="btn btn-primary btn-lg btn-block" type="submit" value="submit"> -->
										
										<button type="submit" name="submit" class="btn btn-primary btn-block">Sign me in</button>
									</div>
									<!-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div> -->
									<!-- <div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
									</div> -->
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