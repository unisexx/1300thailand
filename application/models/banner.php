<?php
class banner extends ORM
{
	public $table = "banners";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
