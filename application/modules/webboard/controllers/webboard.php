<?php
class Webboard extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index($category_id)
	{
		$data['rs'] = new webboard_quiz();
		$data['rs']->where('webboard_category_id = '.$category_id);
		$data['rs']->where('quiz_status = 1');
		$data['rs']->order_by('quiz_sticky','desc')->order_by('id','desc')->get_page();
		$this->template->build('index',$data);
	}

	function view($id){
		$data['quiz'] = new webboard_quiz($id);
		$data['answer'] = new webboard_answer();
		$data['answer']->where('webboard_quiz_id = '.$id.' and answer_status = 1')->order_by('id','asc')->get();
		
		$data['quiz']->counter('quiz_view');
		$this->template->build('view',$data);
	}
	
	function save_quiz(){
		if($_POST){
			$captcha = $this->session->userdata('captcha');
            if(($_POST['captcha'] == $captcha) && !empty($captcha)){
				$_POST['quiz_status'] = 1;
				$_POST['quiz_createdate'] = date("Y-m-d H:i:s");
	
				$rs = new webboard_quiz();
				$rs->from_array($_POST);
				$rs->save();
				set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
			}else{
                set_notify('error','กรอกรหัสไม่ถูกต้อง');
                redirect($_SERVER['HTTP_REFERER']);
            }
		}
		redirect('webboard/index/'.$_POST['webboard_category_id']);
	}

	function save_answer(){
		if($_POST){
			$captcha = $this->session->userdata('captcha');
            if(($_POST['captcha'] == $captcha) && !empty($captcha)){
				$_POST['answer_status'] = 1;
				$_POST['answer_createdate'] = date("Y-m-d H:i:s");
	
				$rs = new webboard_answer();
				$rs->from_array($_POST);
				$rs->save();
				
				set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
			}else{
                set_notify('error','กรอกรหัสไม่ถูกต้อง');
                redirect($_SERVER['HTTP_REFERER']);
            }
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function form(){
		$this->template->build('form');
	}

}
?>
