<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>hospital management system</title>
</head>
<?php include("nav.php"); ?>
<body class="main-body">
<div class="container">
	<div class="card">
		<img src="images/2.jpg" class="card-img-top">
		<div class="card-body">
	<form class="form-group" action="func.php" method="POST">
		<label>Username:</label><br>
		<input type="text" name="username" class="form-control" placeholder="Enter username"><br>
			<label>Password:</label><br>
		<input type="text" name="password" class="form-control" placeholder="Enter password"><br>
		<input type="submit" name="login_submit" class="btn btn-primary" id="login_submit">
	</form>
</div>
</div>
</div>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>