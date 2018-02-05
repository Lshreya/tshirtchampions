<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/*/test data//http://gochampion.net/sigmaker/index.php?name=Brandon+Conners&title=Vice+President+of+Operations&email=brandon@gochampion.net&direct=901-334-2323&cell=000-000-0000
*/

$info = array ( 
	"name" => $_POST["name"], 
	"title" => $_POST["title"], 
	"email" => $_POST["email"], 
	"direct" => $_POST["direct"], 
	"cell" => $_POST["cell"]
);

//trim spaces from phone numbers
$info['cell'] = preg_replace('/\s+/', '', $info['cell']);
$info['direct'] = preg_replace('/\s+/', '', $info['direct']);

?>
<!--sig start-->
<br style="color: rgb(0, 0, 0); font-family: -webkit-standard; font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;">
<br style="color: rgb(0, 0, 0); font-family: -webkit-standard; font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;">
<table width="500" border="0" cellspacing="0" cellpadding="0" style="color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; font-family: 'Avenir', 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size: 0.9em; color: #0D0789;">
<tbody>
<tr width="500">
<td width="500" scope="col">
<table width="500" border="0" cellspacing="0" cellpadding="0" style="color: #0D0789; font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; font-family: 'Avenir', 'Trebuchet MS', Arial, Helvetica, sans-serif;"><tbody>
<tr style=" border-bottom-style: solid; border-bottom-width: 2px; border-bottom-color: rgb(230,60,47)">
<td scope="col" width="35">
<img src="http://gochampion.net/sigmaker2/signature-images/torch-small-2.png" style="float: left; margin-right: 10px;">
</td>
<td scope="col" align="left"  width="165" style="border-right-width: 2px; border-right-style: solid; border-right-color: rgb(230, 60, 47);">
<span style="color: rgb(230, 60, 47); font-size: 1.2em; font-weight: bold;">
<?php echo $info['name']; ?>
<span class="Apple-converted-space">
</span>
</span>
<br>
<span style="font-style: italic; font-weight: bold; color:#0D0789;">
<?php echo $info['title']; ?>
</span>
</td>
<td width="300" scope="col" align="center" style="font-size: 0.9em; color: #0D0789;">
3649 Winplace Road&nbsp;&nbsp;Memphis, TN 38118<br>
<a href="mailto:<?php echo $info['email'];?>"><?php echo $info['email'];?></a>
&bull; 901-365-4830 Office<br>
<?php if ( empty($info['direct']) || empty($info['cell']) )  {
	
	if (empty($info['direct'])) {
	} else {
	echo $info['direct'] . " Direct&nbsp;&nbsp;&bull;&nbsp;&nbsp;";
	}
	if (empty($info['cell'])) {
	} else {
	echo $info['cell'] . " Cell&nbsp;&nbsp;&bull;&nbsp;&nbsp;";
	}		
} else {
echo $info['direct'] . " Direct&nbsp;&nbsp;&bull;&nbsp;&nbsp;" .  $info['cell'] . " Cell<br />";
}?>901-365-2796 Fax
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr width="500" height="19">
<td width="500" height="19">
	<div style=" height: 2px; border: 0; background: rgb(230, 60, 47); background-image:rgb(230, 60, 47); font-size: 2px;" >&nbsp;</div>
</td>
</tr>
<tr width="500">
<td width="500">
<a href="http://www.tshirtchampions.com">
<img src="http://gochampion.net/sigmaker2/signature-images/email-logos.png" width="500" height="70" style="color:#0D0789;">
</a>
</td>
</tr>
<tr width="500" height="19">
<td width="500" height="19">
	<div style=" height: 2px; border: 0; background: rgb(230, 60, 47); background-image:rgb(230, 60, 47); font-size: 2px;" >&nbsp;</div>
</td>
</tr>
<tr width="500">
<td width="500" align="center">
<a href="https://www.youtube.com/watch?v=qKCYTcs5Asg&amp;feature=youtu.be" style="font-size: 1em; font-weight: bold; text-decoration: none; color: #0D0789;">
Click here link for an exclusive video tour of the Champions Factory</a>
</td>
</tr>
<tr width="500" height="19">
<td width="500" height="19">
</td>
</tr>
<tr width="500">
<td width="500" align="center">
We make T-Shirts, Trophies, Promotional Products and more easy for you. Quality Custom Designed products, sensational service and unbeatable prices, that's our Happiness Guarantee. We promise to treat you like family!</td>
</tr>
</tbody>
</table>




</body>
</html>