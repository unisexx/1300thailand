<?php
class infos extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['rs'] = new info();
		$data['rs']->order_by('id desc')->get_page(10);
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
