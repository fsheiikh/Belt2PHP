<?php
class User extends CI_Model {

	public function create($userinfo)
	{
		$query = "INSERT INTO users (name, alias, email, password, DOB, created_at, updated_at)
				  VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($userinfo['name'], $userinfo['alias'], $userinfo['email'], password_hash($userinfo['password'], PASSWORD_DEFAULT), $userinfo['dob']);
		$this->db->query($query, $values);
	}
	public function login($logininfo)
	{
		$query = "SELECT * FROM users WHERE email= ?";
		$values = array($logininfo['email']);
		return $this->db->query($query, $values)->row_array();
	}

		public function getall($id)
	{
		$query = "SELECT users.alias, users.id
				  from users 
				  LEFT JOIN friends ON users.id = friends.friended_id
				  WHERE  users.id !=? AND users.id NOT IN (SELECT users.id
			   	  from users
				  LEFT JOIN friends ON users.id = friends.friended_id
                  WHERE friends.befriend_id = ?)";

		$values = array($id, $id);
		return $this->db->query($query, $values)->result_array();
	}

		public function addfriend($id, $fid)
	{
		$query = "INSERT INTO friends (befriend_id, friended_id)
				  VALUES (?, ?)";
		$values = array($id, $fid);
		$this->db->query($query, $values); 
	}

		public function getfriends($id)
	{
		$query = "SELECT * FROM users 
				  LEFT JOIN friends ON users.id = friends.friended_id
                  WHERE friends.befriend_id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
	}


		public function viewfriend($id)
	{
		$query = "SELECT * FROM users 
                  WHERE users.id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
	}

		public function deletefriend($id, $fid)
	{
		$query = "DELETE FROM friends 
				  WHERE friends.befriend_id = ? AND friends.friended_id = ?
				  LIMIT 1";
		$values = array($id, $fid);
		$this->db->query($query, $values); 
	}


		public function deleteadded($id, $fid)
	{
		$query = "DELETE FROM friends 
				  WHERE friends.friended_id = ? AND friends.befriend_id = ?
				  LIMIT 1";
		$values = array($id, $fid);
		$this->db->query($query, $values); 
	}

		public function addedfriends($id)
	{
		$query = "SELECT * FROM users 
				  LEFT JOIN friends ON users.id = friends.befriend_id
                  WHERE friends.friended_id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
	}

//Below is the not in query i attempted to get my added friends to not show up. I ran out of time, but i added what i had 


// SELECT * FROM users 
// LEFT JOIN friends ON users.id = friends.friended_id
// WHERE  users.id !=? AND users.id NOt in (SELECT users.id
// 			   	  from users
// 				  LEFT JOIN friends ON users.id = friends.friended_id
//                   WHERE friends.befriend_id = ?)


	

	
}

?>