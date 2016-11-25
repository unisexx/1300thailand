<?php
class chart_category extends ORM
{
	public $table = "chart_categories";

	public $has_many = array('chart');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
