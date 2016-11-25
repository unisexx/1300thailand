<?php
class chart extends ORM
{
	public $table = "charts";
	
	public $has_one = array('chart_category');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
