<DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/nav_bar_style.css">

	<title>Akhilesh Gandhi | Contact</title>
</head>
<style>

.icon{
	padding: 20px; height:80px; width: 80px;
}

#note{
	border: groove;
	height: 65%; width: 300px;
	position: fixed; left: 5%; top: 150px; 
}
h3.title{
	color: red;
	text-align: center;
	font-size: 24px;
}
.form_fill{
	text-align: center;
	position: relative; left: 25px;
	width: 250px;
	background: transparent;
	border: groove;
}
#message{
	position: relative; left: 25px;
	width: 250px;
	height: 48%;
	font-size: 15px;	
}
#submit{
	text-align: center;
	position: relative; left: 110px;
	width: 80px;
}
#container{
	border: groove; 
	height: 60%;
	width: 30%;
	position: fixed;
	left: 35%;
	top: 25%;
}

h1{text-align: center; position: relative; top:25px; font-size: 30px;}


</style>

<body>

<h1> Contact Me !</h1>

<div id="note">
<h3 class="title"> Drop me a note </h3>
<form method="POST" action="dropmeanote.php">
<input type="text" name="cf_name" placeholder="NAME (Required)" class="form_fill"><p></p>
<input type="text" name="cf_email" placeholder="Email (Required)" class="form_fill"><p></p>
<textarea type="text" name="cf_message" placeholder="Message" class="form_fill" id="message"></textarea><p></p>
<input type="submit" name="submit" value="Send" id="submit">
</form>
</div>

<?php include("nav_bar.php"); ?>

<div id="container" style="padding: 20px;">
<h3 style="text-align: center;">Follow Me !</h3>
<p style="padding: 0px;">
	&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.facebook.com/akhilesh.gandhi" target="_blank"><image src="icons/facebook.png" class="icon"></a>
<a href="https://twitter.com/akhilesh_gandhi" target="_blank"><image src="icons/twitter.png" class="icon"></a>
<a href="https://www.linkedin.com/profile/view?id=305814277&trk=spm_pic" target="_blank"><image src="icons/linkedIn.png" class="icon"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.quora.com/Akhilesh-Gandhi" target="_blank"><image src="icons/quora.jpg" class="icon"></a>
<a href="mailto:akhilesh2295@gmail.com?Subject=Hello%20Akhilesh%-CHeA"><image src="icons/gmail.png" class="icon"></a>
<!-- add gmail mailto-->

</p>


</div>

</body>


</html>