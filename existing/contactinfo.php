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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Contact Information</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<p>Please send email to below address for any Priest Services for any Pooja:</p><p><a href="mailto:manager@svtempleco.org?subject=Info%20about%20Services%20for%20Pooja">manager@svtempleco.org</a></p>
	<p>Please send email to below address for any info about SV Temple, Colorado:</p><p><a href="mailto:info@svtempleco.org">info@svtempleco.org</a></p>
<p>Please send email to below address for any web related issues:</p><p><a href="mailto:webmaster@svtempleco.org">webmaster@svtempleco.org</a></p>
<br />

	</td>
  </tr>
  
<font size="+1">

  <tr>
    <td align="left" valign="top" style="padding-left:5px;">
       <p/> 
	 <B>Phone Numbers</B><br/>
	Temple:  303-660-9555<br/>
	Manager: 303-898-5514<br/>
    </td>
</tr>


  <tr>
    <td align="left" valign="top" style="padding-left:5px;">
<p>

 <B>Temple Address</B><br/>
1495 S Ridge Road,<br/>

Castle Rock, CO 80104<br/>
<br/>

<B>Directions: From I-25</B><br/>
Take exit 181 for Frontage Rd/Plum Creek Pkwy toward Wilcox St<br>
Turn east (right coming from I-25 South, left coming from I-25 North) onto Plum Creek Pkwy toward Wilcox St<br>
Turn right onto Ridge Rd<br>
<br>
Continue for about a mile<br>
Destination will be on the right<br>


<br>
</p>
</div>
</center>
</div>	</td>
  </tr>
</font>  
  
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>