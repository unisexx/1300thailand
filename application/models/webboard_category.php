<?php
class webboard_category extends ORM
{
	public $table = "webboard_categories";

	public $has_many = array('webboard_quiz');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
