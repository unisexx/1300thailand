<h3>สถิติสายด่วน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get" action''>
  <div>
  	<?=form_dropdown('chart_category_id', get_option('id','name','chart_categories order by id asc'), @$_GET['chart_category_id'],'class="form-control" style="width:auto;"','--- เลือกหมวด ---');?>
    <input type="text" class="form-control" name="search" id="exampleInputName2" placeholder="ชื่อไฟล์" value="<?=@$_GET['search']?>" style="width: 350px;">
    <button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />Search</button>
    </div>
</form>

  
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/charts/form'" class="btn btn-warning vtip" />
</div>

<?php echo $rs->pagination()?>

<table class="tblist">
<tr>
  <th>#</th>
  <th>หมวด</th>
  <th>ชื่อไฟล์</th>
  <th>ไฟล์</th>
  <th>จัดการ</th>
  </tr>
  <?foreach($rs as $key=>$row):?>
  <tr class="<?=alternator('','odd');?>">
	  <td><?=($key+1)+$rs->paged->current_row?></td>
	  <td><?=$row->chart_category->name?></td>
	  <td><?=$row->name?></td>
	  <td>
	  	<?if($row->attach != ""):?>
      		<a href="uploads/chart/<?=$row->attach?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?=$row->attach?></a>
      	<?endif;?>
	  </td>
	  <td><a href="admin/charts/form/<?=$row->id?>"><img src="themes/admin/images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <a href="admin/charts/delete/<?=$row->id?>"><img src="themes/admin/images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')" /></a></td>
  </tr>
  <?endforeach;?>
</table>

<?php echo $rs->pagination()?>