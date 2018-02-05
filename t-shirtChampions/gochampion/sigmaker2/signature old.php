<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>


<?php


//http://gochampion.net/sigmaker/index.php?name=Brandon+Conners&title=Vice+President+of+Operations&email=brandon@gochampion.net&direct=901-334-2323&cell=000-000-0000


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
<br />
<br />
<!--sig start-->
<table width="500" border="0" style="font-family:'Avenir', Arial, Helvetica, sans-serif; font-size:.9em; color: #1B1B8C;">
  <tr>
    <td>
         <table width="500" border="0">
          <tr>
            <td width="192">
            	<span style="font-size: 1.1em; font-weight:bold; color: #FF7214">
            	<!--Name-->
				<?php echo $info['name']; ?>
				</span><br />
				<!--Title-->
				<?php echo $info['title']; ?>
				<hr />
                  <a href="mailto:<?php echo $info['email']; ?>" style="text-decoration:none; color:#002a5c;"><?php echo $info['email']; ?></a><br />
                901-365-4830 Phone<br />
                901-365-2796 Fax<br />
                <!--direct phone-->
				<?php if (empty($info['direct'])) {
				} else {
				echo $info['direct'] . " Direct<br />";
				}?>

				<!--cell phone-->
				<?php if (empty($info['cell'])) {
				} else {
				echo $info['cell'] . " Cell<br />";
				}?>
  			</td>
            <td>
                <table width="100%" border="0">
                <tr>
                	<td>
            <a href="http://www.tshirtchampions.com/video-link-2/"><div style="display: block; border-radius:10px; padding:5px; text-decoration:none; background:#002a5c; color:#ffd195; font-weight:bold; font-style:italic; text-align:center" >Click here for an exclusive video tour<br />
            of the T-Shirt Champions Factory!</div></a>
                    </td>
                </tr>
                <tr> <td>
                <table width="100%" border="0">
                    <tr style="">
                        <td style="text-align:center; font-size: 12px; padding-top:10px; "><img src="http://www.gochampion.net/sigmaker2/signature-images/tsc-sm.png" /><br /><a href="http://www.tshirtchampions.com" style="text-decoration:none; color:#002a5c;">tshirtchampions.com</a></td>
                        <td style="text-align:center; font-size: 12px; padding-top:10px;"><img src="http://www.gochampion.net/sigmaker2/signature-images/champion-sm.png" /><br /><a href="http://www.gochampion.net" style="text-decoration:none; color:#002a5c;">gochampion.net</a></td>
        
                    </tr>
                    </table>
                    </td>
                    </tr>
                </table>
       
            
            </td>
          </tr>
        </table>
    </td>
  </tr>
  <tr>
  	<td style="border-radius:10px; padding:5px; text-decoration:none; background:#002a5c; color:#ffd195; font-weight:bold; font-style:italic; text-align:center">3649 Winplace Road &mdash; Memphis, TN 38118</td>
  </tr>
  <tr>
    <td>We make T-shirts and Trophies easy! Quality Custom Designed products, Sensational service, Prices that can't be beat, Happiness Guaranteed!  I promise to treat you like family!
    </td>
  </tr>
</table>


</body>
</html>
