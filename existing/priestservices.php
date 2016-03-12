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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Pooja at sponsor home</td>
  </tr>
  <tr>
   <td align="left" valign="top" style="padding-left:10px;">
	<table width="70%" border="0" cellspacing="1" cellpadding="1" class="table_style">
  <tr>
    <th>&nbsp;&nbsp;Name of Pooja</th>
  </tr>
  <tr>
    <td align="left"><p>Punyahavachanam/Cradle ceremony</p></td>
  </tr>
  <tr>
    <td align="left"><p>Namakaranam/Annaprasana/Hair   offering/Aksharabhyasam&nbsp; </p></td>
  </tr>
  <tr>
    <td align="left"><p>1st birthday Ayush homam</p></td>
  </tr>
  <tr>
    <td align="left"><p>Upanayanam/Poonal</p></td>
  </tr>
  <tr>
    <td align="left"><p>Wedding</p></td>
  </tr>
  <tr>
    <td align="left"><p>60/70/80th birthday</p></td>
  </tr>
  <tr>
    <td align="left"><p>Gruhapravesam</p></td>
  </tr>
  <tr>
    <td align="left"><p>Satyanarayana Swamy Pooja</p></td>
  </tr>
  <tr>
    <td align="left"><p>Ground breaking</p></td>
  </tr>
  <tr>
    <td align="left"><p>Kalyana Utsavam</p></td>
  </tr>
  <tr>
    <td align="left"><p>Engagement</p></td>
  </tr>
  <tr>
    <td align="left"><p>Seemantham (Baby showers)</p></td>
  </tr>
  <tr>
    <td align="left"><b>Homam -</b> <br />
	Sri Venkateswara<br />
	Sudarsana<br />  
	Ganesh<br />  
	Lakshmi<br /> 
	Navagraha<br />	</td>
  </tr>
  <tr>
    <td align="left">Hiranya Shradham - Thath Dinam – Abdheekam</td>
  </tr>
  <tr>
    <td align="left">Last rites (funeral)</td>
  </tr>
  <tr>
    <td>10/11/12 day ceremony (for 3 days)</td>
  </tr>
</table>
<br />
To Contact Priest about Services for any Pooja, Please <a href="mailto:info@svtempleco.org?subject=Info%20About%20Pooja%20Services">click </a>here.
<br /><br />
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