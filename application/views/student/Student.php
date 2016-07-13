<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Student extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_type')!="Student")
		{
			redirect('','refresh');
		}
		 $this->load->model('Studentmodel'); // load model
		
	}
	public function index()
	{
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('student/studentshome', $data);
	}
	public function home()
	{
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('student/studentshome', $data);

	}
	public function student_class_schedule()
	{	
		$this->load->view('header');
		$this->load->view('student/studentshome');
		$this->load->view('student/class_schedule');
	}
	public function studentGrade()
	{	
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('student/student_grades', $data);
	}

	
	public function class_subject_enrolled()
	{	
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('student/subjects_enrolled', $data);
	}

	public function studentsInformation ()
	{
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('student/studentsInformation', $data);
	}

	function registration($id)
	{
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');

		$data["prospectus_info"] = $this->Studentmodel->getProspectusDescription($this->session->userdata('id'));

		//$data['posts']=$this->Studentmodel->getSubjects();
		$this->load->view('student/registration', $data);
	}
	public function studyload ()
	{
		$data["info"] = $this->Studentmodel->get_info($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('student/studyload', $data);
	}
	
}


