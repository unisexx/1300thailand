<div class="title-news">สถิติสายด่วน 1300</div>
	 <br>
	<img src="themes/1300/images/icon-chart.png" style="float:left; margin-right:15px; "> 
	
	<?foreach($categories as $row):?>
		<a href="charts/view/<?=$row->id?>"><button type="submit" class="btn-stat01"><?=$row->name?></button></a>
	<?endforeach;?>
	<div class="clearfix">&nbsp;</div>
	
	<table class="table">
		<tr>
			<th>ชื่อ</th>
		</tr>
		<?foreach($rs as $row):?>
		<tr>
			<td><?=$row->name?></td>
		</tr>
		<?endforeach;?>
	</table>
	
	<?php echo $rs->pagination()?>
	
	<div class="clearfix">&nbsp;</div>