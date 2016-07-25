<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Model
{
	public function userlogin($user, $pass)
	{

		$query = "SELECT * FROM user_tbl WHERE Username = '$user' AND Password = '$pass'";
		$rs    = $this->db->query($query);

		return $rs->result_array();

	}
}
?>