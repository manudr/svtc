<?php
require_once ('./session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sri Venkateswara temple</title>
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
// Copyright 2006-2007 javascript-array.com

var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 

</script>
</head>

<body>
<div id="outerBg">
<div id="pageContainer">
<?php include 'resources\includes\header.html' ?>
<?php include 'resources\includes\popupmenu.html' ?>
<?php include 'resources\includes\topbanner.html' ?>


<div class="contentContainer">
<?php include 'resources\includes\leftmenu.html' ?>
<div class="rightBg" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">Photos</td>
  </tr>

<!--
<tr>
<td align="left" valign="top" style="padding-left:10px;">
    <br/>

<b>Please visit the following link to view the TV9 presentation on Dwajasthambha Pratista celebrations.</b>
<br/>
	<span style="white-space:nowrap"><a href="http://www.youtube.com/watch?v=HqpPWO2g__k" target="_blank">http://www.youtube.com/watch?v=HqpPWO2g__k</a>
<br/> <br/>
</td> </tr>
-->


  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<b>Please click on the below link to see all the Albums of SV Temple Colorado Events.</b>
	<br /><br />
	<tr>

    <td align="left" valign="top" style="padding-left:200px;">
	<a target="_blank" href="//get.google.com/albumarchive/101238918833592901576?source=pwa" style="font-size:14px;font-weight:bold;color:#FF9900">Photo Albums</a>
	<br />
	<br />
    </td>
   </tr>
	</td>
  </tr>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>
