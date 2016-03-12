<?php  
require_once ('./session.php'); 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<!--  Created with the CoffeeCup HTML Editor 2008  -->
<!--           http://www.coffeecup.com/           -->
<!--        Brewed on 5/12/2009 3:34:43 PM         -->
<head>
  <title></title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<style>
a {text-decoration:none}
.tab{font-family: arial, verdana, san-serif; font-size: 14px;}
.asd{text-decoration: none; font-family: arial, verdana, san-serif; font-size: 13px; color: #4234ff;}
</style>

<script language=javascript>
window.onerror = null;
var bName = navigator.appName;
var bVer = parseInt(navigator.appVersion);
var IE4 = (bName == "Microsoft Internet Explorer" && bVer >= 4);
var menuActive = 0;
var menuOn = 0;
var onLayer;
var timeOn = null;

function showLayer(layerName,aa){
var x =document.getElementById(aa);
var tt =findPosX(x);
var ww =findPosY(x)+20;

if (timeOn != null) {
clearTimeout(timeOn);
hideLayer(onLayer);
}
if (IE4) {
var layers = eval('document.all["'+layerName+'"].style');
layers.left = tt;
eval('document.all["'+layerName+'"].style.visibility="visible"');
}
else {
if(document.getElementById){
var elementRef = document.getElementById(layerName);
if((elementRef.style)&& (elementRef.style.visibility!=null)){
elementRef.style.visibility = 'visible';
elementRef.style.left = tt;
elementRef.style.top = ww;
}
}
}
onLayer = layerName
}

function hideLayer(layerName){
if (menuActive == 0)
{
if (IE4){
eval('document.all["'+layerName+'"].style.visibility="hidden"');
}
else{
if(document.getElementById){
var elementRef = document.getElementById(layerName);
if((elementRef.style)&& (elementRef.style.visibility!=null)){
elementRef.style.visibility = 'hidden';
}
}
}
}
}

function btnTimer() {
timeOn = setTimeout("btnOut()",600)
}

function btnOut(layerName){
if (menuActive == 0){
hideLayer(onLayer)
}
}

var item;
function menuOver(itemName,ocolor){
item=itemName;
itemName.style.backgroundColor = ocolor; //background color change on mouse over
clearTimeout(timeOn);
menuActive = 1
}

function menuOut(itemName,ocolor){
if(item)
itemName.style.backgroundColor = ocolor;
menuActive = 0
timeOn = setTimeout("hideLayer(onLayer)", 100)
}

function findPosX(obj)
{
var curleft = 0;
if (obj.offsetParent)
{
while (obj.offsetParent)
{
curleft += obj.offsetLeft
obj = obj.offsetParent;
}
}
else if (obj.x)
curleft += obj.x;
return curleft;
}

function findPosY(obj)
{
var curtop = 0;
if (obj.offsetParent)
{
while (obj.offsetParent)
{
curtop += obj.offsetTop
obj = obj.offsetParent;
}
}
else if (obj.y)
curtop += obj.y;
return curtop;
}

</script>




<style type="text/css">
<!--

body{
font: bold 11px/18px Arial, Helvetica, sans-serif
}
#title {
font: bold 11px/18px Arial, Helvetica, sans-serif; text-transform: uppercase; width: 330px; color: #5a698b; padding-top: 10px; padding-bottom:10px; letter-spacing: 2px; height: 26px; text-align: center
}
form1 {
width: 400px; text-align:center; border: 1px solid #5a698b
}
.col1 {
float: left; margin: 0px 2px 0px 0px; width: 120px; height: 42px; text-align: left; font: 18px/18px Times New Roman; color: blue;
}
.col2 {
display: block; float: left; margin: 0px; width: 400px; height: 42px
}
div.row {
clear: both; width: 550px
}
.submit {
clear: both; width: 330px; padding-top: 5px; padding-bottom: 5px; height: 29px
}
.input {
padding-right: 1px; padding-left: 1px; padding-bottom: 1px; margin: 0px 0px 5px 8px; font: 18px/18px Times New Roman; color: black; padding-top: 1px
}
.textarea {
margin: 4px 0px 5px 8px; font: 11px/14px Arial, Helvetica, sans-serif
}
-->
</style>

</head>


<body>


<center><img border="0" alt="" src="./balaji/images/b1.jpg" width="712" height="111"> <br>


