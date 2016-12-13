<?php
class gallery extends ORM
{
	public $table = "galleries";
	
	public $has_one = array('gallery_category');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
