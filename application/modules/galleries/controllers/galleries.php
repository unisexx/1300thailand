<?php
class galleries extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new gallery_category();
		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('index',$data);
	}
	
	function view($id){
		$data['rs'] = new gallery_category($id);
		$this->template->build('view',$data);
	}
	
}
?>