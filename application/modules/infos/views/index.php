<div class="title-news">ข่าวประชาสัมพันธ์</div>
<div class="clearfix">&nbsp;</div>

<?foreach($rs as $info):?>
<a href="infos/view/<?=$info->id?>">
<div class="col-md-3 " id="<?=alternator('bg-thumpnail', 'bg-thumpnail_2');?>">
	<img src="uploads/info/<?=$info->image?>">					
	<p><?=$info->title?></p>						
	<div class="date-news">
		<ul>
			<li><img src="themes/1300/images/icon-calendar.png"></li>
			<li> <?=DB2Date($info->post_date)?> </li>
			<li><img src="themes/1300/images/icon-glass.png" style="margin-left:10px;"></li>
			<li>view <?=$info->counter?></li>
		</ul>
	</div>
</div>
</a>
<?endforeach;?>

<div class="clearfix">&nbsp;</div>
<?=$rs->pagination_front();?>
