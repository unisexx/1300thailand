<?php
class charts extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new chart();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}
		
		if(@$_GET['chart_category_id']){
			$data['rs']->where('chart_category_id = '.@$_GET['chart_category_id']);
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('charts/index',$data);
	}

	function form($id=false){
		$data['rs'] = new chart($id);
		$this->template->build('charts/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new chart($id);
			
			if($_FILES['attach']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/attach','attach');
				}
				$_POST['attach'] = $rs->upload($_FILES['attach'],'uploads/attach/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/charts');
	}

	function delete($id){
		if($id){
			$rs = new chart($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/charts');
	}

}
?>
