<?php
class Home extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->template->set_layout('home');
		$this->template->build('index');
	}

	public function lang($lang)
	{
		$this->load->library('user_agent');
		$this->session->set_userdata('lang',$lang);

		redirect($this->agent->referrer());
	}
	
	function inc_hilight(){
		$data['rs'] = new Hilight();
		$data['rs']->order_by('id','desc')->get(10);
		$this->load->view('inc_hilight',$data);
	}

	function inc_sidebar(){
		$data['banners'] = new banner();
		$data['banners']->get();
		$this->load->view('inc_sidebar',$data);
	}
	
	function inc_info(){
		$data['infos'] = new info();
		$data['infos']->get(4);
		$this->load->view('inc_info',$data);
	}
	
	function inc_webboard(){
		$this->load->view('inc_webboard');
	}
}
?>
