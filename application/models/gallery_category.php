<?php
class gallery_category extends ORM
{
	public $table = "gallery_categories";
	
	public $has_many = array('gallery');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
