<html>
  <head>
    <base href="<?php echo base_url(); ?>" />
    <link rel="icon" href="D:\MyJob\m-so-58\template-Lawwwww\html-law\images\favicon.ico">
    <title><?php echo $template['title'] ?></title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=EDGE" />
      <?include('_metatag.php')?>
      <? include "_inc.php";?>
      <?php echo $template['metadata'] ?>
</head>
<body>
    <? include "_header.php";?>

    <!-------------------------------------------------- End logo topmenu---------------------------------------------------------------->

<?=modules::run('home/inc_hilight'); ?>


<!-------------------------Start Colum------------------------------------------------------------>
      <div class="container">
        <div class="row">

          <div class="col-md-4 text-center" id="banner">
			<?=modules::run('home/inc_sidebar'); ?>
		  </div>

          <div class="col-md-7">
          	<?=modules::run('home/inc_info'); ?>


						 <!-------------------------END News----------------------------------------------------------->
						 <div class="clearfix-news2">&nbsp;</div>

			<?// =modules::run('home/inc_webboard'); ?>


        </div>
      </div>
 <!-------------------------END Colum------------------------------------------------------------>

    <!-------------------------------------------- End--------------------------------------------------->
	</div>

	<? include "_footer.php";?>
</body>
</html>
