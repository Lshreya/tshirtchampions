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



<!--brandon-->
<p style="font-family:'Avenir', Arial, Helvetica, sans-serif; font-size:.9em; color: #1B1B8C;"><br />
<span style="font-size: 1.1em; font-weight:bold; color: #FF7214">

<!--Name-->
<?php echo $info['name']; ?>
</span><br />

<!--Title-->
<?php echo $info['title']; ?>
<br /><br />

<img src="http://www.tshirtchampions.com/sites/437/uploaded/images/champsiglogo.png" /><br />
Formerly Champion Awards &amp; Apparel<br />
3649 Winplace Road<br />
Memphis, TN 38118<br /><br />

<a href="https://www.youtube.com/watch?v=qKCYTcs5Asg&feature=youtu.be">Click here for an exclusive video tour<br>of the T-Shirt Champions Factory</a><br><br>
<!--email link-->
<a href="
mailto:
<?php echo $info['email']; ?>
">

<!--email text-->
<?php echo $info['email']; ?>
</a><br />
901-365-4830 Phone<br />901-365-2796 Fax<br />

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


<a href="http://www.tshirtchampions.com">www.tshirtchampions.com</a><br />
<a href="http://www.gochampion.net">www.gochampion.net</a><br /><br />

We make T-Shirts, Trophies, Promotional Products and more easy for you. <br>
Quality Custom Designed products, sensational service and unbeatable prices, that's our Happiness Guarantee. <br>
We promise to treat you like family!</p>



</body>
</html>

