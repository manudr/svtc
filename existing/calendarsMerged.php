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
    <td width="226%" align="left" valign="top" class="headingmain_txt">All Calendars Merged</td>
  </tr>
  <tr>
		<td> <br /> </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
		<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=svtempleofco%40gmail.com&amp;color=%23875509&amp;src=dfsfcm65hoqppdnhc9fdd5nq4g%40group.calendar.google.com&amp;color=%23528800&amp;src=qa88jgfo2kv6dh34g47i5cepko%40group.calendar.google.com&amp;color=%2323164E&amp;src=0kveo67d3he4vkgfvhgu82l41g%40group.calendar.google.com&amp;color=%23B1365F&amp;src=3o1ojgh0em741ae5vurlmcbf84%40group.calendar.google.com&amp;color=%23711616&amp;src=frp9dkf77kqeqbg3d5q0irend8%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FDenver" style="border-width:0" width="650" height="600" frameborder="0" scrolling="no"></iframe>
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