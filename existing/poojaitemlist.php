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
    <td width="226%" align="center" valign="top" class="headingmain_txt">Puja Item List</td>
  </tr>

  <tr>
	<td><BR/></td>
  </tr>

  <tr>
    <td width="226%" align="left" valign="top" ><b>Please contact temple manager about scheduling pooja and religious services through <br/><a href="mailto:manager@svtempleco.org?subject=Info%20About%20Pooja%20Services">manager@svtempleco.org </a>
or call 303-898-5514.</b></td>
  </tr>

<!--
  <tr>
   <td> <b><a href="/Docs/Pooja-Religious-ServicesSupplies.pdf"> View</a> </b> the suggested item list for different Pooja and religious Services.</span>
	</td>
  </tr>
-->

  <!--tr>
   <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<span style="white-space:nowrap"><a href="/Docs/Pooja-Religious-Services.pdf"> Click here </a> to view the Pooja and religious Services Information.</span>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr>
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<span style="white-space:nowrap"><a href="/Docs/Pooja-Religious-ServicesSupplies.pdf"> Click here </a> to view the suggested item list for different Pooja and religious Services.</span>
	</td>
  </tr-->

  <tr>
    <td width="226%" align="left" valign="top" >&nbsp;</td>
  </tr>

  </table>

	</td>
  </tr>
</table>
<iframe src="https://docs.google.com/spreadsheets/d/12YXFp6kXLJCPnqiAVXVKR9sA86OFDcQP0o3xBzN3hX8/pubhtml?gid=866593464&amp;single=true&amp;widget=true&amp;headers=false" style="width: 642px; height: 401px"></iframe>
</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>