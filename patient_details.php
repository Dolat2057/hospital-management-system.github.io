<!DOCTYPE html>
<?php include("func.php") ?>
<html>
<head>
	<title>patient details</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php include("nav.php");  ?>
<div class="jumbotron" style="background: url(images/1.jpg) no-repeat; background-size:cover; height: 300px;"></div>
<div class="container-fluid">
	<div class="card">
	<div class="card-body" style="background-color:#3498DB; color: #ffffff; ">
<div class="row">
<div class="col-md-2">
		<a href="admin-panel.php" class="btn btn-light"> Go Back</a>
		</div>
    			<div class="col-md-3"><h3>Patient Details</h3></div>
    			<div class="col-md-7">
    				<form class="form-group" action="patient_search.php" method="POST">
    					<div class="row"> 
    					<div class="col-md-10"><input type="text" name="search" class="form-control"></div>
    					<div class="col-md-1"><input type="submit" name="patient_search_submit" class="btn btn-light"
    						value="search" placeholder="Enter Contact"></div>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    		<div class="card-body" style="background-color:#3498DB; color: #ffffff; ">
    		<table class="table table-hover">
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
      <th>Contact</th>
      <th>Doctor Name</th>

    </tr>
  </thead>
  <tbody>
   <?php get_patient_details(); ?>
  </tbody>
</table>
</div>
</div>




<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>