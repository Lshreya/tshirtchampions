<!DOCTYPE html>
<html>
<head>
<title>Signature Maker</title>
<!-- Include CSS  File Here-->
<style>
@import "http://fonts.googleapis.com/css?family=Raleway";
/* Above line is used for online google font */
h2 {
background-color:#FEFFED;
padding:30px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
span {
display:block;
margin-bottom:20px;
color:red
}
.success {
display:block;
margin-top:20px;
margin-bottom:0;
font-size:14px
}
b {
color:green
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc;
margin-bottom:25px
}
div.container {
width:900px;
height:610px;
margin:35px auto;
font-family:'Raleway',sans-serif
}
div.main {
width:306px;
padding:10px 50px 30px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
float:left;
margin-top:15px
}
input[type=text] {
width:96%;
height:25px;
padding:5px;
margin-bottom:25px;
margin-top:5px;
border:2px solid #ccc;
color:#4f4f4f;
font-size:16px;
border-radius:5px
}
input[type=radio] {
margin:10px 10px 0
}
label {
color:#464646;
text-shadow:0 1px 0 #fff;
font-size:14px;
font-weight:700
}
input[type=submit] {
font-size:16px;
background:linear-gradient(#ffbc00 5%,#ffdd7f 100%);
border:1px solid #e5a900;
color:#4E4D4B;
font-weight:700;
cursor:pointer;
width:100%;
border-radius:5px;
padding:10px 0;
outline:none
}
input[type=submit]:hover {
background:linear-gradient(#ffdd7f 5%,#ffbc00 100%)
}
</style>
<!-- Include JavaScript File Here-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/get_post.js"></script>
</head>


<body>

<div class="container">

<div class="main">


<form method="post" action="signature.php" id="form">

<h2>Champion Signature Maker</h2>




<label>Name :</label>

<input type="text" name="name" id="name" />


<label>Title :</label>

<input type="text" name="title" id="title" />


<label>Email :</label>

<input type="text" name="email" id="email" />


<label>Direct Phone Number<br>(leave blank if you don't want this) :</label>

<input type="text" name="direct" id="direct" />


<label>Cell Phone Number<br>(leave blank if you don't want this) :</label>

<input type="text" name="cell" id="cell" />


<h3>Ready? Click below, then copy everything on the next page to your signature!</h3>


<input type="submit" name="submit" id="submit" value="Ready!">

</form>


</div>

</div>

</body>

</html>