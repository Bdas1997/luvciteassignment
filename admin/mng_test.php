<?php

include 'connection.php';
$delid = $_GET['delid'];



if ($delid != ""){

    $upsql = "delete from testimonial where id={$delid}";            

    db_query($upsql);

    $msg = "Deleted Successfully.";

    setcookie("msg", $msg, time() + 3);

    header("Location: mng_test.php");

}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Luvcite</title>

	<!-- Site favicon -->
	
	<!-- <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/ipl.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/ipl.jpg">
 -->
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		
		</div>
		
			
		
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="#" alt="">
						</span>
						<span class="user-name">Luvcite</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						
						<a class="dropdown-item" href="../index.php"><i class="dw dw-logout"></i>Visit Website</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	

	<div class="left-side-bar">
		<div class="brand-logo">
		
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="dashboard.php" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
						
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Banner</span>
						</a>
						<ul class="submenu">
							<li><a href="add_ban.php">Add Banner</a></li>
							<li><a href="mng_ban.php">Manage Banner</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Resourses</span>
						</a>
						<ul class="submenu">
							<li><a href="add_res.php">Add Resourses</a></li>
							<li><a href="mng_res.php">Manage Resourses</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Blogs</span>
						</a>
						<ul class="submenu">
							<li><a href="add_blog.php">Add Blog</a></li>
							<li><a href="mng_blog.php">Manage Blog</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Testimonial</span>
						</a>
						<ul class="submenu">
							<li><a href="add_test.php">Add Testimonial</a></li>
							<li><a href="mng_test.php">Manage Testimonial</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Query</span>
						</a>
						<ul class="submenu">
							<!-- <li><a href="add_player.php">Create Players</a></li> -->
							<li><a href="enquiry.php">Query</a></li>
						</ul>
					</li>
				
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Testimonial</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage Testimonial</li>
								</ol>
							</nav>
						</div>
					
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">

					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
                                <th>Sl no</th>
									<th>Name</th>
									<th>Feedback</th>
									<th>Image</th>
									
                                    <th>Action</th>
									
								</tr>
							</thead>
							<tbody>
                            <?php

$sqlfetch = "SELECT * FROM testimonial";
$sqlfetch = db_query($sqlfetch);
$i = 1;
while ($row = mysqli_fetch_array($sqlfetch))
{

?>
								<tr>
                                <td><?php echo $i++;?></td>
									<td><?php echo $row["name"];?></td>
									<td><?php echo $row["feedback"];?></td>
									<td><img src="upload/<?php echo $row["image"];?>"  style="width: 70px;height:70px;"></td>
									
									<td><a href="add_test.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit" style="color:#000;"></i></a> |
                                     <a href="?delid=<?php print $row['id']; ?>" onclick ="return confirm('Are you sure to delete ?')"><i class="fas fa-trash-alt" style="color:#000;"></i></a></td>
									
								</tr>
							
								<?php  $i++;}?>
								
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Bikash<a href="#" target="_blank"></a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>
</body>
</html>