<h3>ภาพกิจกรรม</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get" action'admin/law_plans'>
  <div class="col-xs-4">
    <input type="text" class="form-control" name="search" id="exampleInputName2" placeholder="ชื่ออัลบัม" value="<?=@$_GET['search']?>">
    </div>
  <button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />Search</button>
</form>

  
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/galleries/form'" class="btn btn-warning vtip" />
</div>

<?php echo $rs->pagination()?>

<table class="tblist">
<tr>
  <th>#</th>
  <th>ชื่ออัลบัม</th>
  <th>จำนวนรูป</th>
  <th>จัดการ</th>
  </tr>
  <?foreach($rs as $key=>$row):?>
  <tr class="<?=alternator('','odd');?>">
	  <td><?=($key+1)+$rs->paged->current_row?></td>
	  <td><?=$row->title?></td>
	  <td><?=$row->gallery->count();?></td>
	  <td><a href="admin/galleries/form/<?=$row->id?>"><img src="themes/admin/images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <a href="admin/galleries/delete/<?=$row->id?>"><img src="themes/admin/images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')" /></a></td>
  </tr>
  <?endforeach;?>
</table>

<?php echo $rs->pagination()?>