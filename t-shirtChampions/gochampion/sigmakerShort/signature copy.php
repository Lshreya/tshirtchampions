<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
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

<br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0" style="font-family:Avenir, 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size: .9em">
  <tr>
    <td scope="col">
    	<table width="500" border="0" cellspacing="0" cellpadding="0">
            <td scope="col">
                <img src="http://gochampion.net/sigmaker2/signature-images/torch-small.png" style="float:left; margin-right:10px;" />
            </td>
            <td scope="col" style="border-right:2px solid #E63C2F;" align="left">
            <span style="color:#E63C2F; font-size:1.2em; font-weight:bold;">
	<?php echo $info['name']; ?> </span><br />
            <span style="font-style:italic; font-weight: bold">
	<?php echo $info['title']; ?></span></td>
            <td width="62%" scope="col" align="center" style=" font-size:.9em">
				3649 Winplace Road &nbsp; Memphis, TN 38118<br />
				<a href="mailto:<?php echo $info['email']; ?>"><?php echo $info['email']; ?></a>  &bull; 901-365-4830 Office<br />
				
				<?php if ( empty($info['direct']) || empty($info['cell']) )  {
					
					if (empty($info['direct'])) {
					} else {
					echo $info['direct'] . " Direct  &bull;  ";
					}
					if (empty($info['cell'])) {
					} else {
					echo $info['cell'] . " Cell   &bull;  ";
					}		
				} else {
				echo $info['direct'] . " Direct  &bull;  " .  $info['cell'] . " Cell<br />";
				}?>
				901-365-2796 Fax</td>
          </tr>
    	</table>
    </td>
  </tr>
  <tr height="5">
    <td height="15"></td>
  </tr>
  <tr>
    <td><a href="http://www.tshirtchampions.com"><img src="http://gochampion.net/sigmaker2/signature-images/email-logos.png" width="500" height="70" style="border-top:2px solid #E63C2F; border-bottom:2px solid #E63C2F;" /></a></td>
  </tr>
  <tr>
    <td height="15"></td>
  </tr>
  <tr>
    <td align="center">
<a href="https://www.youtube.com/watch?v=qKCYTcs5Asg&feature=youtu.be" style="font-size: 1em; font-weight: bold; text-decoration: none; color:#004990">Click here link for an exclusive video tour of the Champions Factory</a>
  </tr>
  <tr>
    <td height="15"></td>
  </tr>
  <tr>
    <td align="center">
We make T-Shirts, Trophies, Promotional Products and more easy for you.
Quality Custom Designed products, sensational service and unbeatable
prices, that's our Happiness Guarantee. We promise to treat you like family!
    </td>
  </tr>
</table>
</body>
</html>