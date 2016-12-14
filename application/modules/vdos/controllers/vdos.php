<?php
class vdos extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['rs'] = new vdo();
		$data['rs']->order_by('id desc')->get_page(10);
		$this->template->build('index',$data);
	}

	function view($id)
	{
		$data['rs'] = new vdo($id);
		$this->template->build('view',$data);
	}
}
?>
