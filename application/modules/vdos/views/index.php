<div class="title-news">VTR สายด่วน 1300</div>
<div class="clearfix">&nbsp;</div>

<?foreach($rs as $row):?>
<div class="media">
  <div class="media-left media-middle">
    <a href="vdos/view/<?=$row->id?>">
      <img class="media-object" src="https://img.youtube.com/vi/<?=getYoutubeIdFromURL($row->youtube_url)?>/default.jpg" alt="<?=$row->name?>">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?=$row->name?></h4>
  </div>
</div>
<?endforeach;?>
