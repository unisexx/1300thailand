<div class="title-news">ภาพกิจกรรม</div>
	
	<h3><?=$rs->title?></h3>
	
	<div class="clearfix" style="margin-bottom:20px;">&nbsp;</div>
	
	<?foreach($rs->gallery->order_by('id','desc')->get() as $row):?>
		<div class="col-md-4" style="margin-bottom: 20px;">
			<a href="uploads/gallery/<?=$row->image?>" target="_blank"><img src="uploads/gallery/<?=$row->image?>" class="img-responsive img-thumbnail"></a>
		   <div class="title-gallery"><?=$row->caption?></div>
	   </div>
	<?endforeach;?>
	
	<!-------------------------END Album----------------------------------------------------------->

<div class="clearfix">&nbsp;</div>