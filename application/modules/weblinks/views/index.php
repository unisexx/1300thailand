<div class="title-news">หน่วยงานต่างๆที่เกี่ยวข้อง</div>
<div class="clearfix">&nbsp;</div>

  <table class="table table-striped" id="tb-plan">
    <thead>
      <tr>
        <th>ชื่อ</th>
        <th>ลิ้งค์</th>
      </tr>
    </thead>
    <tbody>
    	<?foreach($rs as $key=>$row):?>
    	<tr>
    		<td><?=$row->name?></td>
    		<td><a href="<?=$row->url?>" target="_blank"><?=$row->url?></a></td>
    	</tr>
    	<?endforeach;?>
    </tbody>
  </table>

