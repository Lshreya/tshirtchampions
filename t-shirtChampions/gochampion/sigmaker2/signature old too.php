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


<span style="
	font-family:'Avenir', Arial, Helvetica, sans-serif;
	color: #243179;
	font-size: .8em;
">
<span style="
	font-weight: bold;
	color: #243179;
	font-size: 1.4em;
">
	<!--Name-->
	<?php echo $info['name']; ?>
	 – 
	<!--Title-->
	<?php echo $info['title']; ?>
	<br>
</span>
<hr style="
	color: #F15C22;
	background-color: #F15C22;
	height: 3px;
">
<a href="http://www.tshirtchampions.com" alt="Champion Apparel, Awards, Promotions" style="
	color: #243179; text-decoration: none;">
	<img src="http://www.tshirtchampions.com/gochampion/sigmaker2/signature-images/ChampionWtag.png" alt="Champion Custom Apparel, Awards, Promotions"/>
</a><br>
<a href="http://www.tshirtchampions.com/take-the-tour/" style="font-style: italic; color: #E55720; font-weight: bold; text-decoration: none;">Click here for an exclusive Champion tour!</a>
<br>
<a href="mailto:<?php echo $info['email']; ?>"  style="text-decoration: none; color: #243179;"><?php echo $info['email']; ?></a><br>
901-365-4830 Phone<br>
901-365-2796 Fax<br>
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
3649 Winplace Road
Memphis, TN 38118<br><br>
	<span style="font-size: .9em; font-style: italic;"> We make T-shirts and Trophies easy! Quality Custom Designed products, Sensational service, Prices that can't be beat, Happiness Guaranteed! I promise to treat you like family!
	</span>
</span>






</body>
</html>
