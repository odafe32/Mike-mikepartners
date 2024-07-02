<?php
session_start();
include("config.php"); 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
///code
$error="";
$msg="";
if(isset($_POST['insert']))
{
	$state=$_POST['state'];
	$city=$_POST['city'];
	
	if(!empty($state) && !empty($city)){
		$sql="insert into city (cname,sid) values('$city','$state')";
		$result=mysqli_query($con,$sql);
		if($result)
			{
				$msg="<p class='alert alert-success'>City Inserted Successfully</p>";
						
			}
			else
			{
				$error="<p class='alert alert-warning'>* City Not Inserted</p>";
			}
	}
	else{
		$error = "<p class='alert alert-warning'>* Fill all the Fields</p>";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Data Tables</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->

		
			<!-- Header -->
			<?php include("header.php");?>	
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">State</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">State</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
				<!-- city add section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h1 class="card-title">Add City</h1>
									<?php echo $error;?>
									<?php echo $msg;?>
									<?php 
										if(isset($_GET['msg']))	
										echo $_GET['msg'];	
									?>
								</div>
								<form method="post" id="insert product" enctype="multipart/form-data">
									<div class="card-body">
											<div class="row">
												<div class="col-xl-6">
													<h5 class="card-title">City Details</h5>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">State Name</label>
														<div class="col-lg-9" >	
															<select class="form-control" name="state">
																<option value="">Select</option>
																<?php
																		$query1=mysqli_query($con,"select * from state");
																		while($row1=mysqli_fetch_row($query1))
																			{
																	?>
																<option value="<?php echo $row1['0']; ?>" class="text-captalize"><?php echo $row1['1']; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">City Name</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="city">
														</div>
													</div>
												</div>
											</div>
											<div class="text-left">
												<input type="submit" class="btn btn-primary"  value="Submit" name="insert" style="margin-left:200px;">
											</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!----End City add section  --->
				
				<!----view city  --->
				<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">City List</h4>
									
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>City Name</th>
													<th>State ID</th>
													<th>State Name</th>
													<th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
											<?php
													
												$query=mysqli_query($con,"select city.*,state.sname from city,state where city.sid=state.sid");
												
												while($row=mysqli_fetch_array($query))
													{
											?>
                                                <tr>
                                                    
                                                    <td><?php echo $row['0']; ?></td>
                                                    <td><?php echo $row['1']; ?></td>
													<td><?php echo $row['2']; ?></td>
													<td><?php echo $row['sname']; ?></td>
													<td><a href="cityedit.php?id=<?php echo $row['0']; ?>">Edit</a></td>
                                                    <td><a href="citydelete.php?id=<?php echo $row['0']; ?>">Delete</a></td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				<!-- view City -->
				</div>			
			</div>
			<!-- /Main Wrapper -->
			<!---
			
			
			
			---->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
