<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['email'])):
    header("location:index.php");
endif; 
  
include "include/header.php";

?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="#" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome To <div class="weight-600 font-30 text-blue">Luvcite</div>
						</h4>
						
					</div>
				</div>
			</div>
			
				
			
	<?php include "include/footer.php";?>