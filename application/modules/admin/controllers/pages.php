<?php
class pages extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new page();
		if(@$_GET['search']){
			$data['rs']->where('title LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('pages/index',$data);
	}

	function form($id=false){
		$data['rs'] = new page($id);
		$this->template->build('pages/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new page($id);
			
			if($_FILES['image']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/page','image');
				}
				$_POST['image'] = $rs->upload($_FILES['image'],'uploads/page/',275,165);
			}
			
			$_POST['user_id'] = user_login()->id;
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/pages');
	}

	function delete($id){
		if($id){
			$rs = new page($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/pages');
	}

}
?>
