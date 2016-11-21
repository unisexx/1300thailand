<h3>ข่าวประชาสัมพันธ์</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get" action'admin/law_plans'>
  <div class="col-xs-4">
    <input type="text" class="form-control" name="search" id="exampleInputName2" placeholder="ชื่อข่าวประชาสัมพันธ์" value="<?=@$_GET['search']?>">
    </div>
  <button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />Search</button>
</form>

  
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/infos/form'" class="btn btn-warning vtip" />
</div>

<?php echo $rs->pagination()?>

<table class="tblist">
<tr>
  <th>#</th>
  <th>ชื่อ</th>
  <th>รูปภาพ</th>
  <th>จัดการ</th>
  </tr>
  <?foreach($rs as $key=>$row):?>
  <tr class="<?=alternator('','odd');?>">
	  <td><?=($key+1)+$rs->paged->current_row?></td>
	  <td><?=$row->title?></td>
	  <td><?if($row->image):?><img src="uploads/info/<?=$row->image?>"><?endif;?></td>
	  <td><a href="admin/infos/form/<?=$row->id?>"><img src="themes/admin/images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <a href="admin/infos/delete/<?=$row->id?>"><img src="themes/admin/images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')" /></a></td>
  </tr>
  <?endforeach;?>
</table>

<?php echo $rs->pagination()?>