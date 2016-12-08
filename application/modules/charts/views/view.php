<div class="title-news">สถิติสายด่วน 1300</div>
	 <br>
	<img src="themes/1300/images/icon-chart.png" style="float:left; margin-right:15px; "> 
	
	<?foreach($categories as $row):?>
		<a href="charts/view/<?=$row->id?>"><button type="submit" class="btn-stat01"><?=$row->name?></button></a>
	<?endforeach;?>
	<div class="clearfix">&nbsp;</div>
	
	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>ชื่อ</th>
			<th>ไฟล์แนบ</th>
		</tr>
		</thead>
		<tbody>
		<?foreach($rs as $row):?>
		<tr>
			<td><?=$row->name?></td>
			<td>
				<?if($row->attach_1 != ""):?>
		      		<a href="uploads/chart/<?=$row->attach_1?>" target="_blank"><?=file_icon($row->attach_1)?> download</a><br>
		      	<?endif;?>
		      	<?if($row->attach_2 != ""):?>
		      		<a href="uploads/chart/<?=$row->attach_2?>" target="_blank"><?=file_icon($row->attach_2)?> download</a><br>
		      	<?endif;?>
		      	<?if($row->attach_3 != ""):?>
		      		<a href="uploads/chart/<?=$row->attach_3?>" target="_blank"><?=file_icon($row->attach_3)?> download</a>
		      	<?endif;?>
			</td>
		</tr>
		<?endforeach;?>
		</tbody>
	</table>
	
	<?php echo $rs->pagination()?>
	
	<div class="clearfix">&nbsp;</div>