<div class="title-news">ข่าวประชาสัมพันธ์</div>
<a href="infos" class="btn-viewall">ดูทั้งหมด</a>
 <div class="clearfix">&nbsp;</div>
		
		<?foreach($infos as $info):?>
		<a href="infos/view/<?=$info->id?>">
		<div class="col-md-3 " id="<?=alternator('bg-thumpnail', 'bg-thumpnail_2');?>">
			<img src="uploads/info/<?=$info->image?>">					
			<p><?=$info->title?></p>						
			<div class="date-news">
				<ul>
					<li><img src="themes/1300/images/icon-calendar.png"></li>
					<li> <?=mysql_to_th($info->created)?> </li>
					<li><img src="themes/1300/images/icon-glass.png" style="margin-left:10px;"></li>
					<li>view <?=$info->counter?></li>
				</ul>
			</div>
		</div>
		</a>
		<?endforeach;?>