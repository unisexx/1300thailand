<?php
class Webboard extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new webboard_quiz();
		if(@$_GET['search']){
			$data['rs']->where('quiz_title LIKE "%'.$_GET['search'].'%"');
		}
		
		if(@$_GET['webboard_category_id']){
			$data['rs']->where('webboard_category_id = '.@$_GET['webboard_category_id']);
		}
		
		$data['rs']->order_by('quiz_sticky','desc')->order_by('id','desc')->get_page();
		$this->template->build('webboard/index',$data);
	}
	
	function form($id){
		$data['rs'] = new webboard_quiz($id);
		$data['answer'] = new webboard_answer();
		$data['answer']->where('webboard_quiz_id = '.$id)->order_by('id','asc')->get();
		
		$this->template->build('webboard/form',$data);
	}
	
	function ajax_status(){
		if($_GET['state'] == 'true'){
			$this->db->query("UPDATE webboard_quizs SET quiz_status = 1 WHERE id = ".$_GET['id']);
		}else{
			$this->db->query("UPDATE webboard_quizs SET quiz_status = 0 WHERE id = ".$_GET['id']);
		}
	}
	
	function ajax_status_answer(){
		if($_GET['state'] == 'true'){
			$this->db->query("UPDATE webboard_answers SET answer_status = 1 WHERE id = ".$_GET['id']);
		}else{
			$this->db->query("UPDATE webboard_answers SET answer_status = 0 WHERE id = ".$_GET['id']);
		}
	}
	
	function ajax_sticky(){
		if($_GET){
			$this->db->query("UPDATE webboard_quizs SET quiz_sticky = ".$_GET['quiz_sticky']." WHERE id = ".$_GET['id']);
		}
	}
	
}
?>
