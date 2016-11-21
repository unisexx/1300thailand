<?php
class banners extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new banner();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('banners/index',$data);
	}

	function form($id=false){
		$data['rs'] = new banner($id);
		$this->template->build('banners/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new banner($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/banner','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/banner/',237,97);
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/banners');
	}

	function delete($id){
		if($id){
			$rs = new banner($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/banners');
	}

}
?>
