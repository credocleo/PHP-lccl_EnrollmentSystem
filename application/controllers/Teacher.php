                                   <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Teacher extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		if ($this->session->userdata('user_type')!="Teacher")
		{
			redirect('','refresh');
		}

		$this->load->model('Teacher_model'); // load model
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
	}

	public function teacher_profile()
	{
		
		$data["info"] = $this->Teacher_model->get_profile_teacher($this->session->userdata('user'));
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
		$this->load->view('teacher/teacher_profile', $data);
	}

	function students_grades()
	{
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
		$this->load->view('teacher/input_grades');

	}


	function teacher_pick_subject_schedule()
	{	
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
		$this->load->view('teacher/pick_subject_schedule');
	}
	function class_schedule()
	{	
		$year = $this->input->post('year');
		$sem = $this->input->post('semester');
		$data["schedules"] = $this->Teacher_model->get_semestral_subjects($this->session->userdata('user'),$year,$sem);            
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
		$this->load->view('teacher/class_schedules',$data);

	}
	
	function class_list($id)
	{	//$data["students"] = $this-Teacher_model->get_students_from_class($id);
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
		$this->load->view('teacher/show_students',$data);
	}
	
	function input_grades()
	{	
		$this->load->view('header');
		$this->load->view('teacher/teacherhome');
		$this->load->view('teacher/input_grades');
	}

		function view_teacher()
	{
		$this->load->helper('form');
		$this->
		load->view('header');
	}
}