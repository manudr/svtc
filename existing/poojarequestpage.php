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




<font color="#0000ff">Enter Pooja Information:</font> </font> </center><br>



<center>




<left><font size="2">Enter all fields marked in red<br>
</font>

<!--
   <div class="roundbottom">
	 <img src="bl.gif" alt=""
	 width="25" height="25" class="corner"
	 style="display: none" />
   </div>
</div>
-->

<form action="pooja.php" method="post">
<div class="row"><label class="col1">Username of sponsor: </label><span class="col2"><input name="username" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">Is this pooja for yourself?</label><span class="col2"><input name="pooja_is_for_self" type="radio" value="Y" checked>Yes<input name="pooja_is_for_self" type="radio" value="N">No</span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">Type of Pooja</label><span class="col2"><select name="service_id" class="dropdown"><option value="1">Abhishekam</option>
<option value ="2">Archana</option>
<option value ="3">Engagement</option>
<option value ="4">Flower Offering</option>
<option value ="5">Ground breaking</option>
<option value ="6">Gruhapravesam</option>
<option value ="7">Kalyana Utsavam</option>
<option value ="8">Laksharchana</option>
<option value ="9">Namakaranam/Annaprasana/Hair offering/Aksharabhyasam</option>
<option value ="10">Punyaha Vachanam / Cradle Ceremony</option>
<option value ="11">Sahasranamarchana</option>
<option value ="12">Satyanarayana Swamy Pooja</option>
<option value ="13">Seemantham (Baby showers)</option>
<option value ="14">Sravana Naksh</option>
<option value ="15">Upanayanam/Poonal</option>
<option value ="16">Vahana Pooja</option>
<option value ="17">Vidya Ganapathi Smoohika Pooja</option>
<option value ="18">Wedding</option>
<option value ="19">Homam - Ganesh</option>
<option value ="20">Homam - Lakshmi</option>
<option value ="21">Homam - Navagraha</option>
<option value ="22">Homam - Sudarsana</option>
<option value ="23">Homam - Sri Venkateswara</option>
<option value ="24">1st birthday Ayush homam</option>
<option value ="25">60/70/80th birthday</option>
<option value ="26">Last rites (funeral)</option>
<option value ="27">10/11/12 day ceremony (for 3 days)</option>
<option value ="28">Hiranya Shradham - Thath Dinam - Abdheekam</option>
</select></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"><br><br> </div>
<div class="row"><label class="col1">Date(YYYY-MM-DD): </label><span class="col2"><input name="date" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">Time(HH24:MI): </label><span class="col2"><input name="time" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">Form of payment:</label><span class="col2"><select name="payment_id" class="dropdown"><option value="1">Cash</option>
<option value="2">Credit Card</option>
<option value="3">Check</option>
<option value ="4">Debit Card</option>
<option value="5">Major Donor</option>
<option value ="6">Prior Credit</option>
</select></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"><br><br><br> </div>
<div class="row"><label>Enter details of person for whom the pooja is to be performed: </label><br><br><br> </div>
<div class="row"><label class="col1">First Name: </label><span class="col2"><input name="firstname" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">Middle Name: </label><span class="col2"><input name="middlename" class="input"></span> <br><br> </div>
<div class="row"><label class="col1">Last Name: </label><span class="col2"><input name="lastname" class="input"></span><img border="0" alt="" src="./balaji/images/required.gif" width="18" height="14"> <br><br> </div>
<div class="row"><label class="col1">Gothram: </label><span class="col2">
<select name="gothram" size="1" class="dropdown">
<option value="0" selected> </option>
	<option value="15">AATHREYA</option>
	<option value="16">AATHREYASA</option>
	<option value="17">AGASTHIYA MAGURISHI</option>
	<option value="18">AGASTHYA MAHARISHI</option>
	<option value="19">AHTREYA</option>
	<option value="20">AINAKULA</option>
	<option value="5">AJWANTHA</option>
	<option value="21">AKSHANTHALA</option>
	<option value="22">ANGIRAS</option>
	<option value="23">ARANMANAIYAR</option>
	<option value="24">ARUTLA</option>
	<option value="25">ATHIRAYA</option>
	<option value="26">ATHRAY</option>
	<option value="27">ATHRAYA</option>
	<option value="28">ATHRESYAM</option>
	<option value="29">ATHREYA</option>
	<option value="30">ATRAIAH</option>
	<option value="31">ATRAYA</option>
	<option value="32">ATRAYASA</option>
	<option value="33">ATRESHA</option>
	<option value="34">ATRESYA</option>
	<option value="35">ATREYA</option>
	<option value="36">ATREYASA</option>
	<option value="37">ATREYASYA</option>
	<option value="38">ATRI</option>
	<option value="39">AYODHYA</option>
	<option value="40">AYOTHIA</option>
	<option value="41">BADHARAYANA</option>
	<option value="42">BADHRAVGA</option>
	<option value="43">BALA</option>
	<option value="44">BALISETLA</option>
	<option value="12">BARADWAJA</option>
	<option value="6">BARAWAJA</option>
	<option value="45">BATHSYA</option>
	<option value="46">BHADADWAJAM</option>
	<option value="47">BHAKADWAJA</option>
	<option value="48">BHARABWAJA</option>
	<option value="49">BHARADADWAJA</option>
	<option value="50">BHARADHWAJA</option>
	<option value="51">BHARADVAJASA</option>
	<option value="52">BHARADWAGA</option>
	<option value="53">BHARADWAJ</option>
	<option value="54">BHARADWAJA</option>
	<option value="55">BHARADWAJAM</option>
	<option value="56">BHARADWAJASA</option>
	<option value="57">BHARADWAJU</option>
	<option value="58">BHARATHRAJ</option>
	<option value="59">BHARATHWAJA</option>
	<option value="60">BHARATWAJ</option>
	<option value="61">BHARATWAJA</option>
	<option value="62">BHARATWAJAM</option>
	<option value="63">BHARDWAJ</option>
	<option value="64">BHARDWAJA</option>
	<option value="65">BHARDWAJASA</option>
	<option value="66">BHARDWAZA</option>
	<option value="67">BHARGAVA</option>
	<option value="68">BHARHWJAM</option>
	<option value="69">BHASRADWAJA</option>
	<option value="70">BHASVANTHA BRAMHARSHI</option>
	<option value="71">BHRADWAJA</option>
	<option value="72">BHUDHANAKULA</option>
	<option value="73">BOWRAGUSYAM</option>
	<option value="74">BRAMBHANI</option>
	<option value="75">BRINGI MAHARISHI</option>
	<option value="76">BRUGAMAHARSHI</option>
	<option value="77">BUDANAKULA</option>
	<option value="78">BUDHANAKULA</option>
	<option value="79">CHANDILYA</option>
	<option value="80">CHANDRA KULA</option>
	<option value="81">CHANDRA MAGARISHI</option>
	<option value="82">CHANDROLA</option>
	<option value="83">CHANNAMALLA</option>
	<option value="84">CHARUKUNOLA</option>
	<option value="85">CHARUKUNOLLA</option>
	<option value="86">CHENAMALLA</option>
	<option value="87">CHERUKUNOLA</option>
	<option value="88">CHERUKUNOLLA</option>
	<option value="89">CHERUKUNULLA</option>
	<option value="90">CHIKITASA</option>
	<option value="91">CHINNANALLA</option>
	<option value="93">DAAMAL</option>
	<option value="94">DANYALA</option>
	<option value="95">DASAMAYI</option>
	<option value="96">DASANOLLA</option>
	<option value="97">DASHINOLA</option>
	<option value="98">DASUNULLA</option>
	<option value="99">DESATLA</option>
	<option value="100">DESHATLA</option>
	<option value="101">DESOTLA</option>
	<option value="102">DHANAJAYA</option>
	<option value="103">DHANANJAY</option>
	<option value="104">DHANUMJAYA</option>
	<option value="105">DHANUNJAYA</option>
	<option value="106">DHANYANTARI</option>
	<option value="107">DHARSIYAR</option>
	<option value="108">DHAVALAVAR</option>
	<option value="109">DHOUMYA</option>
	<option value="110">DOSANALA</option>
	<option value="111">DOSANOLA</option>
	<option value="112">ELIKETLA</option>
	<option value="113">ERAN</option>
	<option value="114">ERIKONULLA</option>
	<option value="116">GACHCHAKAYALU</option>
	<option value="117">GANAKA MAHARISHI</option>
	<option value="118">GANAPATHALA</option>
	<option value="119">GARG</option>
	<option value="120">GARGA</option>
	<option value="121">GARGAYA</option>
	<option value="122">GARGESHA</option>
	<option value="123">GARGEYASA</option>
	<option value="124">GARGYA</option>
	<option value="125">GAUTAM</option>
	<option value="126">GAUTAMA</option>
	<option value="127">GAUTHAM</option>
	<option value="128">GAUTHAMA</option>
	<option value="129">GAUTHAMASA</option>
	<option value="130">GAUTHAMASYA</option>
	<option value="131">GOGINOLLA</option>
	<option value="13">GOGUNOLLA</option>
	<option value="10">GONTAKULA</option>
	<option value="132">GOPALA</option>
	<option value="133">GORUGILLA</option>
	<option value="134">GOTINELA</option>
	<option value="135">GOTTIPALLA</option>
	<option value="136">GOUTHAMA</option>
	<option value="137">GOUTHAMASA</option>
	<option value="138">GOWTHAMA</option>
	<option value="139">GOWTINYA</option>
	<option value="140">GRANDHASILA</option>
	<option value="141">GRANDHISILA</option>
	<option value="142">GRANTHASILA</option>
	<option value="143">GURAJALA</option>
	<option value="144">GURUJALA</option>
	<option value="145">HARIDASA</option>
	<option value="146">HARIDHASA</option>
	<option value="147">HARITA</option>
	<option value="148">HARITASA</option>
	<option value="149">HARITHA</option>
	<option value="11">HARITHASA</option>
	<option value="150">HARITHYSIA</option>
	<option value="151">HARITRASA</option>
	<option value="152">HAROCHARLA</option>
	<option value="153">HAUSIKA</option>
	<option value="154">ICHVAKULA</option>
	<option value="155">INAGALA</option>
	<option value="156">INGALA</option>
	<option value="157">INKULA</option>
	<option value="158">INUKULA</option>
	<option value="159">ISHVAKULA</option>
	<option value="160">JAIN</option>
	<option value="161">JALAKARA</option>
	<option value="162">JAMABAGNI</option>
	<option value="163">JAMADAGNI</option>
	<option value="164">JAMDAGNI</option>
	<option value="165">JANAGULA</option>
	<option value="166">JANAKANULLA</option>
	<option value="167">JANARDHANA</option>
	<option value="168">JANMARISHI</option>
	<option value="169">JANNAVULA</option>
	<option value="170">JAYADHARSHI</option>
	<option value="171">JILAKARA</option>
	<option value="172">KAASHYAPASA</option>
	<option value="173">KABHI</option>
	<option value="174">KADIMELLA</option>
	<option value="175">KAILAKATLA</option>
	<option value="176">KALEPALA</option>
	<option value="177">KALICHRLA</option>
	<option value="178">KALIKUNDAM</option>
	<option value="179">KALLILIPATI</option>
	<option value="180">KAMAKAYANASA</option>
	<option value="181">KANCHARLA</option>
	<option value="182">KANUMANOLLA</option>
	<option value="183">KANVASA</option>
	<option value="184">KAPIL</option>
	<option value="185">KAPILA MAHARISHI</option>
	<option value="186">KARANALA</option>
	<option value="187">KASAYAP</option>
	<option value="188">KASHABA</option>
	<option value="189">KASHAP</option>
	<option value="190">KASHIABA</option>
	<option value="1">KASHYAP</option>
	<option value="191">KASHYAPA</option>
	<option value="192">KASHYAPA MAHARISH</option>
	<option value="193">KASHYAPAS</option>
	<option value="8">KASHYAPASA</option>
	<option value="194">KASHYL</option>
	<option value="195">KASHYPA</option>
	<option value="196">KASHYUP</option>
	<option value="197">KASYAP</option>
	<option value="198">KASYAPA</option>
	<option value="199">KASYAPAM</option>
	<option value="200">KASYAPASA</option>
	<option value="201">KASYAPASYA</option>
	<option value="202">KASYPASA</option>
	<option value="203">KAUNDANYASA</option>
	<option value="204">KAUNDINYA</option>
	<option value="205">KAUNDINYA ANUSHAM</option>
	<option value="206">KAUNDINYASA</option>
	<option value="207">KAUNDIYA</option>
	<option value="208">KAUSHA</option>
	<option value="209">KAUSHIK</option>
	<option value="210">KAUSHIKA</option>
	<option value="211">KAUSHIKAM</option>
	<option value="212">KAUSHIKAMAHARISHA</option>
	<option value="213">KAUSIKA</option>
	<option value="214">KAUSIKASA</option>
	<option value="215">KAUSIYA</option>
	<option value="216">KAVATAKULA</option>
	<option value="217">KISHINCHANDANI</option>
	<option value="218">KOKANI</option>
	<option value="219">KOLLATLA</option>
	<option value="220">KOMARENDRA</option>
	<option value="221">KOMARISHATLU</option>
	<option value="222">KONDAL</option>
	<option value="223">KONDINASYA</option>
	<option value="224">KONDROLLA</option>
	<option value="225">KOSHIKA</option>
	<option value="226">KOUDANYA</option>
	<option value="227">KOUNDANIYASA</option>
	<option value="228">KOUNDANSYA</option>
	<option value="229">KOUNDANYA</option>
	<option value="230">KOUNDANYAM</option>
	<option value="231">KOUNDANYASA</option>
	<option value="232">KOUNDINSHA</option>
	<option value="233">KOUNDINSYA</option>
	<option value="234">KOUNDINYA</option>
	<option value="235">KOUNDINYAM</option>
	<option value="236">KOUNDINYAS</option>
	<option value="7">KOUNDINYASA</option>
	<option value="237">KOUSHIKA</option>
	<option value="238">KOUSHIKASA</option>
	<option value="239">KOUSIGASA</option>
	<option value="240">KOUSIK</option>
	<option value="241">KOUSIKA</option>
	<option value="242">KOUSIKAM</option>
	<option value="243">KOWISIKI</option>
	<option value="244">KOWNDINYA</option>
	<option value="245">KOWNDINYASA</option>
	<option value="246">KOWSIKA</option>
	<option value="247">KOWSIKE</option>
	<option value="248">KSHATRIYA</option>
	<option value="249">KUDIGULA MAHARISHI</option>
	<option value="250">KUKELUDAYAI</option>
	<option value="251">KUKKUTA</option>
	<option value="252">KUMARAMAGARISHI</option>
	<option value="253">KUMBALA</option>
	<option value="254">KUMBHALA</option>
	<option value="255">KUTHSASA</option>
	<option value="256">KUTHSATHA</option>
	<option value="257">KUTSYA</option>
	<option value="258">LOHANA GOTHRAM</option>
	<option value="259">LOHITA KAUSHIKA</option>
	<option value="260">LOHITAJA</option>
	<option value="261">MAASHANTHAKULA</option>
	<option value="262">MAAVELLA</option>
	<option value="263">MADALA</option>
	<option value="264">MADANUVARI</option>
	<option value="265">MADAREDDY</option>
	<option value="266">MADHUNOLA</option>
	<option value="267">MADHUPALA</option>
	<option value="268">MAHARAJA</option>
	<option value="269">MAMILLA</option>
	<option value="270">MANAMADAYAR</option>
	<option value="271">MANDAKULA</option>
	<option value="272">MANDHALA</option>
	<option value="273">MANDOWYA</option>
	<option value="274">MANIPALA</option>
	<option value="275">MANNAVA</option>
	<option value="276">MAREDLA</option>
	<option value="277">MARGAMMAHARISHI</option>
	<option value="278">MARKANDAIAH</option>
	<option value="2">MARKANDEYA</option>
	<option value="279">MARKANDEYN</option>
	<option value="280">MARKANDEYULU</option>
	<option value="281">MARKANTEYA</option>
	<option value="282">MARKHANDEYA</option>
	<option value="283">MARNGAGHEESHAM</option>
	<option value="284">MAROTLA</option>
	<option value="285">MASANTHAKULA</option>
	<option value="286">MASHANUTULA</option>
	<option value="287">MAUDGALYA</option>
	<option value="288">MDUNAKULA</option>
	<option value="289">MIDHUNAKULA</option>
	<option value="290">MIDUNAKULS</option>
	<option value="291">MITHONAKULA</option>
	<option value="292">MITHUNAKULA</option>
	<option value="293">MITHUNUKULA</option>
	<option value="294">MOCHERLA</option>
	<option value="295">MOSNOLLA</option>
	<option value="296">MOUDGALYAM</option>
	<option value="297">MOUNA BARGAVA</option>
	<option value="298">MOUNABHARGAVASA</option>
	<option value="299">MUCHUKUNDA</option>
	<option value="300">MUDDANDLA</option>
	<option value="301">MUDGALASA</option>
	<option value="302">MUDHUNOLLA</option>
	<option value="303">MUDHUNULA</option>
	<option value="304">MUDINOLLA</option>
	<option value="305">MUDIRAJASA</option>
	<option value="306">MUDULOLA</option>
	<option value="307">MUDVIMAHAMUNI</option>
	<option value="308">MULAKULA</option>
	<option value="309">MULLATLA</option>
	<option value="310">MUNIGOLLA</option>
	<option value="311">MURAKULA</option>
	<option value="312">MUSALLANEELLA</option>
	<option value="313">NAGASYA</option>
	<option value="314">NAGAVALLI</option>
	<option value="315">NAGOLA</option>
	<option value="316">NAGULA</option>
	<option value="317">NAIDHRVAKASYAPA</option>
	<option value="318">NAIPRUBAKASHYAPA</option>
	<option value="319">NAITHRA KAPASHYA</option>
	<option value="320">NAITHRAPA KASHAPA</option>
	<option value="321">NAITHREE KASHYAPA</option>
	<option value="322">NAITHREYA KASHYAPA</option>
	<option value="323">NAITHREYA KASYAPA</option>
	<option value="324">NAITHREYAKASHYAPA</option>
	<option value="325">NAITHRUPA KASHYAPA</option>
	<option value="326">NAITHRUPAKASHYAP</option>
	<option value="327">NAITHRUVA KASHYAPA</option>
	<option value="328">NAITHRUVAKASHYAPA</option>
	<option value="329">NAITRUPA KASYAPA</option>
	<option value="330">NANDHI VARDHAN</option>
	<option value="331">NANDI</option>
	<option value="332">NANDIVAHANA</option>
	<option value="333">NAYTHRUPA KASHYAPA</option>
	<option value="334">NITHRAPAKASHYABA</option>
	<option value="335">NITHRAPAKASYPA</option>
	<option value="336">NITHRUVA</option>
	<option value="337">NITHRUVA KASHYAPPA</option>
	<option value="338">NITRALLA</option>
	<option value="339">NITTALLA</option>
	<option value="340">OGRALA</option>
	<option value="341">PAALAVALLI</option>
	<option value="342">PAAPALAKULA</option>
	<option value="343">PACHAPALA</option>
	<option value="344">PACHILLA</option>
	<option value="345">PADAGISHILA</option>
	<option value="346">PAGADAL</option>
	<option value="347">PAGADASILA</option>
	<option value="348">PAGADIPALA</option>
	<option value="349">PAGATIPALA</option>
	<option value="350">PAGIDIKULA</option>
	<option value="4">PAGIDIPALA</option>
	<option value="351">PAGIDIPALLA</option>
	<option value="352">PAIDEPALE</option>
	<option value="353">PAIDIPADU</option>
	<option value="354">PAIDIPALA</option>
	<option value="355">PAIDIPALLA</option>
	<option value="356">PAITAPALYAM</option>
	<option value="357">PAITIKULA</option>
	<option value="358">PALALLA</option>
	<option value="3">PALAVELLI</option>
	<option value="359">PALETTI</option>
	<option value="360">PAMIDAPLLA</option>
	<option value="361">PAMIDI CHUKKALA</option>
	<option value="362">PAMIDICHUKKALA</option>
	<option value="363">PAMIDIKOLA</option>
	<option value="364">PAMIDIKULA</option>
	<option value="365">PAMIDIMUKKALA</option>
	<option value="366">PAMIDIPADLA</option>
	<option value="367">PAMIDIPALA</option>
	<option value="368">PAMIDIPALLA</option>
	<option value="369">PAMIDISUKLA</option>
	<option value="370">PANAPUVALU</option>
	<option value="371">PANDAVARAYA</option>
	<option value="372">PANUKUNOOLLA</option>
	<option value="373">PAPAL</option>
	<option value="374">PAPALA</option>
	<option value="375">PAPPALA</option>
	<option value="376">PARASARA</option>
	<option value="377">PARASHAR</option>
	<option value="378">PARASHARA</option>
	<option value="379">PARASHARAM</option>
	<option value="380">PARASHARASA</option>
	<option value="381">PARASHIVA</option>
	<option value="382">PARASURA</option>
	<option value="383">PARUDRA</option>
	<option value="384">PASAPUNOLLA</option>
	<option value="385">PASUPULA</option>
	<option value="386">PASUPULETI</option>
	<option value="387">PASUPUNETI</option>
	<option value="388">PASUPUNITI</option>
	<option value="389">PASUPUNOLLA</option>
	<option value="390">PASUPUNUTI</option>
	<option value="391">PATARALA</option>
	<option value="392">PAUCHIKULA</option>
	<option value="393">PAVIDIPAALA</option>
	<option value="394">PEMPULLA</option>
	<option value="597">PENDLIKULA</option>
	<option value="395">PENNULA</option>
	<option value="396">PENUBAMULA</option>
	<option value="397">PILIGILIMAHARISHI</option>
	<option value="398">PIPALA</option>
	<option value="399">POGUNOLA</option>
	<option value="400">POGUNOLLA</option>
	<option value="401">POGUNOOLA</option>
	<option value="402">POGUNULLA</option>
	<option value="403">POLASYASA</option>
	<option value="404">PONAGASELA</option>
	<option value="405">PONNAPOOLU</option>
	<option value="406">PONUKUNOLLA</option>
	<option value="407">POTHINEEDU</option>
	<option value="408">POUCCHAKULA</option>
	<option value="409">POURAGUTSHA</option>
	<option value="410">PROUSCHAKULA</option>
	<option value="411">PULIGOLLA</option>
	<option value="412">PULIPALLA</option>
	<option value="413">PULIVETI</option>
	<option value="414">PUNAGASALA</option>
	<option value="415">PUNAGASEELA</option>
	<option value="416">PUNAGASHEELA</option>
	<option value="417">PUNAGASILA</option>
	<option value="418">PUNAGASITA</option>
	<option value="419">PUNNALA</option>
	<option value="420">PURVAPUTHSA</option>
	<option value="421">PUSPULETI</option>
	<option value="422">PUTNALA</option>
	<option value="423">PYDIPALA</option>
	<option value="424">PYDIPALLA</option>
	<option value="425">RACHANALA</option>
	<option value="426">RACHANOLLA</option>
	<option value="427">RAGHU NUULA</option>
	<option value="428">RAJAPALA</option>
	<option value="429">RAPOLA</option>
	<option value="430">RATHETHRA</option>
	<option value="431">RAVIKULA</option>
	<option value="432">RAVIPALA</option>
	<option value="433">RECHARLA</option>
	<option value="434">RECHERLA</option>
	<option value="435">REDDIPALLI</option>
	<option value="436">REJETLA</option>
	<option value="437">RENTAKULA</option>
	<option value="438">RENUKA</option>
	<option value="439">RISHI</option>
	<option value="440">RONAKARUSHI</option>
	<option value="441">SADAMATCHANA</option>
	<option value="442">SADANANDA</option>
	<option value="443">SADETI</option>
	<option value="444">SANDALISYA</option>
	<option value="445">SANDILYASA</option>
	<option value="446">SANGIRITHI</option>
	<option value="447">SANGKRITHI</option>
	<option value="448">SANKRITHI</option>
	<option value="449">SANKUPALA</option>
	<option value="450">SANSHU</option>
	<option value="451">SARG</option>
	<option value="452">SATAMARSHANA</option>
	<option value="453">SATHAMARSHANA</option>
	<option value="454">SATHANUDAI</option>
	<option value="455">SATHAPAALA</option>
	<option value="456">SAVARNA</option>
	<option value="457">SAVITRAMAHARSHI</option>
	<option value="458">SEMBARAN KILAR</option>
	<option value="459">SERVARAYAN</option>
	<option value="460">SETTY</option>
	<option value="461">SHADAMAKSHANA</option>
	<option value="462">SHADAMARSHANA</option>
	<option value="463">SHADAMARSHANAM</option>
	<option value="464">SHADAMARSHNA</option>
	<option value="465">SHADAMASHNA</option>
	<option value="9">SHADAVARSHANA</option>
	<option value="466">SHAMASTRA</option>
	<option value="467">SHANDILYA</option>
	<option value="468">SHANKU</option>
	<option value="469">SHANTIYA</option>
	<option value="470">SHATAMARSHANA</option>
	<option value="471">SHATAMARSHANAM</option>
	<option value="472">SHATAMASHANA</option>
	<option value="473">SHIV</option>
	<option value="474">SHIVA</option>
	<option value="475">SHOKAL</option>
	<option value="476">SHREEVATSA</option>
	<option value="477">SHRILAKULA</option>
	<option value="478">SIKINOLLA</option>
	<option value="479">SILUKETI</option>
	<option value="480">SIVA</option>
	<option value="481">SIVA GOTHRAM</option>
	<option value="482">SIVA/AYULYAM/HASTHAM</option>
	<option value="483">SREEVATSA</option>
	<option value="484">SREEVATSAM</option>
	<option value="485">SRI VATSA</option>
	<option value="486">SRIHARI</option>
	<option value="487">SRILAKULA</option>
	<option value="488">SRIPALA</option>
	<option value="489">SRIRISHI</option>
	<option value="490">SRIVASTA</option>
	<option value="491">SRIVATHSA</option>
	<option value="492">SRIVATHSAM</option>
	<option value="493">SRIVATSA</option>
	<option value="494">SRIVATSAM</option>
	<option value="495">SRIVATSASA</option>
	<option value="496">SRIVATSAVA</option>
	<option value="497">SRIVETSA</option>
	<option value="498">SUBHA</option>
	<option value="499">SULALA</option>
	<option value="500">SUPARNASA</option>
	<option value="501">SUPARNASARUSHI</option>
	<option value="502">SURANADI</option>
	<option value="503">SURYAKULA</option>
	<option value="504">SUSHAALA</option>
	<option value="505">SWATANTRA KAPIRASA</option>
	<option value="506">TANGELLA</option>
	<option value="507">TANGUTORE</option>
	<option value="508">THANIPALA</option>
	<option value="509">THARAGAYANA</option>
	<option value="510">THATIPALLA</option>
	<option value="511">THOUNDY</option>
	<option value="512">TOGOROTLA</option>
	<option value="513">TOTAKULA</option>
	<option value="514">TUPPALAKULA</option>
	<option value="515">UDITHYA</option>
	<option value="516">ULLATLA</option>
	<option value="596">UNKNOWN</option>
	<option value="517">UTTAMOJESA</option>
	<option value="518">VAADHULA</option>
	<option value="519">VAADHULASA</option>
	<option value="520">VAADULA</option>
	<option value="521">VAADULAM</option>
	<option value="522">VADGALYA</option>
	<option value="523">VADHOOLAM</option>
	<option value="524">VADHOOLASA</option>
	<option value="525">VADHULA</option>
	<option value="526">VADHULAM</option>
	<option value="527">VADOOLA</option>
	<option value="528">VADOOLAM</option>
	<option value="529">VADOOLYAM</option>
	<option value="530">VADULA</option>
	<option value="531">VADULAM</option>
	<option value="532">VADULLA</option>
	<option value="533">VADULYA</option>
	<option value="534">VAILASH</option>
	<option value="535">VALLETLA</option>
	<option value="536">VALLUTLA</option>
	<option value="537">VALLUTLE</option>
	<option value="538">VAMADEVA MAHARSHI</option>
	<option value="539">VANEGANTI</option>
	<option value="540">VANIKA VAISYA</option>
	<option value="541">VARADHANTU MAHARISHI</option>
	<option value="542">VARDHULASA</option>
	<option value="543">VARDULA</option>
	<option value="544">VARIKOLLA</option>
	<option value="545">VARSHINI GARGI</option>
	<option value="546">VARTHALA</option>
	<option value="547">VASHISHT</option>
	<option value="548">VASHISHTA</option>
	<option value="549">VASHISTA</option>
	<option value="550">VASISHT</option>
	<option value="551">VASISHTA</option>
	<option value="552">VASISHTASA</option>
	<option value="553">VASISHTHA</option>
	<option value="554">VASISTA</option>
	<option value="555">VASISTHA</option>
	<option value="556">VATHOOLA</option>
	<option value="557">VATHOOLAM</option>
	<option value="558">VATHULA</option>
	<option value="559">VATHULYA</option>
	<option value="560">VATSYA</option>
	<option value="561">VAZAVAR</option>
	<option value="562">VECHATLA</option>
	<option value="563">VELA SIRI</option>
	<option value="564">VELISETLA</option>
	<option value="565">VELLOTLA</option>
	<option value="566">VENAKULA</option>
	<option value="567">VENDIPALLA</option>
	<option value="568">VENKATAMAHARISHI</option>
	<option value="569">VENUGANTI</option>
	<option value="570">VESELLA</option>
	<option value="571">VILVARAYA</option>
	<option value="572">VINUKULA</option>
	<option value="573">VINUKULAM</option>
	<option value="574">VIPARLA</option>
	<option value="575">VIPPALA</option>
	<option value="576">VIPPARLA</option>
	<option value="577">VISHNU</option>
	<option value="578">VISHWAGYANA RISHI BHRAHMA</option>
	<option value="579">VISHWAMITRA</option>
	<option value="580">VISMATRA</option>
	<option value="581">VISWA</option>
	<option value="582">VISWAMITHRA</option>
	<option value="583">VISWAMITRA</option>
	<option value="584">VULLATLA</option>
	<option value="585">VULLUTLA</option>
	<option value="586">VYAGHRAPADHA MAHARIS</option>
	<option value="587">YANAGANTI</option>
	<option value="588">YANNOLLA</option>
	<option value="589">YASARUSHI</option>
	<option value="590">YEDUEDLLA</option>
	<option value="591">YEDUTLA</option>
	<option value="592">YELICHERLA</option>
	<option value="593">YENNESETLA</option>
	<option value="594">YERUTLA</option>
	<option value="595">YERUVAKA</option>
