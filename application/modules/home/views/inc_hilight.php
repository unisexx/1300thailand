<style>
.carousel-indicators {bottom:-35;}
.carousel-indicators li{background-color:#777;}
.carousel-indicators .active{background-color:#E62D7B;}
</style>
<div class="section" id="bg-highlight">
        <div class="container">
		    <div class="row"  id="width-slide">
				  <!-------------------------Start hilight------------------------------------------------------------>
			 <div class="col-md-12  text-center">
				  <div id="carousel-highlight" class="carousel slide" data-ride="carousel">
				  	
				  	<!-- Indicators -->
				    <ol class="carousel-indicators">
				      <?php foreach($rs as $key=>$row):?>
				      	<li data-target="#carousel-highlight" data-slide-to="<?=$key?>" <?=($key==0)?'class="active"':'';?>></li>
				      <?php endforeach;?>
				    </ol>
    
					<div class="carousel-inner">
						<?foreach($rs as $key=>$row):?>
						<div class="item <?=$key==0?'active':'';?>">
							<a href="<?=$row->url?>" target="_blank"><img src="themes/1300/images/highlight-pic001.jpg" alt="title" class="img-responsive"></a>
						</div>
						<?endforeach;?>
					</div>
				  </div>
				    <a class="left carousel-control" href="#carousel-highlight" data-slide="prev"><div class="arrow-prev">&nbsp;</div></a>
					<a class="right carousel-control" href="#carousel-highlight" data-slide="next"><div class="arrow-next">&nbsp;</div></a>
		  </div>
		   <!-------------------------END hilight------------------------------------------------------------>
			</div>
	  </div>
</div>