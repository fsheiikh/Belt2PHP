<html>
<head>
	<title></title>
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
				  <? endforeach; ?>
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
				  <? endforeach; ?>
					
				  <?php foreach($added as $user): ?>
					  <tr>
					    <td><?php echo $user['alias'] ?></td>
					     <td><a href="/friends/deleteadded/<?php echo $this->session->userdata('id')?>/<?php echo $user['befriend_id']?>">Remove Friend</a></td>
					   	 <td><a href="/friends/viewfriend/<?php echo $user['befriend_id']?>">View Profile</a></td>
					   	 <td>Added You</td>
			
					  </tr>
				 <? endforeach; ?>
		</table>




		



</body>
</html>