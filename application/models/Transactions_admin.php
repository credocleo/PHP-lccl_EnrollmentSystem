<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Transactions_admin extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	function register_new_user()
	{
		$data = array
		(
		'account_type' => $this->input->post('account_type'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'confirm_password' => $this-> input->post('confirm_password')
		);
		$this->db->insert('user', $data);
	}

	function get_info($user_name)
	{
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('username', $user_name);   
        return $this->db->where('username', $user_name);
	}

	function student_add()
	{
		$data = array
		(
		'student_id_number' => $this->input->post('student_id_number'),
		'student_last_name' => $this->input->post('student_last_name'),
		'student_first_name' => $this->input->post('student_first_name'),
		'middle_name' => $this->input->post('middle_name'),
		'co_course_description' => $this->input->post('co_course_description'),
		'date_of_birth' => $this->input->post('date_of_birth'),
		'place_of_birth' => $this->input->post('place_of_birth'),
		'contact_no' => $this->input->post('contact_no'),
		'home_address' => $this->input->post('home_address'),
		'home_tellno' => $this->input->post('home_tellno'),
		'city_address' => $this->input->post('city_address'),
		'cell_no' => $this->input->post('cell_no'),
		'boarding_address' => $this->input->post('boarding_address'),
		'boarding_cel_no' => $this->input->post('boarding_cel_no'),
		'provincial_address' => $this->input->post('provincial_address'),
		'provincial_tel_no' => $this->input->post('provincial_tel_no'),
		'email_address' => $this->input->post('email_address'),
		'nationality' => $this->input->post('nationality'),
		'religion' => $this->input->post('religion'),
		'civil_status' => $this->input->post('civil_status'),
		'gender' => $this->input->post('gender'),
		'name_of_spouse_if_married' => $this->input->post('name_of_spouse_if_married'),
		'name_of_employer_if_working' => $this->input->post('name_of_employer_if_working'),
		'employer_address' => $this->input->post('employer_address'),
		'employer_cel_no' => $this->input->post('employer_cel_no'),
		'fathers_name' => $this->input->post('fathers_name'),
		'fathers_occupation' => $this->input->post('fathers_occupation'),
		'father_educ_attainment' => $this->input->post('father_educ_attainment'),
		'mothers_name' => $this->input->post('mothers_name'),
		'mothers_occupation' => $this->input->post('mothers_occupation'),
		'mother_educ_attainment' => $this->input->post('mother_educ_attainment'),
		'guardians_name' => $this->input->post('guardians_name'),
		'guardian_occupation' => $this->input->post('guardian_occupation'),
		'guardians_address' => $this->input->post('guardians_address'),
		'guardians_cel_no' => $this->input->post('guardians_cel_no'),
		'guardian_educ_attainment' => $this->input->post('guardian_educ_attainment'),
		'guardian_relationship' => $this->input->post('guardian_relationship'),
		'grades_to_be_sent_to' => $this->input->post('grades_to_be_sent_to'),
		'grades_to_sent_address' => $this->input->post('grades_to_sent_address'),
		'grades_cel_no' => $this->input->post('grades_cel_no'),
		'elementary' => $this->input->post('elementary'),
		'elementary_sy' => $this->input->post('elementary_sy'),
		'elementary_address' => $this->input->post('elementary_address'),
		'high_school' => $this->input->post('high_school'),
		'high_school_sy' => $this->input->post('high_school_sy'),
		'high_school_address' => $this->input->post('high_school_address'),
		'college' => $this->input->post('college'),
		'college_sy' => $this->input->post('college_sy'),
		'college_address' => $this->input->post('college_address'),
		'date_registered' => $this->input->post('date_registered')
		);
		$this->db->insert('students', $data);
	}
	function teacher_info()
	{
		$data = array
		(
		'teacher_id_num' => $this->input->post('teacher_id_num'),
		't_last_name' => $this->input->post('t_last_name'),
		't_first_name' => $this->input->post('t_first_name'),
		't_middle_name' => $this->input->post('t_middle_name'),
		't_date_of_birth' => $this->input->post('t_date_of_birth'),
		't_place_of_birth' => $this->input->post('t_place_of_birth'),
		't_home_address' => $this->input->post('t_home_address'),
		't_home_tellno' => $this->input->post('t_home_tellno'),
		't_city_address' => $this->input->post('t_city_address'),
		't_cell_no' => $this->input->post('t_cell_no'),
		't_boarding_address' => $this->input->post('t_boarding_address'),
		't_boarding_cel_no' => $this->input->post('t_boarding_cel_no'),
		't_provincial_address' => $this->input->post('t_provincial_address'),
		't_provincial_tel_no' => $this->input->post('t_provincial_tel_no'),
		't_nationality' => $this->input->post('t_nationality'),
		't_religion' => $this->input->post('t_religion'),
		't_civil_status' => $this->input->post('t_civil_status'),
		't_gender' => $this->input->post('t_gender'),
		't_email_address' => $this->input->post('t_email_address'),
		't_date_registered' => $this->input->post('t_date_registered')
		);
		$this->db->insert('teachers', $data);
	}
	function subjects_new()
	{
		$data = array
		(
		'subject_id' => $this->input->post('subject_id'),
		'subject_description' => $this->input->post('subject_description'),
		'subject_units' => $this->input->post('subject_units'),
		'subject_lec_hours' => $this->input->post('subject_lec_hours'),
		'subject_lab_hours' => $this->input->post('subject_lab_hours'),
		'subject_pre_req' => $this->input->post('subject_pre_req'),
		
		);
		$this->db->insert('subjects', $data);
	}

	function course_offer()
	{
		$data = array
		(
		'co_courses' => $this->input->post('co_courses'),
		'co_course_description' => $this->input->post('co_course_description'),
		);
		$this->db->insert('courses', $data);
	}

	
	function prospectus()
	{
		$data = array
		(
		'per_cmo' => $this->input->post('per_cmo'),
		'major_in' => $this->input->post('major_in'),
		'prospectus_course' => $this->input->post('prospectus_course'),
		'prospectus_sy' => $this->input->post('prospectus_sy'),

		);
		$this->db->insert('prospectus', $data);
	}

	function addSubjects()
	{	//$sql="select * from prospectus_subjects where pros"
		$data = array
			(
			'ps_prospectus_id' => $this->input->post('prospectus_id'),
			 'ps_subject_id' => $this->input->post('subject_id'),
			 'ps_year_level' => $this->input->post('ps_year_level'),
			 'ps_sem' => $this->input->post('ps_sem')
			 );
		
		$this->db->insert('prospectus_subjects',$data);
	}

	function offer_subject()
	{
		$data = array
			(
			'os_subject_id' => $this->input->post('course_id'),
			 'ps_subject_id' => $this->input->post('subject_id'),
			 'ps_year_level' => $this->input->post('ps_year_level'),
			 'os_semester' => $this->input->post('ps_sem')
			 );
		
		$this->db->insert('offered_subjects',$data);
	}

	function time_shedules()
	{
		$data = array
		(
		'ts_days' => $this->input->post('ts_days'),
		'ts_time' => $this->input->post('ts_time'),
		);
		$this->db->insert('time_schedule', $data);
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

	function schedule_this_subject()
	{
		$data = array 
		(
			'sched_subject_id' => $this->input->post('sched_subject_id'),
			's_subject_description' => $this->input->post('s_subject_description'), 
			'sched_year' => $this->input->post('sched_year'),
			'sched_units' => $this->input->post('sched_units'),
			'sched_semester' => $this->input->post('sched_semester'),
			'sched_day' => $this->input->post('sched_day'),
			'sched_time' => $this->input->post('sched_time'),
			'sched_room' => $this->input->post('sched_room')
			 );
		$this->db->insert('schedule',$data);
	}

	function get_search() 
	{
	  $match = $this->input->post('search');
	  $this->db->like('student_id_number',$match);
	  $this->db->or_like('student_last_name',$match);
	  $this->db->or_like('student_first_name',$match);
	  $this->db->or_like('middle_name',$match);
	  $query = $this->db->get('students');
	  return $query;
	}


	function getProspectus() 
	{
	   $query = $this->db->get('prospectus');
	   return $query;
	}

	function getProspectusDescription($id)
	{
		return $this->db->where('prospectus',$id)->get('prospectus');
	}

	function subjects_per_prospectus() 
	{  $this->db->where('ps_prospectus_id');
	   $query = $this->db->get('prospectus_subjects');
	   return $query;
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

	function getOfferedSubjectsInCourse($id)
	{
		return $this->db->where('os_courses_id',$id)->get('offered_subjects');;
	}

	function offeredSubjectsGet($id,$semester,$year)
	{
		$this->db->select('subjects.*');
		$this->db->from('subjects');
		$this->db->join('schedule','subjects.subject_id = sched_subject_id','inner');
		$this->db->where('sched_course_id',$id)
			     ->where('sched_semester',$semester)
			     ->where('sched_year',$year);
		return $this->db->get();
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


	function getSubject_info($id)
	{
		return $this->db->where('subject_id',$id)->get('subjects');
	}
	



	function currentsubject()
	{
		$this->db->select('*');
		$this->db->from('subjects');
		$this->db->join('prospectus_subjects','ps_subject_id = subject_id');
		$query = $this->db->get();
	
	}

	function display_student()
	{
		$query = $this->db->get('students');
		return $query;
	}

	function display_teacher()
	{
		$query = $this->db->get('teachers');
		return $query;
	}

	function display_user()
	{	$query = $this->db->get('user');
		return $query;
	}

	function display_courses()
	{	
		$query = $this->db->get('courses');
		return $query;
	}

	function getCoursesDescription($id)
	{	
		return $this->db->where('co_course_id', $id)->get('courses');
	}

	function getSchedule()
	{
		$query = $this->db->get('schedule');
		return $query;
	}
	function getAvailableSubjectsInProspectus($id){
		$sql_query = "select subjects.* from subjects LEFT JOIN (select subjects.* from subjects INNER JOIN prospectus_subjects on prospectus_subjects.ps_subject_id = subjects.subject_id where ps_prospectus_id =".$id.") t on t.subject_id = subjects.subject_id WHERE t.subject_id is NULL";
		return $this->db->query($sql_query);
	}

	function offerAvailableSubjects($id){
		$sql_query = "select subjects.* from subjects LEFT JOIN (select subjects.* from subjects INNER JOIN offered_subjects on offered_subjects.os_subject_id = subjects.subject_id) t on t.subject_id = subjects.subject_id WHERE t.subject_id is NULL";
		return $this->db->query($sql_query);
	}

	function subjects_to_offer_display($id)
	{
		$query=$this->db->select('*')->from('offered_subjects');
		
		return $query;
	}

	function displayStudentinformation($id)
	{	$query=$this->db->select('*')->from('students')->where('student_id_number',$id)->get();
		return $query;
	}

	function displayTeacherinformation($id)
	{	$query=$this->db->select('*')->from('teachers')->where('teacher_id_num',$id)->get();
		return $query;
	}


}