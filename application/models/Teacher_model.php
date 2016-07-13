<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Teacher_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function get_profile_teacher($user_name)
	{
		$this->db->select('*');
		$this->db->from('user');
	    $this->db->where('username', $user_name);   
	    return $this->db->where('teacher_id_num', $user_name)->get('teachers');    
	}

	function get_semestral_subjects($session,$year, $sem)
	{	//$session = $this->session->userdata('user');
		$query = "select * from offered_subjects where os_instructor_account_id = '$session' AND os_year = '$year' AND  os_semester = '$sem'";
		return $this->db->query($query);
		
	}

	function get_students_from_class($id){
		return $this->db->where('offered_subject_id',$id)->get('subject_students');
	}
	
	
}