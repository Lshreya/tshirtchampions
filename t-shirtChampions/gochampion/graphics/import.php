﻿<html>
<head>
<title>CU3ER</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" />

<!-- CU3ER content JavaScript part starts here   -->
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/CU3ER.js"></script>
<script type="text/javascript">
  // add your FlashVars
  var vars = { xml_location : 'CU3ER-config.xml' };
  // add Flash embedding parameters, etc. wmode, bgcolor...
  var params = { bgcolor : '#ffffff' };
  // Flash object attributes id and name
  var attributes = { id:'CU3ER', name:'CU3ER' };
  // dynamic embed of Flash, set the location of expressInstall if needed
	swfobject.embedSWF('CU3ER.swf', "CU3ER", 640, 480, "10.0.0", "js/expressinstall.swf", vars, params, attributes );
  // initialize CU3ER class containing Javascript controls and events for CU3ER
  var CU3ER_object = new CU3ER("CU3ER");
</script>
<!-- CU3ER content JavaScript part ends here   -->


</head>
<body >

  <!-- CU3ER content HTML part starts here   -->
  <div id="CU3ER">
      <!-- modify this content to provide users without Flash or enabled Javascript with alternative content information -->
      <p>Click to get Flash Player<br /><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
      <p>or try to enable JavaScript and reload the page
      </p>
  </div>
  <!-- CU3ER content HTML part ends here   -->

  <div id="help" style="font-family:Tahoma; margin:50px 0 50px 50px;">
      <h2>First Help items, for other troubleshooting items please check <a href='http://docs.getcu3er.com'>CU3ER documentation</a> or <a href='http://support.getcu3er.com/forums/223943-cu3er-faq'>CU3ER FAQ</a></h2>
		<h3>CU3ER don't display after download?</h3>
		<p>
		If you have trouble with viewing CU3ER on your local hard drive,
		please adjust your Flash player global security settings:
		</p>
		<ol>
			<li>Visit <a href="http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager04.html">http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager04.html</a> </li>
			<li>Click on "Edit locations -> add location"</li>
			<li>Click on "Browse for folder..." and mark folder where you have extracted
				your CU3ER free zip package</li>
			<li>That's it. Reload your embed_example.html and preview CU3ER.</li>
		</ol>
		<p>
		If you have trouble with viewing CU3ER on your web page under assigned
		domain, please check:
		</p>
		<ol>
			<li>if the paths to related CU3ER files are correct</li>
			<li>if the CU3ER files are uploaded to respective destinations on your server.</li>
			<li>if some of your CSS/JS settings is preventing CU3ER div container to
				display</li>
			<li>for any JS errors that might have impact with CU3ER display</li>
		</ol>
      <h3>I am PRO user but I can’t remove CU3ER logo?</h3>
		<p>
		There are couple possible reasons why CU3ER brand is still present
		in your slideshow:
		</p>
		<ul>
        <li>Make sure your CU3ER is deployed within assigned domain. <br />
				Please note if you play CU3ER locally or under your testing
				environment (not under assigned domain) CU3ER branding will be present.
				Once you upload CU3ER and related files to licensed domain branding will
				be removed.</li>
			<li>Make sure you have assigned correct domain name! <br />
				If your license is assigned to different domain name brand
				removing will not work.</li>
			<li>Make sure you have checked Remove branding options in 'Branding' section
				within cManager</li>

		</ul>
	</div>


</body>
</html>
