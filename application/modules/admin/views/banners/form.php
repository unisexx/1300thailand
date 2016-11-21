<h3>แบนเนอร์ (เพิ่ม / แก้ไข)</h3>

<form id="info_frm" method="post" enctype="multipart/form-data" action="admin/infos/save/<?=$rs->id?>">

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="thai">
        <table class="tbadd">
        <tr>
          <th>ชื่อแบนเนอร์<span class="Txt_red_12"> *</span></th>
          <td>
          	<input rel="th" type="text" class="form-control" name="name" value="<?=$rs->name?>" style="width:800px;" />
		  </td>
        </tr>
        <tr>
          <th>ไฟล์แนบเอกสาร<br>ขนาด 237 x 97 px</th>
          <td>
          	<?if($rs->img_th != ""):?>
          		<a href="uploads/info/<?=$rs->img_th?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?=$rs->img_th?></a>
          	<?endif;?>
          	<input type="file" name="img_th" class="form-control" id="fileField" />
          </td>
        </tr>
        <tr>
        	<th>ลิ้งค์</th>
        	<td><input type="text" class="form-control" name="url" value="<?=$rs->url?>"  style="width:800px;" placeholder="http://www.1300thailand.com" /></td>
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
	$("#info_frm").validate({
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