<?php include 'popupmenu.html' ?>

</center>
<div align="center"><img border="0" alt="" src="./balaji/images/bgr_m.jpg" width="228" height="211">
<img border="0" alt="" src="./balaji/images/fl_2.jpg" width="478" height="208"></div>
<br><br><!-- Start of FORM -->

<!--

<body>
<center><img border="0" alt="" src="./balaji/images/b1.jpg" width="707" height="111"> <br>
</center><br>
<div align="center"><img border="0" alt="" src="./balaji/images/bgr_m.jpg" width="228" height="211">
<img border="0" alt="" src="./balaji/images/fl_2.jpg" width="478" height="208"></div>
<br><br><!-- Start of FORM -->


<center>

<table valign=top cellpadding=0 cellspacing=0 width=610 border=0>
	<tr><td> <b>Feedback</b> </td></tr>
	<tr><td> <b>&nbsp;</b> </td></tr>
	<tr><td> Please provide your valuable feedback to SVTemple Colorado </td></tr>
	<tr><td> <b>&nbsp;</b> </td></tr>
</table>


	<?php

			function is_valid_email($email) {
				return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
			}
			//$displaytext="\nForm was not submitted..";
			if(isset($_POST['submit']))
			{
				//$displaytext="\nForm was submitted..";
				$name=$_POST['name'];
				$email=$_POST['email'];
				$subject=$_POST['subject'];
				$message=$_POST['message'];
				//$message = trim($message);
				//$message = stripslashes($message);
				//$message = htmlspecialchars($message);

				if (!is_valid_email($email)) 
				{
					$displaytext.="The e-mail address provided is not valid.";
				}
				if( ($message == null) || (strlen($message) == 0) )
				{
					$displaytext .="No message was provided.";
				}
				else
				{
					$to = 'cnarumanchi@yahoo.com';
					//define the subject of the email
					$subject = "Feedback:" . $subject;
					//create a boundary string. It must be unique
					//so we use the MD5 algorithm to generate a random hash
					$random_hash = md5(date('r', time()));
					//define the headers we want passed. Note that they are separated with \r\n
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= "From: $email\r\nReply-To: info@svtempleco.org\r\nCC:\r\n";
					// To send HTML mail, the Content-type header must be set
					//add boundary string and mime type specification
					//$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";
					//define the body of the message.
					$message = "Name:$name\n\n" . $message;
					//send the email
					$mail_sent = @mail( $to, $subject, $message, $headers);
					
					//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
					if($mail_sent)
						$displaytext="\nYour feedback has been sent.Thank you!";
					else
						$displaytext="\nError in sending the feedback.Please try again at a later time.Thank you!";	
				}
				unset($_POST['submit']);
			}
	?>

<table valign=top cellpadding=0 cellspacing=0 width=400 border=0>
	<tr><td width="30%"> 
		<form action='<?php echo $_SERVER['PHP_Self']; ?>' method="post">
			Name:</td> <td> <input name="name" type="text" value='<?php if(isset($name)){echo $name; } ?>' size="40"></input></td><td></td></tr>
	<tr><td>Email:</td> <td> <input name="email" type="text" value='<?php if(isset($email)){echo $email; } ?>' size="40"></input> </td><td><font color="red">&nbsp;(required)</font></td></tr>

	
		<tr><td>Subject:</td> <td> <input name="subject" type="text" value='<?php if(isset($subject)){echo $subject; } ?>' size="40"></input></td><td></td></tr>
	

		<tr><td>Message:</td><td><TEXTAREA NAME="message" COLS=32 ROWS=8><?php if(isset($message)){echo $message; } ?></TEXTAREA> <br><br></td><td><font color="red">&nbsp;(required)</font></td></tr>
	
	<tr><td> 
			<br>&nbsp;</td><td>



			
	<center> <input type="reset"  value="Cancel"></input><input type="submit" name="submit" value="Submit"></input>	</center></td></tr>


				<tr><td> 
			<br>&nbsp;</td><td>


	<center> <font color="red"><?php echo "$displaytext"; ?></font></center></td></tr>

	
			
 

	</table>

</center>

<br><br><br>

<center><img border="0" alt="" src="./balaji/images/b2.jpg" width="712" height="55" > </img><br>

</body>
</html>

