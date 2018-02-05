<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

<ul id="font_categories">
	<li style="margin-top:10px;text-align:center;"><img src="http://tshirtchampions.com/sites/437/images/logo2.png" width="150" height=auto alt="Tshirt Champions"><h3 style="margin-top:0; width: 100%; text-align:center;">Font List</h2><br><br></li>
	<li>Standard
		<ul class="font_cat_list">
			<li><a href="index.php?list=serif">Serif</a></li>
			<li><a href="index.php?list=sans_serif">Sans Serif</a></li>
			<li><a href="index.php?list=slab_serif">Slab Serif</a></li>
		</ul>
	</li>
		<li>Script
		<ul class="font_cat_list">
			<li><a href="index.php?list=calligraphy">Calligraphy</a></li>
			<li><a href="index.php?list=handwritten">Handwritten</a></li>
		</ul>
	</li>
	</li>
		<li>Fancy
		<ul class="font_cat_list">
			<li><a href="index.php?list=cartoon">Cartoon</a></li>
			<li><a href="index.php?list=curly">Curly</a></li>
			<li><a href="index.php?list=eroded">Eroded</a></li>
			<li><a href="index.php?list=groovy">Groovy</a></li>
			<li><a href="index.php?list=horror">Horror</a></li>
			<li><a href="index.php?list=old_school">Old School</a></li>
			<li><a href="index.php?list=retro">Retro</a></li>
			<li><a href="index.php?list=stencil">Stencil</a></li>
			<li><a href="index.php?list=typewriter">Typewriter</a></li>
		</ul>
	</li>
	<li><a href="index.php?list=foreign_look">Foreign Look</a></li>
	</li>
		<li>Techno
		<ul class="font_cat_list">
			<li><a href="index.php?list=square">Square</a></li>
			<li><a href="index.php?list=scifi">Scifi</a></li>
			<li><a href="index.php?list=various">Various</a></li>
		</ul>
	</li>
	</li>
		<li>Gothic
		<ul class="font_cat_list">			
			<li><a href="index.php?list=celtic">Celtic</a></li>
			<li><a href="index.php?list=medieval">Medieval</a></li>
			<li><a href="index.php?list=modern">Modern</a></li>
		</ul>
	</li>
</ul>


<ul id="font_listing">


<?php 

include('lists/'.$_GET['list'].'.php');

if (empty($_GET)) {
	include('lists/all.php');
}

 ?>



</ul>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
