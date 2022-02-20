<?php

include 'connection.php';

  
include "include/header.php";


$title=$connect->real_escape_string($_POST['title']);

$allowed_extensions = array('gif','pdf','doc','docx','dot','dotx', 'jpg','xls','xlsb','xlam','ods','jpeg', 'png','bmp', 'GIF', 'JPG', 'PNG', 'JPEG','BMP','jfif');
$stage = $_POST['stage'];

if ($stage == 2) {

    if ($_FILES['pimg']['name'] != "") {

        $filenamenew = $_FILES['pimg']['name'];

        $path_info = pathinfo($filenamenew);

        $is_valid = in_array($path_info['extension'], $allowed_extensions);

        if (empty($is_valid)) {
            $msg = "Incorrent file extension, Please upload a valid image file";
            setcookie("msg", $msg, time() + 3);
            print "<script>";
            print "self.location = 'add_ban.php';";
            print "</script>";
            exit;
        } else {

            $path2 = "upload";
             $s1 = rand();
            $realname = $_FILES['pimg']['name'];
            $realname = $s1 . "_" . $realname;
            $dest = $path2 . "/" . $realname;
            copy($_FILES['pimg']['tmp_name'], $dest);
            $image = trim($realname);
            $path3 = "upload";
            $delpath1 = $path3 . "/" . $_POST['T2'];
            @unlink($delpath1);

        }

    } else {
        
        $image = $connect->real_escape_string(trim($_POST['T2']));

    }


// print_r($stage);
// die();
  $sql="INSERT INTO `banner`(`title`,`image`) VALUES ('$title','$image')";
// print_r($sql);
// die();
       $result3 = db_query($sql);
      
    $msg = "Banner Added Successfully.";
    setcookie("msg", $msg, time() + 3);
    print "<script>";
    print "self.location = 'add_ban.php';";
    print "</script>";
    exit;
}
/* EDIT Template */

if ($_POST['stage'] == 3 && $_POST['rid'] != "") {
    
    if ($_FILES['pimg']['name'] != "") {
        $filenamenew = $_FILES['pimg']['name'];
        $path_info = pathinfo($filenamenew);
        $is_valid = in_array($path_info['extension'], $allowed_extensions);
        if (empty($is_valid)) {
          $msg = "Incorrent file extension, Please upload a valid image file";
            setcookie("msg", $msg, time() + 3);
            print "<script>";
            print "self.location = 'add_ban.php';";
            print "</script>";
            exit;
        } else {

    $path2 = "upload";
            $s1 = rand();
            $realname = $_FILES['pimg']['name'];
            $realname = $s1 . "_" . $realname;
            $dest = $path2 . "/" . $realname;
            copy($_FILES['pimg']['tmp_name'], $dest);
            $image = trim($realname);
            $path3 = "upload";
            $delpath1 = $path3 . "/" . $_POST['T2'];
            @unlink($delpath1);
        }



    } else {



        $image = $connect->real_escape_string(trim($_POST['T2']));

    }
    
    
    $sql="UPDATE ` resourses` SET `title`='$title',`image`='$image' WHERE id=" . $_POST['rid'] . "";
// print_r($sql);
// die();
  $result3 = db_query($sql);
  //include('pagemanipulate.php');
    $msg = "Banner Updated Successfully.";
    setcookie("msg", $msg, time() + 3);
    print "<script>";
    print "self.location = 'mng_ban.php';";
    print "</script>";
    exit;
}

if ($_GET['id'] != "") {
    $sql = "select * from  banner where id=" . $_GET['id'] . "";
    
    $row = mysqli_fetch_assoc(db_query($sql));
  
  $eid = $row['id'];
}

$page="test";

?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>ADD BANNER</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">ADD BANNER</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Add Banner</h4>
						</div>
					</div>
					<div class="row">
						<div class=" col-sm-12">
							<form method="POST" action="" enctype="multipart/form-data">
							<?php if ($eid == "") { ?>
    <input type="hidden" name="stage" value="2">
    <?php } else { ?>
    <input type="hidden" name="stage" value="3">
    <input type="hidden" name="rid" value="<?php print $eid; ?>">
    <?php } ?>
                             <!--message-->
      <?php if ($_COOKIE['msg1']) { ?>
        <div class="clearfix"></div>
        <div class="col-lg-8">        
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" onClick="$('.alert').hide('slow');">&times;</a>
          <?php print str_replace("+", " ", $_COOKIE['msg1']); ?>
        </div>
        </div>
      <?php } ?>
      <!--message--> 
                                    <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" placeholder="Enter  Title" name="title" type="text"  value="<?php print $row['title'];?>" required>
                                </div>
								
								<div class="form-group">
									<label>Banner Image</label>
									<input class="form-control" type="file" name="pimg"  >

								</div>
								<?php if ($row['image'] != "") { ?>

                                <div class="clearfix"></div>

                                <div class="form-row">

                                <img src="upload/<?php print $row['image']; ?>" style="width: 200px;height:200px;" 
								class="img-responsive" />  

                                </div>

                               <?php } ?>

                               <input type="hidden" name="T2" value="<?php print $row['image']; ?>">
								
								
								<div>
									<button type="submit" name="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div>
					
						
					</div>
				</div>
				
				

			</div>
				
	<?php include "include/footer.php";?>