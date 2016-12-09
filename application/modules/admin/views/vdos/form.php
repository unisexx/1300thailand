<h3>วิดีโอ (เพิ่ม / แก้ไข)</h3>

<form id="vdo_frm" method="post" enctype="multipart/form-data" action="admin/vdos/save/<?=$rs->id?>">

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="thai">
        <table class="tbadd">
        <tr>
          <th>ชื่อวิดีโอ<span class="Txt_red_12"> *</span></th>
          <td>
          	<input rel="th" type="text" class="form-control" name="name" value="<?=$rs->name?>" style="width:800px;" />
		  </td>
        </tr>
        <tr>
        	<th>ลิ้งค์ youtube</th>
        	<td>
        		<input type="text" class="form-control" name="youtube_url" value="<?=$rs->youtube_url?>"  style="width:800px;" />
        		<div class="show_vid" style="margin-top: 10px;"></div>
        	</td>
        </tr>
        </table>
    </div>
</div>


<div id="btnBoxAdd">
  <input type="hidden" name="create_by" value="<?=user_login()->id?>">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>

<script type="text/javascript">
$(function() {
	$("#vdo_frm").validate({
	    rules:
	    {
	    	'name':{required: true}
	    },
	    messages:
	    {
	    	'name':{required: "ฟิลด์นี้ห้ามเป็นค่าว่าง"}
	    }
    });
    
    // YOUTUBE show vid from url
	var text = $('input[name=youtube_url]').val();
	if(text != null){
	    $.get('admin/vdos/ajax_show_vid',{
	    	'url' : text
	    },function(data){
	    	$('.show_vid').html(data);
	    });
	}
	    
	$('input[name=youtube_url]').on('paste', function () {
	  var element = this;
	  setTimeout(function () {
	    var text = $(element).val();
	    console.log(text);
	    // do something with text
	    $.get('admin/vdos/ajax_show_vid',{
	    	'url' : text
	    },function(data){
	    	$('.show_vid').html(data);
	    });
	  }, 100);
	});
	
	
});
</script>