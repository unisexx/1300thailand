<?php
class infos extends Public_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("info");
    	$this->load->library("pagination");
	}
	
	function index()
	{
		// //$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		// $url = parse_url($_SERVER['REQUEST_URI']);
		// parse_str($url['query'], $params);

		// $data['rs'] = new info();
		// $data['rs']->limit(8, $page)->order_by('id desc')->get(); //->get_page();

		$data['rs'] = new info();
		$data['rs']->order_by('id desc')->get_page(8); //->get_page();
		

		// $config = array();
  //       $config["base_url"] = base_url() . "infos";
  //       $config["total_rows"] = $this->info->record_count();
  //       $config["per_page"] = 8;
  //       $config["uri_segment"] = 3;
  //       $config["query_string_segment"] = "/";
  //       $config["cur_page"] = $page;
 
  //       $this->pagination->initialize($config);
		// $data["links"] = $this->pagination->create_links();


		$this->template->build('index',$data);
	}	

	function view($id)
	{
		$data['rs'] = new info($id);
		$data['rs']->counter();
		$this->template->build('view',$data);
	}
}
?>
