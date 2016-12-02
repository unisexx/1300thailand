<a href="pages/view/6"><img src="themes/1300/images/banner001.jpg" ></a>
<a href="#"><img src="themes/1300/images/banner002.jpg" ></a>
<a href="weblinks"><img src="themes/1300/images/banner003.jpg" ></a>

<?foreach($banners as $banner):?>
<a href="<?=$banner->url?>" target="_blank"><img src="uploads/banner/<?=$banner->img_th?>"></a>
<?endforeach;?>