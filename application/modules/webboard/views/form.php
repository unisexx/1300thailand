<div id="webboard">
  <div class="title-news">บอร์ดกระทู้ ถาม - ตอบ (สร้างคำถามใหม่)</div>
	<div class="clearfix">&nbsp;</div>

  <form id="questionForm" method="post" action="webboard/save_quiz">
	  	<div class="form-group">
		    <label for="title">หมวด</label>
		    <?=form_dropdown('webboard_category_id', get_option('id','name','webboard_categories order by id asc'), @$_GET['webboard_category_id'],'class="form-control" style="width:auto;"','--- เลือกหมวด ---');?>
		  </div>
	  <div class="form-group">
	    <label for="title">หัวข้อ</label>
	    <input type="text" class="form-control" id="title" placeholder="หัวข้อ" name="quiz_title">
	  </div>
	  <div class="form-group">
	    <label for="detail">รายละเอียด</label>
	    <textarea id="detail" class="form-control" name="quiz_detail" rows="8" placeholder="รายละเอียด"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="title">ชื่อผู้ตั้งคำถาม</label>
	    <input type="text" class="form-control" id="quiz_who" placeholder="ชื่อผู้ตั้งคำถาม" name="quiz_who">
	  </div>
	  <div class="form-group">
	    <label for="title">รหัสลับ</label>
	    <div>
		    <img src="users/captcha" /><Br>
	        <input class="form-control" type="text" name="captcha" id="inputCaptcha" placeholder="<?=lang("b_captcha")?>" style="width:104px;">
        </div>
	  </div>
	  <button type="submit" class="btn btn-info">ตั้งคำถาม</button>
	</form>
  
  
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#questionForm").validate({
    rules: 
    {
    	webboard_category_id:{required: true},
    	quiz_title:{required: true},
    	quiz_detail:{required: true},
    	quiz_who:{required: true},
        captcha:
        {
            required: true,
            remote: "users/check_captcha"
        }
    },
    messages:
    {
    	webboard_category_id:{required: "กรุณาเลือก"},
    	quiz_title:{required: "ฟิลด์นี้ห้ามเป็นค่าว่าง"},
    	quiz_detail:{required: "ฟิลด์นี้ห้ามเป็นค่าว่าง"},
    	quiz_who:{required: "ฟิลด์นี้ห้ามเป็นค่าว่าง"},
        captcha:
        {
            required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
            remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
        }
    }
    });
});
</script>