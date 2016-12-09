<?php
	
class Vdos extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		$data['rs'] = new vdo();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('vdos/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['rs'] = new Vdo($id);
		$this->template->append_metadata(js_datepicker());
		$this->template->build('vdos/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$rs = new Vdo($id);
			
			// if($_FILES['image']['name'])
			// {
				// if($rs->id){
					// $rs->delete_file($rs->id,'uploads/vdo/','image');
				// }
				// $_POST['image'] = $rs->upload($_FILES['image'],'uploads/vdo/',158,116);
			// }
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('admin/vdos');
	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$rs = new Vdo($id);
			$rs->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	// function approve($id)
	// {
		// if($_POST)
		// {
			// $rs = new Vdo($id);
			// $rs->from_array($_POST);
			// $rs->save();
		// }
	// }
	
	function ajax_show_vid(){
		echo '<iframe width="640" height="390" src="http://www.youtube.com/embed/'.getYoutubeIdFromURL($_GET['url']).'" frameborder="0" allowfullscreen></iframe>';
	}
}

?>