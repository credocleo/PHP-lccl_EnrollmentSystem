<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Studentmodel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	
	function get_info($user_name)
	{
	    $this->db->select('*');
        $this->db->from('subjects_enrolled');
	    $this->db->where('user_name', $user_name);   
        return $this->db->where('student_id_number', $user_name)->get('students');

	}
function getSubjectListInProspectus($id,$year,$sem){
		$this->db->select('subjects.*');
		$this->db->from('subjects');
		$this->db->join('prospectus_subjects','subjects.subject_id = ps_subject_id','inner');
		$this->db->where('ps_prospectus_id',$id)
			     ->where('ps_year_level',$year)
			     ->where('ps_sem',$sem);
		return $this->db->get();
	}

	function getProspectusDescription($id)
	{
		return $this->db->where('prospectus',$id)->get('prospectus');
	}
	
	function get_semestral_subjects($session,$year, $sem)
	{	//$session = $this->session->userdata('user');
		$query = "select * from offered_subjects where os_instructor_account_id = '$session' AND os_year = '$year' AND  os_semester = '$sem'";
		return $this->db->query($query);
	}

	function offerSubjects()
	{
		$data = array 
		(
			'os_subject_id' => $this->input->post('os_subject_id'),
			'os_year' => $this->input->post('os_year'),
			'os_semester' => $this->input->post('os_semester'),
			'os_room_id' => $this->input->post('os_room_id'),
			'os_schedule_id' => $this->input->post('os_schedule_id'),
			'os_instructor_account_id' => $this->input->post('os_instructor_account_id')
			 );
		$this->db->insert('offered_subjects',$data);
	}


	function getSubjects()
	{
		$query = $this->db->get('subjects');
		return $query;
	}

	function getListofferedSubjects()
	{
		$query = $this->db->get('offered_subjects');
		return $query;
	}

	function studyLoadList()
	{
		$query = $this->db->get('schedule');
		return $query;
	}

	
}