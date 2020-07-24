<!DOCTYPE html>
 <html>
 <head>

 	<title>admin panel</title>
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
<script src="sweetalert2/dist/sweetalert2.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
<?php include("nav.php") ?>
<div class="jumbotron" style="background: url(images/1.jpg) no-repeat; background-size:cover; height: 300px;
"></div>
<div class="container-fluid">
	<div class="row">
    <div class="col-md-3">
    <div class="list-group">
    	 <a href="" class="list-group-item active" 
    	  style="background-color:#3498DB; color: #ffffff; border-color: #3498DB ">Patients</a>
    	 <a href="patient_details.php" class="list-group-item">Patient Details</a>
         <a href="" class="list-group-item">Add new patient</a>
         <a href="" class="list-group-item">Payment/checkout</a>
    </div>
    <hr>
      <div class="list-group">
    	 <a href="" class="list-group-item active" 
    	  style="background-color:#3498DB; color: #ffffff; border-color: #3498DB ">Staff</a>
    	 <a href="" class="list-group-item">Staff Details</a>
         <a href="" class="list-group-item">Add new Staff</a>
         <a href="" class="list-group-item">Remove staff members</a>
    </div>
    </div>
    <div class="col-md-8">
    	<div class="card">
    		<div class="card-body" style="background-color:#3498DB; color: #ffffff; ">
    			Book An Appointment
    		</div>
    		<div class="card-body">

    			<form class="form-group" action="func.php" method="POST">
    				<label>First Name:</label>
    				<input type="text" name="fname" class="form-control"><br>
    				<label>Last Name:</label>
    				<input type="text" name="lname" class="form-control"><br>
    				<label>Email id:</label>
    				<input type="text" name="email" class="form-control"><br>
    				<label>Contact:</label>
    				<input type="mobile" name="contact" class="form-control"><br>
    				<label>Doctor Appointment:</label>
    				<select class="form-control" name="docapp">
    					<option value="Dr Sharma From 6pm to 8pm" >Dr Sharma From 6pm to 8pm</option>
    					 <option value="Dr Sk From 2pm to 4pm">Dr Sk From 2pm to 4pm</option>

    				</select><br>
    				<input type="submit" name="pat_submit" class="btn btn-primary" value="Enter Appointment">
    			</form>

    		</div>
    	</div>
    </div>
        <div class="col-md-1"></div>
        
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
 Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
    });
</script> 
 </body>
 </html> 