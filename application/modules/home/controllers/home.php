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
		$data['infos']->order_by('id desc')->get(4);
		$this->load->view('inc_info',$data);
	}
	
	function inc_webboard(){
		$data['webboard_categories'] = new webboard_category();
		$data['webboard_categories']->order_by('id asc')->get();
		$this->load->view('inc_webboard',$data);
	}
	
	function inc_analytic(){
		$this->load->library('Analytics');
		$ga = new analytics();
		
		$now = date("Y-m-d");
		$today = date('Y-m-d', strtotime('-1 days',mysql_to_unix($now)));
		$first_day_of_current_month = (new DateTime('first day of this month'))->format('Y-m-d');
		$first_day_of_current_year = (new DateTime('first day of January ' . date('Y')))->format('Y-m-d');
		
		$data['ga_today'] = $ga->getResult('visits', $today, $now);
		$data['ga_month'] = $ga->getResult('visits', $first_day_of_current_month, $now);
		$data['ga_year'] = $ga->getResult('visits', $first_day_of_current_year, $now);
		$this->load->view('inc_analytic',$data);
	}
	
	function info(){
		echo phpinfo();
	}
}
?>
