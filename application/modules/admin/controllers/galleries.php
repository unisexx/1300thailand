<?php
class galleriess extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new galleries();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('galleriess/index',$data);
	}

	function form($id=false){
		$data['rs'] = new galleries($id);
		$this->template->build('galleriess/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new galleries($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/galleries','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/galleries/',930,630);
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/galleriess');
	}

	function delete($id){
		if($id){
			$rs = new galleries($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/galleriess');
	}

}
?>
