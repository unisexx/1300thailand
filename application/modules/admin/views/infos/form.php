<h3>ข่าวประชาสัมพันธ์ (เพิ่ม / แก้ไข)</h3>

<form id="banner_frm" method="post" enctype="multipart/form-data" action="admin/infos/save/<?=$rs->id?>">

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="thai">
        <table class="tbadd">
        <tr>
          <th>ชื่อข่าว<span class="Txt_red_12"> *</span></th>
          <td>
          	<input rel="th" type="text" class="form-control" name="title" value="<?=$rs->title?>" style="width:800px;" />
		  </td>
        </tr>
        <tr>
          <th>รูปหัวข้อข่าว<br>ขนาด 275 x 165 px</th>
          <td>
          	<?if($rs->image != ""):?>
          		<img src="uploads/info/<?=$rs->image?>" width="90">
          	<?endif;?>
          	<input type="file" name="image" class="form-control" id="fileField" />
          </td>
        </tr>
        <tr>
        	<th>รายละเอียด</th>
        	<td>
        		<textarea name="detail" class="full tinymce"><?php echo $rs->detail?></textarea>
        	</td>
        </tr>
        <tr>
          <th>วันที่</th>
          <td>
          	<span class="form-inline">
		    <div class="input-group date">
			  <input type="text" class="form-control datepickerTH" data-date-language="th-th" name="post_date" value="<?=DB2Date($rs->post_date)?>"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
			</div>
		    </span>
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

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
tiny('detail');
</script>
<script type="text/javascript">
$(function() {
	$("#banner_frm").validate({
	    rules:
	    {
	    	'name':{required: true}
	    },
	    messages:
	    {
	    	'name':{required: "ฟิลด์นี้ห้ามเป็นค่าว่าง"}
	    }
    });
});
</script>