<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Userlogincheck extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	function checkexist($username,$password)
	{
		$sql="select * from user where binary username ='$username' AND binary password ='$password'";
		return $this->db->query($sql);
		
	}
}