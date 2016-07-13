<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller{

	function __construct()
	{	
		parent::__construct();
		$this->load->view('cache');
		if ($this->session->userdata('user_type')!='Admin')
		{
			redirect('','refresh');
		}
		 $this->load->helper('url');
         $this->load->database();
         $this->load->library('form_validation');
		 $this->form_validation->set_message('alpha','Invalid Name');
		 $this->form_validation->set_message('required','Require');
         $this->load->model('Transactions_admin'); // load model
	}
	function index()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data["info"] = $this->Transactions_admin->get_info($this->session->userdata('user'));
		$this->load->view('admin/user', $data);

	}

	function home()
	{	
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
	}
	function add_user()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->display_user();
		$this->load->view('admin/user_list', $data);
	}

	function create_account()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/add_account');
	}

	function reg_student()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/register_student');
	}
	
	function reg_teacher()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/register_teacher');
	}

	function subject()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/add_subject');
	}

	function offered_subjects_course()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		
		$this->load->view('admin/addsubjecttocourse');
	}

	function view_offersubjects()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$id = $this->input->post('subject_id');

		$data["subject_id"] = $id;
		$this->form_validation->set_rules('subject_id', 'Last Name', 'required');
		$this->form_validation->set_rules('os_subject_id', 'First Name', 'required');
		$this->form_validation->set_rules('os_year', 'Middle Name', 'required');
		$this->form_validation->set_rules('os_semester', 'Course', 'required');
		if($this->form_validation->run() == TRUE)
		{	$this->Transactions_admin->offer_subject();

		}
		

		$data['posts']=$this->Transactions_admin->getSubjects();
		$data['offer_info']=$this->Transactions_admin->getListofferedSubjects();

		$this->load->view('admin/addsubjecttocourse', $data); // load the view file , we are passing $data array to view file	
	}

	function chooseSubjectstoOffer(){
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$id = $this->input->post('subject_id');
		$data["subject_id"] = $id;
	
		$data["subjects"] = $this->Transactions_admin->offerAvailableSubjects($id);

		$data["year"] = $this->input->post('os_year');
		$data["sem"] = $this->input->post('os_semester');
		$this->load->view('admin/subjects/offer_availbleSubjects',$data);
	}


	function listofferedSubjects($id)
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$id = $this->input->post('subject_id');

		$data["subject_id"] = $id;
		$this->form_validation->set_rules('course_id', 'Last Name', 'required');
		$this->form_validation->set_rules('subject_id', 'First Name', 'required');
		$this->form_validation->set_rules('os_semester', 'Middle Name', 'required');
		$this->form_validation->set_rules('os_year', 'Course', 'required');
		if($this->form_validation->run() == TRUE)
		{	
			$this->Transactions_admin->addSubjects_OfferedSubjects();
		}
		
		$data["courses_info"] = $this->Transactions_admin->getCoursesDescription($id);

		$data['posts']=$this->Transactions_admin->getSchedule();
	
		$this->load->view('admin/schedule', $data);
	}

	function addsubjecttosched()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/subjects_schedule');

	}

	function getSubjectsSched($id)
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data["info"]=$this->Transactions_admin->getSchedule($id);
		$this->load->view('admin/schedule',$data);
	}

	function get_schedule()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$id = $this->input->post('course_id');

		$data["course_id"] = $id;
		$data["courses_info"] = $this->Transactions_admin->getCoursesDescription($id);
		$data["subjectsoffered"] = $this->Transactions_admin->subjects_to_offer_display($id);

		$data["sem"] = $this->input->post('sched_semester');
		$data["year"] = $this->input->post('sched_year');
		$this->load->view('admin/subjects_schedule',$data);
	}


	function subjects_offered()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->getSubjects();
		$this->load->view('admin/all_subjects', $data);
	}
	
	function prospectus_display()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/prospectus_view');
	}

	function pro_subject()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/pros_subject');
	}

	function courses()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->display_courses();
		$this->load->view('admin/lcc_course', $data);
	}

	function my_course()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->display_courses();
		$this->load->view('admin/display_courses', $data);

	}

	function new_courses()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/courses_offered');
	}

	function search()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['query']=$this->Transactions_admin->get_search();
		$this->load->view('admin/search', $data);
	}

	function list_of_student()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/student_list');
	}

	function infoStudent($id)
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data["info"]=$this->Transactions_admin->displayStudentinformation($id);
		$this->load->view('admin/info_student',$data);
	}

	function infoTeacher($id)
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data["info"]=$this->Transactions_admin->displayTeacherinformation($id);
		$this->load->view('admin/info_teacher',$data);
	}

	function prospectus_dis()
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->getProspectus(); // calling Post model method getProspectus()
 		$this->load->view('admin/display_prospectus', $data); // load the view file , we are passing $data array to view file
	}
	
	function view_prospectus($id)
	{	$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data["prospectus_id"] = $id;
		$this->form_validation->set_rules('prospectus_id', 'Last Name', 'required');
		$this->form_validation->set_rules('subject_id', 'First Name', 'required');
		$this->form_validation->set_rules('ps_year_level', 'Middle Name', 'required');
		$this->form_validation->set_rules('ps_sem', 'Course', 'required');
		if($this->form_validation->run() == TRUE)
		{	$this->Transactions_admin->addSubjects();

		}
		
		$data["prospectus_info"] = $this->Transactions_admin->getProspectusDescription($id);

		$data['posts']=$this->Transactions_admin->getSubjects();

		$data["firstyear_first_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,1,1);
		$data["firstyear_second_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,1,2);
		$data["secondyear_first_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,2,1);
		$data["secondyear_second_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,2,2);
		$data["thirdyear_first_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,3,1);
		$data["thirdyear_second_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,3,2);
		$data["fourthyear_first_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,4,1);
		$data["fourthyear_second_sem"] = $this->Transactions_admin->getSubjectListInProspectus($id,4,2);

		$this->load->view('admin/add_pros_sub', $data); // load the view file , we are passing $data array to view file	
	}

	function get_available_subjects_in_prospectus(){
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$id = $this->input->post('prospectus_id');
		
		$data["prospectus_id"] = $id;
		$data["prospectus_info"] = $this->Transactions_admin->getProspectusDescription($id);
		$data["subjects"] = $this->Transactions_admin->getAvailableSubjectsInProspectus($id);

		$data["year"] = $this->input->post('ps_year_level');
		$data["sem"] = $this->input->post('ps_sem');
		$this->load->view('admin/prospectus/available_subjects',$data);
	}

	function add_thisSubject()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->model('Transactions_admin');
		$this->Transactions_admin->addSubjects();
		$this->load->view('admin/currentsubject',$data);
	}

	function schedule_subjects()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data["posts"]=$this->Transactions_admin->getSchedule();
		$data["info"]=$this->Transactions_admin->getSchedule();
		$this->load->view('admin/schedule', $data);
	}

	function add_sub_to_semester()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$this->load->view('admin/add');
	}

	function view_student()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->display_student();
		$this->load->view('admin/list_students', $data);
	}

	function view_teacher()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('admin/head_lcc');
		$this->load->view('admin/menu');
		$data['posts']=$this->Transactions_admin->display_teacher();
		$this->load->view('admin/all_teacher', $data);
	}

	function new_account($page = 'add_account')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('account_type', 'Account Type', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]',
				array(
				'required'		=> 'You have not provided %s.',
				'is_unique'		=> 'This %s already exists.'
				)
			);
				
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric',
			array(
				'required'		=> 'You have not provided %s.',
				'is_unique'		=> 'This %s already exists.'
				)
			);
			
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/add_account');
			$this->load->view('footer');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->register_new_user();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/new_account');
		}
	}

	function information_student($page = 'register_student')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('student_id_number', 'Student ID Number', 'required|is_unique[students.student_id_number]',
			array(
			'required'		=> 'You have not provided %s.',
			'is_unique'		=> 'This %s already exists.'
			)
		);
		
		$this->form_validation->set_rules('student_last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('student_first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('co_course_description', 'Course', 'required');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('place_of_birth', 'Place of Birth', 'required');
		$this->form_validation->set_rules('contact_no','Contact No.','required');
		$this->form_validation->set_rules('home_address', 'Home Address', 'required');
		$this->form_validation->set_rules('home_tellno', 'Home Telephone Number', 'required');
		$this->form_validation->set_rules('city_address', 'City Address', 'required');
		$this->form_validation->set_rules('cell_no', 'Cell Number', 'required');
		$this->form_validation->set_rules('boarding_address', 'Boarding Address', 'required');
		$this->form_validation->set_rules('boarding_cel_no', 'Boarding Cellphone Number', 'required');
		$this->form_validation->set_rules('provincial_address', 'Provincial Address', 'required');
		$this->form_validation->set_rules('provincial_tel_no', 'Provincial Telephone Number', 'required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required');
		$this->form_validation->set_rules('nationality', 'Nationality', 'required');
		$this->form_validation->set_rules('religion', 'Religion', 'required');
		$this->form_validation->set_rules('civil_status', 'Civil Status', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('name_of_spouse_if_married', 'Name of Spouse if Married', 'required');
		$this->form_validation->set_rules('name_of_employer_if_working', 'Name of Employer if Working', 'required');
		$this->form_validation->set_rules('employer_address', 'Employer Address', 'required');
		$this->form_validation->set_rules('employer_cel_no', 'Employer Cellphone Number', 'required');
		$this->form_validation->set_rules('fathers_name', 'Fathers Name', 'required');
		$this->form_validation->set_rules('fathers_occupation', 'Fathers Occupation', 'required');
		$this->form_validation->set_rules('father_educ_attainment', 'Father Educational Attainment', 'required');
		$this->form_validation->set_rules('mothers_name', 'Mothers Name', 'required');
		$this->form_validation->set_rules('mothers_occupation', 'Mothers Occupation', 'required');
		$this->form_validation->set_rules('mother_educ_attainment', 'Mother Educational Attainment', 'required');
		$this->form_validation->set_rules('guardians_name', 'Guardians Name', 'required');
		$this->form_validation->set_rules('guardian_occupation', 'Guardian Occupation', 'required');
		$this->form_validation->set_rules('guardians_address', 'Guardians Address', 'required');
		$this->form_validation->set_rules('guardians_cel_no', 'Guardians Cellphone Number', 'required');
		$this->form_validation->set_rules('guardian_educ_attainment', 'Guardian Educational Attainment', 'required');
		$this->form_validation->set_rules('guardian_relationship', 'Guardian Relationship', 'required');
		$this->form_validation->set_rules('grades_to_be_sent_to', 'Grades to be sent to', 'required');
		$this->form_validation->set_rules('grades_to_sent_address', 'Grades to be sent Address', 'required');
		$this->form_validation->set_rules('grades_cel_no', 'Grades to be sent to Cell Number', 'required');
		$this->form_validation->set_rules('elementary', 'Elementary', 'required');
		$this->form_validation->set_rules('elementary_sy', 'Elementary SY', 'required');
		$this->form_validation->set_rules('elementary_address', 'Elementary Address', 'required');
		$this->form_validation->set_rules('high_school', 'High School', 'required');
		$this->form_validation->set_rules('high_school_sy', 'High School SY', 'required');
		$this->form_validation->set_rules('high_school_address', 'High School Address', 'required');
		$this->form_validation->set_rules('college', 'College', 'required');
		$this->form_validation->set_rules('college_sy', 'College SY', 'required');
		$this->form_validation->set_rules('college_address', 'College Address', 'required');
		$this->form_validation->set_rules('date_registered', 'Date Registered', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/register_student');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->student_add();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/information_student');
		}
	}

	function info_teacher($page = 'register_teacher')
		{
			if ( ! file_exists('application/views/admin/'.$page.'.php'))
			{
				show_404();
			}
			$this->form_validation->set_rules('teacher_id_num', 'ID Number', 'required|is_unique[teachers.teacher_id_num]',
				array(
				'required'		=> 'You have not provided %s.',
				'is_unique'		=> 'This %s already exists.'
				)
			);
				
		$this->form_validation->set_rules('t_last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('t_first_name', 'First Name', 'required');
		$this->form_validation->set_rules('t_middle_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('t_date_of_birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('t_place_of_birth', 'Place of Birth', 'required');
		$this->form_validation->set_rules('t_home_address', 'Home Address', 'required');
		$this->form_validation->set_rules('t_home_tellno', 'Home tell number', 'required');
		$this->form_validation->set_rules('t_city_address', 'City Address', 'required');
		$this->form_validation->set_rules('t_cell_no', 'Cell Number', 'required');
		$this->form_validation->set_rules('t_boarding_address', 'Boarding Address', 'required');
		$this->form_validation->set_rules('t_boarding_cel_no', 'Cell Number','required');
		$this->form_validation->set_rules('t_provincial_address', 'Provincial Address', 'required');
		$this->form_validation->set_rules('t_provincial_tel_no', 'Tell Number', 'required');
		$this->form_validation->set_rules('t_nationality', 'Nationality', 'required');
		$this->form_validation->set_rules('t_religion', 'Religion', 'required');
		$this->form_validation->set_rules('t_civil_status', 'Civil Status', 'required');
		$this->form_validation->set_rules('t_email_address', 'Email Address', 'required');
		$this->form_validation->set_rules('t_gender', 'Gender', 'required');
		$this->form_validation->set_rules('t_date_registered', 'Date Registered', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/register_teacher');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->teacher_info();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/info_teacher');
		}
	}

	function add_course($page = 'courses_offered')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		
		$this->form_validation->set_rules('co_courses','Course','required|is_unique[courses.co_courses]',
			array(
				'required'		=> 'You have not provided %s.',
				'is_unique'		=> 'This %s already exists.'
				)
			);
		$this->form_validation->set_rules('co_course_description','Description','required|is_unique[courses.co_course_description]',
			array(
				'required'		=> 'You have not provided %s.',
				'is_unique'		=> 'This %s already exists.'
				)
			);
		
		if ($this->form_validation->run() == FALSE)
		{	
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/courses_offered');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->course_offer();
			
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/add_course');
		
		}
	}

	function new_subject($page = 'add_subject')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('subject_id','Subject ID','required');
		$this->form_validation->set_rules('subject_description','Description','required|is_unique[subjects.subject_description]',
			array(
				'required'		=> 'You have not provided %s.',
				'is_unique'		=> 'This %s already exists.'
				)
			);
		$this->form_validation->set_rules('subject_units','Units','required');
		$this->form_validation->set_rules('subject_lec_hours','Lecture','required');
		$this->form_validation->set_rules('subject_lab_hours','Laboratory','required');
		$this->form_validation->set_rules('subject_pre_req','Pre Requisite','required');
		
		if ($this->form_validation->run() == FALSE)
		{	
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/add_subject');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->subjects_new();
			
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/new_subject');
		
		}
	}
	
	function prospectus_validation($page = 'prospectus_view')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('per_cmo', 'Curriculum Year', 'required');
		
		$this->form_validation->set_rules('major_in', 'Major In', 'required|is_unique[prospectus.major_in]',
			array(
			'required'		=> 'You have not provided %s.',
			'is_unique'		=> 'This %s already exists.'
			)
		);
		$this->form_validation->set_rules('prospectus_course', 'Prospectus Course', 'required');
		$this->form_validation->set_rules('prospectus_sy', 'Prospectus School Year', 'required');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/prospectus_view');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->prospectus();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/prospectus_validation');
		}
	}

	function time_schedule($page = 'time_sched')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('ts_days', 'Days', 'required');
		
		$this->form_validation->set_rules('ts_time', 'Time', 'required|is_unique[time_schedule.ts_time]',
			array(
			'required'		=> 'You have not provided %s.',
			'is_unique'		=> 'This %s already exists.'
			)
		);
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/time_sched');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->time_shedules();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/time_schedule');
		}
		
		
	}



	function addsub_offered($page = 'addsubjecttocourse')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('os_subject_id', 'Subject', 'required');
		$this->form_validation->set_rules('os_year', 'Year', 'required');
		$this->form_validation->set_rules('os_semester', 'Semester', 'required');
		$this->form_validation->set_rules('os_room_id', 'Room', 'required');
		$this->form_validation->set_rules('os_schedule_id', 'Time', 'required');
		$this->form_validation->set_rules('os_instructor_account_id', 'Instructor', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/addsubjecttocourse');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->offerSubjects();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/addsub_offered');
		}
	}

	function newschedule($page = 'subjects_schedule')
	{
		if ( ! file_exists('application/views/admin/'.$page.'.php'))
		{
			show_404();
		}
		$this->form_validation->set_rules('sched_subject_id', 'Subject', 'required');
		$this->form_validation->set_rules('s_subject_description', 'Description', 'required');
		$this->form_validation->set_rules('sched_units', 'Units', 'required');
		$this->form_validation->set_rules('sched_year', 'Year', 'required');
		$this->form_validation->set_rules('sched_semester', 'Semester', 'required');
		$this->form_validation->set_rules('sched_day', 'Day', 'required');
		$this->form_validation->set_rules('sched_time', 'Time', 'required');
		$this->form_validation->set_rules('sched_room', 'Room', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('admin/head_lcc');
			$this->load->view('admin/menu');
			$this->load->view('admin/subjects_schedule');
		}
		
		else
		{
			$data['query'] = $this->Transactions_admin->schedule_this_subject();
			$this->session->set_flashdata('flashSuccess', 'Successfully Saved!');
			redirect('admin/newschedule');
		}
	}
}