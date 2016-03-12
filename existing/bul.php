<?php  require_once ('./session.php'); 

// Set the database access information as constants.
define ('DB_USER', 'svt3194');
define ('DB_PASSWORD', 'Svtemple2009');
define ('DB_HOST', 'svt3194.db.4273447.hostedresource.com');
define ('DB_NAME', 'svt3194');

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




<?php

include("./fckeditor/fckeditor.php") ;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
	<style type="text/css">
<!--
a {text-decoration:none}

.roundcont {
	width: 250px;
	background-color: #f90;
	color: #fff;
}

.roundcont p {
	margin: 0 10px;
}

.roundtop {
	background: url(tr.gif) no-repeat top right;
}

.roundbottom {
	background: url(br.gif) no-repeat top right;
}

img.corner {
   width: 15px;
   height: 15px;
   border: none;
   display: block !important;
}



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
.dropdown {
width: 190px;height:29px;padding-right: 1px; padding-left: 1px; padding-bottom: 1px; margin: 0px 0px 5px 8px; color: black; padding-top: 1px
}
.textarea {
margin: 4px 0px 5px 8px; font: 11px/14px Arial, Helvetica, sans-serif
}
-->
</style>

	
	
		<title>Manage Announcements</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow"></head>

		<body>
<center>

	
<?php

				$activeUserId = $_SESSION['username'];
				if( $activeUserId == 'nchandra' )
				{
					echo "<h1>Current Email Addresses in the DB</h1>";

				// Make the connnection and then select the database.
					$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
			mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
			$query="SELECT * FROM subscriptions";

			$result=mysql_query($query)or die('Error querying the DB' . mysql_error());
		 
			$num=mysql_numrows($result);

			mysql_close();

			$i=0;
			
			$emailaddresses = '';
			
			if( $num == 0)
			{
				echo "There no email addresses in the DB currently";
			}
			else
			{
					echo "----------------------------------------------------------------------------------------------";
					while ($i < $num) 
					{
						$emailaddresses .= mysql_result($result,$i,'email_address');
						$emailaddresses .= ',';
						$i++;
					}

						echo "<br>";
						$activeUserId = $_SESSION['username'];

						echo $emailaddresses;
						echo "</br>";
						echo "</h3><br>----------------------------------------------------------------------------------------------";	
			}
		}	
		else
		{
			echo "<h1>Not authorized to send EMail!</h1>";
			echo "<br><br><br><center><img border='0' alt='' src='./balaji/images/b2.jpg' width='712' height='55' > </img><br></body></center></html>";
			exit;
		}
?>
		
	
		<br><br><br><h1>Send Bulk EMail</h1><br><br>
		<form action="sendbulkemail.php" method="post" >
		<div class="row"><label class="col1">Subject: </label><span class="col2"><input name="subject" class="input"></span><br><br> </div>
		<div class="row"><label class="col1">Bcc: </label><span >
		<TEXTAREA NAME="bcc" COLS=40 ROWS=6> <?php echo $emailaddresses; ?></TEXTAREA> </span> <br><br> </div>
   	    <div class="row"><label class="col1">Message: </label><span class="col2"></span> <br><br> </div>

		
<?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
//$sBasePath = $_SERVER['PHP_SELF'] ;
//$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('message') ;
$oFCKeditor->BasePath	= '/fckeditor/' ;
$oFCKeditor->Value		= '' ;
$oFCKeditor->Height=300;
$oFCKeditor->Width=900;
$oFCKeditor->Create() ;

		$activeUserId = $_SESSION['username'];
				if( $activeUserId == 'nchandra' )
				{
					echo "<br><input type='submit' value='Send Email'></form>";
				}
				else
				{
					$oFCKeditor->Value		= 'NOT AUTHORIZED TO SEND EMAIL!' ;
				}
?>
			<br><br><br>
		<center><img border="0" alt="" src="./balaji/images/b2.jpg" width="712" height="55" > </img><br>

	</body>
</center>
	
	</html>
