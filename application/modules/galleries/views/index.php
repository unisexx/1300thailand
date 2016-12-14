<div class="title-news">ภาพกิจกรรม</div>
	
	<div class="clearfix" style="margin-bottom:20px;">&nbsp;</div>
	
	<?foreach($rs as $row):?>
		<div class="col-md-4" style="margin-bottom: 20px;">
			<a href="galleries/view/<?=$row->id?>"><img src="uploads/gallery/<?=$row->gallery->image?>" class="img-responsive img-thumbnail"></a>
		   <div class="title-gallery"><?=$row->title?></div>
	   </div>
	<?endforeach;?>
	
	<!-------------------------END Album----------------------------------------------------------->

<div class="clearfix">&nbsp;</div>
<?=$rs->pagination();?>