<?php
require_once ('./session.php');
require_once ('./mysql_connect.php');
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


<center><img border="0" alt="" src="./balaji/images/b1.jpg" width="707" height="111"> <br>

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

<!-- Process the form -->
<?php

$displaytext = "Unknown Error! Please try again!";

$subject=$_POST['subject'];
$emailaddresses=$_POST['bcc'];
$message=$_POST['message'];
// Send welcome email.
			$to='communications@svtempleco.org';
			//define the receiver of the email
			$bcc = $emailaddresses;
			//create a boundary string. It must be unique
			//so we use the MD5 algorithm to generate a random hash
			$random_hash = md5(date('r', time()));
			//define the headers we want passed. Note that they are separated with \r\n
			// To send HTML mail, the Content-type header must be set
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: communications@svtempleco.org\r\nReply-To: communications@svtempleco.org\r\nBcc:";
			$headers .= $emailaddresses;
			$headers .= "\r\n";

			//add boundary string and mime type specification
			//$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";
			//define the body of the message.
			//$message = 'This is test of sending bulk email for newsletters.Please visit this web site frequently to learn more about what is going on regarding this effort.<br><br>Newsletters and latest happenings will be be forwarded to your email periodically.<br><br>Thank you,
			//<br>SV Temple of Colorado Committee';
			//send the email
			$message .="<br>This message was sent by Sri Venkateswara Temple of Colorado web portal administrator. We respect your privacy. To unsubscribe from
			this list, please visit the Website at http://www.svtempleco.org/subscribepage.php and unsubscribe <br>";
		
			$activeUserId = $_SESSION['username'];

			if( $activeUserId == 'nchandra' )
			{
				$mail_sent = @mail( $to, $subject, $message, $headers);
				//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
				if($mail_sent) 
					$displaytext = "Mail was sent successfully!";
				else
					$displaytext="Sorry..Mail sending has failed";
			}
			else
			{
					$displaytext="Sorry..You are not authorized to send email. This attempt will be logged for security reasons.";
			}
?>

	<center>

	<table valign=top cellpadding=0 cellspacing=0 width=610 border=0>
		<tr><td> <b>SVTemple Colorado Bulk EMail Program</b> </td></tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <?php echo $displaytext; ?> </td></tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <center><a href="bulkemail.php">Back to Bulk Mail Program</a> </center></td></tr>	
		</table>


	</center>

	<br><br><br>

	<center><img border="0" alt="" src="./balaji/images/b2.jpg" width="712" height="55" > </img><br>

	</body>
	</html>


