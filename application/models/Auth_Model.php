<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function checkUser($username, $password)
	{
        return $this->db->query("select * from `data_pengguna` where `username` = '$username' and `password` = '$password'");
	}
}
