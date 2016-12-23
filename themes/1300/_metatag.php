<?php
// หน้าแรก
if($this->uri->segment(1) == "home" || $this->uri->segment(1) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// เกี่ยวกับเรา
if($_SERVER["REQUEST_URI"] == "/pages/view/1"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// สถิติสายด่วน (สถิติประจำวัน)
if($_SERVER["REQUEST_URI"] == "/charts/view/1"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// สถิติสายด่วน (สถิติประจำสัปดาห์)
if($_SERVER["REQUEST_URI"] == "/charts/view/2"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// สถิติสายด่วน (สถิติประจำเดือน)
if($_SERVER["REQUEST_URI"] == "/charts/view/3"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// สถิติสายด่วน (สถิติประจำปี)
if($_SERVER["REQUEST_URI"] == "/charts/view/4"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// ภาระกิจงาน
if($_SERVER["REQUEST_URI"] == "/pages/view/2"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// ติดต่อเรา
if($_SERVER["REQUEST_URI"] == "/pages/view/3"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// สายด่วนผ่านสื่อ social media หญิงไทยในต่างแดน
if($_SERVER["REQUEST_URI"] == "/pages/view/6"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// หน่วยงานต่างๆที่เกี่ยวข้อง
if($_SERVER["REQUEST_URI"] == "/weblinks"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// VTR สายด่วน 1300
if($_SERVER["REQUEST_URI"] == "/vdos"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}

// ภาพกิจกรรม
if($_SERVER["REQUEST_URI"] == "/galleries"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "";
}
?>



<meta http-equiv="content-language" content="<?=@$content_language?>">
<meta name="robots" content="<?=@$robots?>">
<meta name="description" content="<?=@$description?>"> 
<meta name="keywords" content="<?=@$keywords?>">
<title><?=@$title?></title> 