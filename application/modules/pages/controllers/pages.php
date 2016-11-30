<?php
class pages extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function view($id)
	{
		$data['rs'] = new page($id);
		$this->template->build('view',$data);
	}
}
?>
