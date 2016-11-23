<?php
class webboard_quiz extends ORM
{
	public $table = "webboard_quizs";

	public $has_one = array('webboard_category');
	
	public $has_many = array('webboard_answer');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
