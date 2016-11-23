<h3>กระทู้ ถาม-ตอบ</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
	<div>
	  	<?=form_dropdown('webboard_category_id', get_option('id','name','webboard_categories order by id asc'), @$_GET['webboard_category_id'],'class="form-control" style="width:auto;"','--- เลือกหมวด ---');?>
	  	<input type="text" class="form-control" id="exampleInputName2" placeholder="ชื่อหัวข้อกระทู้" name="search" value="<?=@$_GET['search']?>" style="width: 350px;">
	  	<button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />Search</button>
    </div>
</form>

  
</div>
</div>

<?php echo $rs->pagination()?>

<table class="tblist">
<tr>
  <th>#</th>
  <th><img src="themes/admin/images/pin.png" width="16" height="16" class="vtip" title="ปักหมุดกระทู้" /></th>
  <th>หมวดหมู่</th>
  <th>หัวข้อกระทู้</th>
  <th>ความคิดเห็น</th>
  <th>ผู้โพสกระทู้</th>
  <th>วันที่ตั้งกระทู้</th>
  <th>วันที่โพสความคิดเห็นล่าสุด</th>
  <th>แสดง / ไม่แสดง</th>
  </tr>
  <?foreach($rs as $key=>$row):?>
  <tr class="<?=alternator('','odd');?>">
	  <td><?=($key+1)+$rs->paged->current_row?></td>
	  <td><input name="quiz_sticky" type="checkbox" value="1" data-row-id="<?=$row->id?>" <?=($row->quiz_sticky == 1)?'checked="checked"':'';?>/></td>
	  <td><?=$row->webboard_category->name?></td>
	  <td><a href="admin/webboard/form/<?=$row->id?>"><?=$row->quiz_title?></a></td>
	  <td><?=$row->webboard_answer->count()?></td>
	  <td><?=$row->quiz_who?></td>
	  <td><?=mysql_to_th($row->quiz_createdate)?></td>
	  <td><?=mysql_to_th($row->webboard_answer->order_by('id','desc')->answer_createdate)?></td>
	  <td>
	  	<input id="switch-size" data-status="<?=$row->quiz_status?>" data-row-id="<?=$row->id?>" type="checkbox" data-size="small" data-on-color="success" class="chkOnOff" <?if($row->quiz_status == 1){echo "checked";}?> name="status">
	  </td>
  </tr>
  <?endforeach;?>
</table>

<?php echo $rs->pagination()?>


<script type="text/javascript">
$(document).ready(function(){
	// สถานะ เปิด-ปิด
	$('input[name="status"]').on('switchChange.bootstrapSwitch', function(event, state) {
	  // console.log(this); // DOM element
	  // console.log(event); // jQuery event
	  // console.log(state); // true | false
	  // console.log($(this).attr('data-row-id'));
	  $.get('admin/webboard/ajax_status',{
	  	id : $(this).attr('data-row-id'),
	  	state : state
	  });
	});
	
	// ปักหมุด
	$("input[name='quiz_sticky']").change(function() { 
        if($(this).is(":checked")) { 
			$.get('admin/webboard/ajax_sticky',{
			  	id : $(this).attr('data-row-id'),
			  	quiz_sticky : 1
			});
        } else {
            $.get('admin/webboard/ajax_sticky',{
			  	id : $(this).attr('data-row-id'),
			  	quiz_sticky : 0
			});
        }
    }); 
	
});
</script>