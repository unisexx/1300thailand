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
			
			if($_FILES['attach_1']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/chart','attach_1');
				}
				$_POST['attach_1'] = $rs->upload($_FILES['attach_1'],'uploads/chart/');
			}
			
			if($_FILES['attach_2']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/chart','attach_2');
				}
				$_POST['attach_2'] = $rs->upload($_FILES['attach_2'],'uploads/chart/');
			}
			
			if($_FILES['attach_3']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/chart','attach_3');
				}
				$_POST['attach_3'] = $rs->upload($_FILES['attach_3'],'uploads/chart/');
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