</select>
</span><br><br> </div>
<div class="row"><label class="col1">Nakshatram: </label><span class="col2">

<select name="nakshatram" class="dropdown">
<option value="0" selected> </option>
<option value="1">Ashvini   /   Aswini   /   Aswathi</option>
<option value="2">Bharani   /   Bharani   /   Bharani</option>
<option value="3">Krittika   /   Karthigai   /   Kaarthika</option>
<option value="4">Rohini   /   Rohini   /   Rohini</option>
<option value="5">Mrigashirsha   /   Mrigasheersham   /   Makeeryam</option>
<option value="6">Ardra   /Thiruvaathirai   /   Thiruvaathira</option>
<option value="7">Punarvasu   /   Punarpoosam   /   Punartham</option>
<option value="8">Pushyami   /   Poosam   /   Pooyyam</option>
<option value="9">Ashlesha   /   Aayilyam   /   Aayilyam</option>
<option value="10">Magha   /   Makam   /   Makham</option>
<option value="11">PoorvaPhalguni   /   Pooram   /   Pooram</option>
<option value="12">Uttara   /   Uthiram   /   Uthram</option>
<option value="13">Hasta   /   Hastham   /   Atham</option>
<option value="14">Chitra   /   Chithirai   /   Chitra</option>
<option value="15">Swaathi   /   Swaathi   /   Chothi</option>
<option value="16">Vishakha   /   Visaakam   /   Visaakam</option>
<option value="17">Anuradha   /   Anusham   /   Anizham</option>
<option value="18">Jyeshtha   /   Kettai   /   Thrikketta</option>
<option value="19">Mula   /   Moolam   /   Moolam</option>
<option value="20">Purva Ashadha   /   Pooraadam  /   Pooraadam</option>
<option value="21">Uttara Ashadha   /  Uthiraadam   /   Uthraadam</option>
<option value="22">Shravana   /Thiruvonam   /   Thiruvonam</option>
<option value="23">Shravishtha   /Avittam   /   Avittam</option>
<option value="24">Shatabhisha   /Sadhayam   /   Chathayam</option>
<option value="25">Purva Bhadrapada   /   Poorattathi   /   Poorattadhi</option>
<option value="26">Uttara Bhadrapada   /   Uthirattathi   /   Uthrattathi</option>
<option value="27">Revati   /   Revathi   /   Revathi</option>
<option value="Revathi">Revati   /   Revathi   /   Revathi</option>
</select>

</span><br><br><br> </div>
<input type="submit" value="Submit">
</center>
</form>

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

