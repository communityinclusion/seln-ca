<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	
	<link type="text/css" href="css/smoothness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css">

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	<style type="text/css">
			/*demo page css*/
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
			#accordion img {padding-left:1em;}
			#accordion h3 a.redd {color:white;}
		</style>

	<script>	$(function() {
 $("#accordion").accordion();
});</script>

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<div id="header-container">
		<header class="wrapper clearfix">
			<h1 style="padding:0em; margin:0em;" id="title"><img src="img/top_logo.gif" alt="small seln logo" /></h1>
			<!--<nav>
				<ul>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
				</ul>
			</nav>-->
		</header>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<article>
				<header>
					<h2>Welcome to the SELN-CA meetup demo</h2>
					<p>Use the map tool to find the closest meeting to you</p>
				</header>
				<!-- Accordion -->
						<a class="btn btn-info btn-large various fancybox.iframe" style="color:white;" href="http://maps.google.com/maps/ms?msa=0&amp;msid=202643747748325286558.0004bc6508a07f1d96e6a&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.456636,-120.585937&amp;spn=8.479395,14.0625&amp;z=6&amp;output=embed">Meeting Locator</a>

				<p><strong>OR</strong></p>
						
				
		<h2 class="demoHeaders">Browse current meetups:</h2>
		<div id="accordion">
			<div>
				<h3 id="one"><a href="#">Seln Event #1</a></h3>
				<div><div style="width:100%; text-align:left;" ><iframe  src="https://www.eventbrite.com/tickets-external?eid=3240419181&ref=etckt" frameborder="0" height="192" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe></div>
			</div>
			<div>
				<h3 id="two"><a href="#">Seln Event #2</a></h3>
				<div><div style="width:100%; text-align:left;" ><iframe  src="https://www.eventbrite.com/tickets-external?eid=3240455289&ref=etckt" frameborder="0" height="192" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe></div></div>
			</div>
			
		</div>
				<hr />
		<div id="accordion">
			<div>
				<h3 id="host"><a class="redd" href="#">Would you like to host a meetup?</a></h3>
				<div><div id="wufoo-m7p6r7">
Fill out my <a href="http://iciwebs.wufoo.com/forms/m7p6r7">online form</a>.
</div>
<script type="text/javascript">var m7p6r7;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'iciwebs', 
'formHash':'m7p6r7', 
'autoResize':true,
'height':'437',
'async':true,
'header':'show', 
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { m7p6r7 = new WufooForm();m7p6r7.initialize(options);m7p6r7.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>
			</div>
			<hr />
		<div id="accordion">
			<div>
				<h3 id="webinar"><a class="redd" href="#">Can't make it to one, want to participate online?</a></h3>
				<div><div id="wufoo-m7p6z7">
Fill out my <a href="http://iciwebs.wufoo.com/forms/m7p6z7">online form</a>.
</div>
<script type="text/javascript">var m7p6z7;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'iciwebs', 
'formHash':'m7p6z7', 
'autoResize':true,
'height':'260',
'async':true,
'header':'show', 
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { m7p6z7 = new WufooForm();m7p6z7.initialize(options);m7p6z7.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>
			</div>
			
			
		</div>
			</article>
			
			<aside>
				<h3>aside</h3>
				<p>This will have the intro. It goes to the top in the mobile view</p>
			</aside>
			
		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper">
			<h4>footer</h4>
		</footer>
	</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>


<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<script src="js/script.js"></script>
<script>
$("#accordionl, #accordionr").accordion();
</script>
<script type="text/javascript">
			$(function(){

				// Accordion

				$("#accordion").accordion({ header: "h3", collapsible: true, active: false, autoHeight: false, navigation: true  });
				
				<?php if($_GET['id'])
				{
				?>
				$("#accordion").accordion("activate", <?php echo $_GET['id']; ?>);
				<?php } ?>


			});
		</script>


		<script>
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });

    $(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
