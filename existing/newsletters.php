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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Temple Inauguration Booklet</td>
  </tr>
  <tr>
      <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<span style="white-space:nowrap"><a href="/docs/TempleInaugurationBook.pdf"> Click here </a> to download the Temple Inauguration Booklet.</span>
      </td>
  </tr>

  <tr>
    <td </td>
  </tr>
  <tr>

  <tr>
   <td><b><a href="/Docs/Letter-Pedda jeeyar swami.jpg"> View </a> </b>Letter from Sri Sri Pedda Jeeyar Swamy of Tirumala, June 2013</span></td>
  </tr>

  <tr>
   <td><b><a href="/Docs/RAMANUJAYA.pdf"> View </a> </b>Letter from Sri Sri Pedda Jeeyar Swamy of Tirumala, November 2013</span></td>
  </tr>

  <tr>
   <td><b><a href="/Docs/AGBM_Report201311142013.pdf"> View </a> </b>Temple Annual Report, November 2013</span></td>
  </tr>

    
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>

