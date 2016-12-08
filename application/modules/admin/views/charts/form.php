<h3>สถิติสายด่วน (เพิ่ม / แก้ไข)</h3>

<form id="chart_frm" method="post" enctype="multipart/form-data" action="admin/charts/save/<?=$rs->id?>">

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="thai">
        <table class="tbadd">
        <tr>
        	<th>เลือกหมวด</th>
        	<td>
	        	<?=form_dropdown('chart_category_id', get_option('id','name','chart_categories order by id asc'), @$_GET['chart_category_id'],'class="form-control" style="width:auto;"');?>
	        </td>
        </tr>
        <tr>
          <th>ชื่อไฟล์<span class="Txt_red_12"> *</span></th>
          <td>
          	<input rel="th" type="text" class="form-control" name="name" value="<?=$rs->name?>" style="width:800px;" />
		  </td>
        </tr>
        <tr>
          <th>ไฟล์แนบเอกสาร</th>
          <td>
          	<?if($rs->attach_1 != ""):?>
          		<a href="uploads/chart/<?=$rs->attach_1?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?=$rs->attach_1?></a>
          	<?endif;?>
          	<input type="file" name="attach_1" class="form-control" id="fileField" />
          </td>
        </tr>
        <tr>
          <th>ไฟล์แนบเอกสาร</th>
          <td>
          	<?if($rs->attach_2 != ""):?>
          		<a href="uploads/chart/<?=$rs->attach_2?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?=$rs->attach_2?></a>
          	<?endif;?>
          	<input type="file" name="attach_2" class="form-control" id="fileField" />
          </td>
        </tr>
        <tr>
          <th>ไฟล์แนบเอกสาร</th>
          <td>
          	<?if($rs->attach_3 != ""):?>
          		<a href="uploads/chart/<?=$rs->attach_3?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?=$rs->attach_3?></a>
          	<?endif;?>
          	<input type="file" name="attach_3" class="form-control" id="fileField" />
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
	$("#chart_frm").validate({
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