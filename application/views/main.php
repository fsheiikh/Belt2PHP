<html>
<head>
	<title></title>
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