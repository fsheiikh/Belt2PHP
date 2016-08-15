<html>
<head>
	<title> Belt </title>
		<meta charset="utf-8">
		<meta name="description" content="The text here describes what the webpage is about."/>	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<h2>Welcome <?php echo $this->session->userdata('alias') ?></h2>
	<a href="/registration/logout">LOGOUT</a> 

		<h3>All Users</h3>
		<table border="1" style="width:30%">
				  <tr>
				    <th>Alias</th>
				    <th>Action</th> 
				  </tr>
				  <?php foreach($allusers as $user): ?>
					  <tr>
					    <td><?php echo $user['alias'] ?></td>
					    <td><a href="/friends/addfriend/<?php echo $this->session->userdata('id')?>/<?php echo $user['id']?>">Add Friend</a></td>
					  </tr>
				  <?php endforeach; ?>
		</table>

		<h3>Your Friends</h3>
		<table border="1" style="width:30%">
				  <tr>
				    <th>Alias</th>
				    <th>Action</th> 
				    <th>View</th> 
				  </tr>
				  <?php foreach($friends as $user): ?>
					  <tr>
					    <td><?php echo $user['alias'] ?></td>
					    <td><a href="/friends/deletefriend/<?php echo $this->session->userdata('id')?>/<?php echo $user['friended_id']?>">Remove Friend</a></td>
					    <td><a href="/friends/viewfriend/<?php echo $user['friended_id']?>">View Profile</a></td>
					  </tr>
				  <?php endforeach; ?>
					
				  <?php foreach($added as $user): ?>
					  <tr>
					    <td><?php echo $user['alias'] ?></td>
					     <td><a href="/friends/deleteadded/<?php echo $this->session->userdata('id')?>/<?php echo $user['befriend_id']?>">Remove Friend</a></td>
					   	 <td><a href="/friends/viewfriend/<?php echo $user['befriend_id']?>">View Profile</a></td>
					   	 <td>Added You</td>
			
					  </tr>
				 <?php endforeach; ?>
		</table>




		



</body>
</html>