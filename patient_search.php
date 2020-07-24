<html>
<head>
	<title>patient details</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
include("nav.php");
   ?>
<?php 
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$contact = $_POST['search'];
	$query = "SELECT * FROM doctorapp where contact = '$contact'";
	$result = mysqli_query($conn,$query);
	echo "<div class='container-fluid' style='margin-top:50px';>
	<div class='card'>
	<div class='card-body'><a href='patient_details.php' class='btn btn-light'>Go Back</a></div>
	<img src='images/1.jpg' class='card-img-top'>
	<div class='card-body' style='background-color:#3498DB; color: #ffffff;'>
    		<table class='table table-hover'>
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
      <th>Contact</th>
      <th>Doctor Name</th>

    </tr>
  </thead>
  <tbody>";

 

	while($row=mysqli_fetch_array($result)){
     	$fname = $row['fname'];
	$lname = $row['lname'];
	$email = $row['email'];
	$contact = $row['contact'];
	$docapp = $row['docapp'];
   echo "
     <tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
     </tr> ";
  
	}
	echo " </tbody></table></div></div></div>";
	}

 ?>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
