
<form method="post" action="email.php">
  Email: <input name="email" id="email" type="text" /><br />

  Message:<br />
  <textarea name="message" id="message" rows="15" cols="40"></textarea><br />

  <input type="submit" value="Submit" />
</form>

<?php

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@yourdomain.com
  mail( "paul@gochampion.net", "Champion Awards and Apparel",$message, "From: $email" );
?>