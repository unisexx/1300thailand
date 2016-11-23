<?php
class webboard_answer extends ORM
{
	public $table = "webboard_answers";

	public $has_one = array('webboard_quiz');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
