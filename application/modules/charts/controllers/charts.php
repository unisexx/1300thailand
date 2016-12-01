<?php
class charts extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new chart_category();
		$data['rs']->order_by('id','asc')->get();
		$this->template->build('index',$data);
	}
	
	function view($id){
		$data['categories'] = new chart_category();
		$data['categories']->order_by('id','asc')->get();
		
		$data['rs'] = new chart();
		$data['rs']->where('chart_category_id = '.$id)->get_page();
		$this->template->build('view',$data);
	}
	
}
?>