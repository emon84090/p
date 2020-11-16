
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="regi.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script  src="bootstrap/jquery-slim.min.js"></script>

<script src="bootstrap/popper.min.js"></script>
<script  src="bootstrap/bootstrap.min.js"></script>
</head>
<body>

<div class="myform mt-5">

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-8">
				<div class="regiform">
					<form method="POST">
						<div class="form-group">
							<input type="text" name="username" placeholder="enter your name" required="" class="form-control"/>
							
						</div>

						<div class="form-group">
							<input type="email" name="email" placeholder="enter your email" required="" class="form-control"/>
							
						</div>

						<div class="form-group">
							<input type="tel" name="mobile" placeholder="enter your number" required="" class="form-control"/>
							
						</div>

						

						<div class="form-group">
							<input type="date" name="mydate" required="" class="form-control"/>
							
						</div>

						<div class="form-group">
							<select name="country" class="form-control">
								<option>select your country</option>
								<option>bangladesh</option>
								<option>india</option>
								<option>pakistan</option>
							</select>
							
						</div>

						<input type="submit"  name="submit" required="" value="register"/>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		

	</div>


</div>

<?php

include 'conect.php';

if (isset($_POST['submit'])) {

	$name=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$date=$_POST['mydate'];
	$country=$_POST['country'];


	$insertquery="insert into userregi(name,email,mobile,date,country) values ('$name','$email','$mobile','$date','$country')";
	
	$res=mysqli_query($con,$insertquery);






}



?>









</body>
</html>