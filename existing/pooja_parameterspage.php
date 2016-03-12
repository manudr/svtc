<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<!--  Created with the CoffeeCup HTML Editor 2008  -->
<!--           http://www.coffeecup.com/           -->
<!--        Brewed on 5/12/2009 3:34:43 PM         -->
<head>
  <title></title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>


<style type="text/css">
body{padding: 20px; text-align: center;
    font: 76% Verdana,Arial,sans-serif}
h1,h2,p{margin: 0 10px}
h1{font-size: 250%;color: #4396D8;letter-spacing: 1px}
h2{font-size: 200%;color: #FFF}
p{padding-bottom:1em}
h2{padding-top: 0.3em}
div#container{width:600px;margin: 0 auto;text-align:left}
div#content{background: #FFA500;width:600px;text-align:center}
div#navright{float: right;width:300px;background: #E5FFC4}
div#navright p{padding: 8px 0}
div#navright h2{font-size: 110%;color: #333}


div#navleft{float: left;width:200px;background: #E5FFC4}
div#navleft p{padding: 8px 0}
div#navleft h2{font-size: 110%;color: #333}


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
float: left; margin: 0px 2px 0px 0px; width: 120px; height: 42px; text-align: left; font: 16px/16px Times New Roman; color: blue;
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





</style>
<link rel="stylesheet" type="text/css" href="roundedcorners.css">
<link rel="stylesheet" type="text/css" href="roundedprint.css" media="print">
<script type="text/javascript" src="roundedcorners.js"></script>
<script type="text/javascript">
window.onload=function(){
if(!NiftyCheck())
    return;
Rounded("div#content","#fff","#FFA500");
Rounded("div#navright","#fff","#FFA500");
Rounded("div#navleft","#fff","#FFA500");
}
</script>



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


<body bgcolor="#D2B48C">

<?php

// Set the database access information as constants.
define ('DB_USER', 'svt3194');
define ('DB_PASSWORD', 'Svtemple2009');
define ('DB_HOST', 'svt3194.db.4273447.hostedresource.com');
define ('DB_NAME', 'svt3194');
?>


<center>
<table bgcolor="#FFFFFF">

<tr>
<td>

<center><img border="0" alt="" src="./balaji/images/b1.jpg" width="707" height="111">


<table valign=top cellpadding=0 cellspacing=0 width=710 border=0>
<tr><td bgcolor=#223344>
<table align=center class=tab><tr>
<td id=0 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu0",'0') style="color: #ff7777"> <b>Home</b></td>
<td style="color: #ffffff;"> &nbsp; || &nbsp; </td><td id=2 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu1",'2') style="color: #ff7777"> <b>Events</b></td>
<td style="color: #ffffff;"> &nbsp; || &nbsp; </td><td id=3 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu2",'3') style="color: #ff7777"> <b>Links</b></td>
<td style="color: #ffffff;"> &nbsp; || &nbsp; </td><td id=4 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu3",'4') style="color: #ff7777"> <b>Donate</b></td>
<td style="color: #ffffff;"> &nbsp; || &nbsp; </td><td id=5 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu4",'5') style="color: #ff7777"> <b>Services</b></td>
<td style="color: #ffffff;"> &nbsp; || &nbsp; </td><td id=6 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu5",'6') style="color: #ff7777"> <b>Contact Us</b></td>
<td style="color: #ffffff;"> &nbsp; || &nbsp; </td><td id=6 align=center onmouseout=btnTimer() onmouseover=showLayer("Menu5",'6') style="color: #ff7777"> <b>

</b></td>
</tr></table>

<div id=Menu0 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
<table bgcolor=#ffeecc cellspacing=0 cellpadding=0 style="border-collapse: collapse;">
<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="mission.php"> &nbsp;Mission &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="bot.php"> &nbsp;Board Of Trustees &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="committees.php"> &nbsp;Committees &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="newsletters.php"> &nbsp;Newsletters &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="elections.php"> &nbsp;Elections &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="faq.php"> &nbsp;FAQ &nbsp;</a> &nbsp; &nbsp;</td></tr>

</table></div>


<div id=Menu1 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
<table bgcolor=#ffeecc cellspacing=0 cellpadding=0 style="border-collapse: collapse;">

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="photos.php"> &nbsp;Photos &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="calendar.php"> &nbsp;Calendar &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="upcomingevents.php"> &nbsp;Upcoming Events &nbsp;</a> &nbsp; &nbsp;</td></tr>

</table></div>


<div id=Menu2 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
<table bgcolor=#ffeecc cellspacing=0 cellpadding=0 style="border-collapse: collapse;">

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="tirumala.php"> &nbsp;Tirumala &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="news.php"> &nbsp;News &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="hinduism.php"> &nbsp;Hinduism &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="documents.php"> &nbsp;Documents &nbsp;</a> &nbsp; &nbsp;</td></tr>

</table></div>


<div id=Menu3 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
<table bgcolor=#ffeecc cellspacing=0 cellpadding=0 style="border-collapse: collapse;">

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="pledgeform.php"> &nbsp;Pledge Form &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="guidelines.php"> &nbsp;Guidelines &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="onlinedonation.php"> &nbsp;Online Donation &nbsp;</a> &nbsp; &nbsp;</td></tr>

</table></div>

<div id=Menu4 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
<table bgcolor=#ffeecc cellspacing=0 cellpadding=0 style="border-collapse: collapse;">

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="priestservices.php"> &nbsp;Priest Services &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="listofpoojas.php"> &nbsp;List of Poojas&nbsp;</a> &nbsp; &nbsp;</td></tr>

</table></div>


<div id=Menu5 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
<table bgcolor=#ffeecc cellspacing=0 cellpadding=0 style="border-collapse: collapse;">

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="contactinfo.php">&nbsp;Information &nbsp;</a> &nbsp; &nbsp;</td></tr>

<tr height=25 onmouseout=menuOut(this,'#ffeecc') onmouseover=menuOver(this,'#FFFFFF')>
<td bgcolor=#223344>&nbsp; &nbsp;</td><td align=left>
<a class=asd href="feedback.php"> &nbsp;Feedback &nbsp;</a> &nbsp; &nbsp;</td></tr>


</table></div>


</td></tr></table>


</center>
<div align="center"><img border="0" alt="" src="./balaji/images/bgr_m.jpg" width="228" height="211">
<img border="0" alt="" src="./balaji/images/fl_2.jpg" width="478" height="208"></div>
<br>

<!-- Start of FORM -->


<center>
<div id="container">

<div id="content">


<table bgcolor="#FFA500">

<tr>
<td>


<center>





<img border="0" alt="" src="./balaji/images/icon_users_32px.gif" width="32" height="32"><font size="4">




<font color="#0000ff">User Login Page</font> </font> </center><br>



<center>




<left><font size="2">*Note: Membership to this portal is Public.
Once your account information has been submitted, <p>you will be immediately granted access to the portal environment.All fields marked with red arrow are required.<br>
</font>

<form  action="pooja_report.php" method="post">

<div class="row"><label class="col1">Start Date (MM/DD/YYYY): </label><span class="col2"><input name="startdate" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">End Date (MM/DD/YYYY): </label><span class="col2"><input name="enddate" class="input" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<input type="submit" value="Login">
</center>

</form><!-- End of FORM -->

</td>
</tr>


</table>
</div>
</div>
</td>
</tr>


</table>


</center>





<!--
<table align="center" width="1090" border="0" cellpadding="0" cellspacing="0">


<td align="left" valign="top">


<br><br>
<table class="page" width="1400" border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="background-color:transparent;background-repeat:repeat-x;padding-top:0px;">

<div align="center">


</div>


</center>

</td>


</tr>

</table>

</td>
</table>
-->



</body>
</html>

