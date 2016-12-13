<?php
class galleries extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new gallery_category();
		if(@$_GET['search']){
			$data['rs']->where('title LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('galleries/index',$data);
	}
	
	function form($id=false){
		$data['rs'] = new gallery_category($id);
		$this->template->build('galleries/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			// category save
			$category = new gallery_category($id);
			$category->from_array($_POST);
			$category->save();
			$gallery_category_id = $category->db->insert_id();
			
			// image save
			fix_file($_FILES['image']);
			foreach($_FILES['image'] as $key => $item)
			{
				if($item)
				{
					$gallery = new gallery();
					if($_FILES['image'][$key]['name'])
					{
						
						$gallery->image = $gallery->upload($_FILES['image'][$key],'uploads/gallery');
						$gallery->gallery_category_id = $gallery_category_id;
						$gallery->save();
					}		
				}
			}
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect('admin/galleries');
	}
	
	function save_caption(){
		if($_POST)
		{
			foreach($_POST['id'] as $key => $item)
			{
				$gallery = new gallery($item);
				$gallery->caption = $_POST['caption'][$key];
				$gallery->save();
			}
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>
