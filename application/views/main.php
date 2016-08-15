<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Registration</h1>

	<?php echo $this->session->flashdata('errors') ?>

	<form action="registration/register" method="post"><br>
		Name: <input type="text" name="name" placeholder="name"> <br>
		Alias: <input type="text" name="alias" placeholder="alias"><br>
		Email: <input type="email" name="email" placeholder="email"><br>
		Password: <input type="password" name="password" placeholder="password"><br>
		Confirm PW:<input type="password" name="confirm_password" placeholder="confirm password"><br>
		DOB: <input type="date" name="dob" ><br>
		<input type="submit" value="Register"><br>
	</form>

	<h1>Login</h1>
	<form action="registration/login" method="post"><br>
		<input type="email" name="email" placeholder="email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" value="Login"><br
	</form>


</body>
</html>