<?php
class infos extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new info();
		if(@$_GET['search']){
			$data['rs']->where('title LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('infos/index',$data);
	}

	function form($id=false){
		$data['rs'] = new info($id);
		$this->template->build('infos/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new info($id);
			
			if($_FILES['image']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/info','image');
				}
				$_POST['image'] = $rs->upload($_FILES['image'],'uploads/info/',275,165);
			}
			
			$_POST['user_id'] = user_login()->id;
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/infos');
	}

	function delete($id){
		if($id){
			$rs = new info($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/infos');
	}

}
?>
