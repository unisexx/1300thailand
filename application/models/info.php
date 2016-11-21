<?php
class info extends ORM
{
	public $table = "infos";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
