<?php
require_once ('./session.php'); // Connect to the database.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<!--  Created with the CoffeeCup HTML Editor 2008  -->
<!--           http://www.coffeecup.com/           -->
<!--        Brewed on 6/15/2009 9:45:51 PM         -->
<head>
  <title></title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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

<center><img border="0" alt="" src="./balaji/images/b1.jpg" width="707" height="111"> <br>

<?php include 'popupmenu.html' ?>


</center>
<div align="center"><img border="0" alt="" src="./balaji/images/bgr_m.jpg" width="228" height="211">
<img border="0" alt="" src="./balaji/images/fl_2.jpg" width="478" height="208"></div>
<br><br>

<table align="center" width="1090" border="0" cellpadding="0" cellspacing="0">


<td align="left" valign="top">


<br><br>
<table class="page" width="1400" border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="background-color:transparent;background-repeat:repeat-x;padding-top:0px;">

<div align="center">
<table align="center">
<tr>
	<td>

<TD valign="top" align="center">
<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr height="25"><td style="padding:0px 0px 0px 10px;">&nbsp;</td>
<td nowrap><span>SVTemple Colorado FAQs</span>

&nbsp;</td>
<td width="100%"></td></tr></table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
<tr><td style="padding:10px;" align="center">
<b>Q1. <p><strong><span style="font-size: 10pt; font-family: &quot;Times New Roman&quot;;">Why would I need to become a member in order to vote in the up coming elections for Board of Trustees?</span></strong></p></b><p>Answer:<br> The Board of Trustees represents all the members of the temple and act in their best interest. Like any organization, we believe that the members who have contributed and helped to build this temple should have a say in who gets elected to the Board of Trustees and represent their interests. The elections were held on November 17th, 2007.  All founding members of the temple are eligible to vote in these elections.  There are certain criteria that must be met to compete in the elections. Please review guidelines document under Donate Web Page for directions on how to become founding members and contest in the elections for Board of Trustees.</p>
<div style="width:100%;">
<br/>
<b>Q2. <p><strong><span style="font-size: 10pt; font-family: &quot;Times New Roman&quot;;">Is this temple in competition with Hindu Temple of Colorado?</span></strong></p></b><p>Answer:<br>No. This temple is not competing with Hindu Temple of Colorado or any other organization.  The Indian community has grown significantly over the last 10 years in the Rocky mountain region.  We believe there is enough support to build two temples.  As a matter of fact, SVTC has not only secured 8 acres of land for the temple construction, it also has obtained over $500K in commitments since May 2007.  The goal of Sri Venkateswara Temple of Colorado is to build a temple for Lord Venkateswara per agama sasthras.</p>
<div style="width:100%;">
<br />
<b>Q3. <p>Is this a separate temple?</p></b></div><p>Answer:<br>Yes. This is a separate effort and not affiliated with the Hindu Temple of the Rockies.</p>
<div style="width:100%;">
<br />
<b>Q4. <p style="text-align: justify;" ><strong><span style="">Will I need to make a sizable contribution to become part of this temple?</span></strong></p></b><p>Answer:<br>No. Like any other organization in its infancy, SVTC needs contributions to build the temple.  In order to raise funds for the temple, the interim committee has set some guidelines to participate in the board of trustees’ elections, which includes contribution limits.  However, any one willing and interested are welcome to serve on one of the several committees (fund raising, architecture etc.).  The information about various committees will be communicated once the permanent board of trustees is in place.</p>
<div style="width:100%;">
<br />
<b>Q5. <p style="text-align: justify;" ><strong><span style="">Will SVTC be too far from my house/work area?</span></strong></p></b></div><p>Answer:<br>The site to build SVTC is located in Castle Rock.  The site can be reached by taking Founder Park Exit (Factory Outlet Malls) and going east for about 5 miles.  It is within 15 minutes drive from DTC area.  This site is donated to SVTC and consists of 8 acres nestled in the quaint location with Pikes Peak as the background.  The size of the land also provides great opportunity to expand in the future and build separate temples for other deities.</p>
<div style="width:100%;">
<br />
<b>Q6. <p style="text-align: justify;" ><strong><span style="">Is it true that SVTC will only house Lord Venkateswara on its premises?</span></strong></p></b><p>Answer:<br>No. The primary focus of the committee is to build a temple dedicated to Lord Venkateswara.  However, the committee has secured 8 acres of land in Castle Rock.  This will provide great opportunity to expand in the future.  Once the infrastructure is complete and temple is built for Lord Venkateswara, the committee is planning to build separate temples for other deities based on the interest from the community.</p>
<div style="width:100%;">
<br />
<b>Q7. <p style="text-align: justify;"><strong style="">What is the vision of the Sri Venkateswara Temple of Colorado?</span></strong></p></b><p>Answer:<br>Our philosophy and vision is to build Sri Venkateswara Temple in Colorado, in the background of mighty Rockies with strict adherence to the principles of AGAMA SASHTRAS as described in Vedas.  It is also our philosophy and vision to install the statues of Lord VENKATESWARA along with SRI DEVI and BHUDEVI, with strict adherence to Agama Sashtras, under the directives of experts from SRI VENKATESWAR TEMPLE OF TIRUPATHI AND TIRUMALA.<br><br>
The temple will adopt and follow the various procedures of worship and activities on day to day basis with strict adherence to the principles and traditions by following the agama sashtras and the directives from the experts at TTD DEVASTHANAMS, TIRUPATHI. In other words, simply put we would like to create the same atmosphere as we have experienced when we visited Sri VENKATESWARA TEMPLE IN TIRUPATHI.<br><br>
We invite the like minded people who understand and believe in these principles and philosophies to join the hands with us as the founding members of this divine institution.  Again we would like to stress how gratifying experience it will be to participate in this divine cause and once in a life time opportunity to be part of the team of founding members.</p>
<div style="width:100%;">
<br />
<b>Q8. <p>Why Venkateswara temple ?</p></b><p>Answer:<br>Sri Venkateswara Temple has been long cherished dream of people of Colorado. The desire of the community is to have a temple that is reminiscent of the rituals and poojas performed at Tirumala Tirupati Devastanam (TTD). As per Agama Sasthras, Lord Venkateswara can be the only main deity in a Venkateswara temple.</p>
<div style="width:100%;">
</td></tr></table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td>
&nbsp;&nbsp;</td><td align="right">
&nbsp;</td></tr></table>
</TD>

    </td>
</tr>

</table>
</div>


</center>

</td>


</tr>

</table>

</td>
</table>
<br><br><br>

<center><img border="0" alt="" src="./balaji/images/b2.jpg" width="712" height="55" > </img><br>
</body>
</html>

