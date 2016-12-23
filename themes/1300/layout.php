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

<div class="section" id="bg-head-page" style="padding:0;">
        <div class="container">
			<div  id="logo-page">&nbsp;</div>
			<div class="title-page">เกี่ยวกับเรา สายด่วน 1300</div>			
	  </div>
</div>

<div class="clearfix-news">&nbsp;</div>


<!-------------------------Start Colum------------------------------------------------------------>

      <div class="container">
        <div class="row">

          <div class="col-md-4 text-center" id="banner">
			<?=modules::run('home/inc_sidebar'); ?>
		  </div>

          <div class="col-md-7">
          	<?php echo $template['body']; ?>
		 </div>
      </div>
 <!-------------------------END Colum------------------------------------------------------------>

    <!-------------------------------------------- End--------------------------------------------------->
	</div>
	
	<? include "_footer.php";?>
</body>
</html>
