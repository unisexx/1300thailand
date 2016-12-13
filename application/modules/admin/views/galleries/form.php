<h3>ภาพกิจกรรม (เพิ่ม / แก้ไข)</h3>

<form id="gallery_frm" method="post" enctype="multipart/form-data" action="admin/galleries/save/<?=$rs->id?>">

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="thai">
        <table class="tbadd">
        <tr>
          <th>ชื่ออัลบัม<span class="Txt_red_12"> *</span></th>
          <td>
          	<input rel="th" type="text" class="form-control" name="title" value="<?=$rs->title?>" style="width:800px;" />
		  </td>
        </tr>
        <tr>
          <th>รูปกิจกรรม</th>
          <td>
          	<input type="file" name="image[]" multiple>
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
	$("#gallery_frm").validate({
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

<h3>จัดการรูปภาพ</h3>

<form method="post" enctype="multipart/form-data" action="admin/galleries/save_caption">
	
<table class="table">
	<thead>
		<th>รูป</th>
		<th>คำบรรยายภาพ</th>
		<th>จัดการ</th>
	</thead>
	<tbody>
		<?foreach($rs->gallery->order_by('id','desc')->get() as $row):?>
		<tr>
			<td><img src="uploads/gallery/<?=$row->image?>" height="40"></td>
			<td><input class="form-control" type="text" name="caption[]" value="<?=$row->caption?>"></td>
			<td>
				<input type="hidden" name="id[]" value="<?=$row->id?>">
				<a href="admin/galleries/delete_image/<?=$row->id?>"><img src="themes/admin/images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')" /></a>
			</td>
		</tr>
		<?endforeach;?>
	</tbody>
</table>

<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึกคำบรรยายภาพ" class="btn btn-primary"/>
</div>
</form>