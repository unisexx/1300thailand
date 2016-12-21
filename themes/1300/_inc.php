<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="media/js/validate/jquery.validate.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="themes/1300/css/style.css" rel="stylesheet" type="text/css">
<link href="themes/1300/css/template.css" rel="stylesheet" type="text/css">

<script>
$(document).ready(function(){
	// copy ชื่อหัวข้อ ไปวางไว้บนพื้น สีชมพู
	var header_txt = $(".title-news").html();
	$('.title-page').html(header_txt);
	
	// header menu hilight
	console.log(window.location.pathname);
	var path = window.location.pathname;
	$('[href="'+path.substring(1, 30)+'"]').addClass('active').parent('li').siblings().find('a').removeClass('active');
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88636728-1', 'auto');
  ga('send', 'pageview');

</script>