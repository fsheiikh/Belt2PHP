<html>
<head>
	<title></title>
</head>
<body>
<?php foreach($view as $user): ?>
	<h1><?php echo $user['alias']?>'s Profile</h1>
	<h2>Name: <?php echo $user['name']?></h2>
	<h3>Email: <?php echo $user['email']?></h3>
	<h4>Birthday: <?php echo $user['DOB']?></h4>




<?php endforeach; ?>


		



</body>
</html>