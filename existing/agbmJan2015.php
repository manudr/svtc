<?php
require_once ('./session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sri Venkateswara Swamy Temple of Colorado</title>
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
    <td width="226%" align="left" valign="top" class="headingmain_txt">AGBM - Jan 17, 2015</td>
  </tr>
  <tr>
	<td><BR/></BR></td>
  </tr>
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/ChairmansReport_AGBM_Jan2015.pdf" target="_blank">Chairman's Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr>   
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/Treasurers-Report.pdf" target="_blank">Treasurer's Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 
  <tr>
  </tr>
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/Gopuram_Status_Report.pdf" target="_blank">President's Report on Gopuram Repairs</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 
  <tr>
  </tr>  
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/Manager-Report.pdf" target="_blank">Managers's Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr>    
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/ReligiousCommittee-Report.pdf" target="_blank">Religious Committee Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/FinanceCommittee-Report.pdf" target="_blank">Finance Committee Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr>
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/AC_Report.pdf" target="_blank">Annapurna Committee Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 	  
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/EducationAndCulturalCommittee-Report.pdf" target="_blank">Education and Cultural Committee Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/MultiMediaCommittee-Report.pdf" target="_blank">Multi Media Committee Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 
  <tr>
   <td align="left" valign="top" style="padding-left:10px;" class="heading_txt">
	<a href="/AGBM-Jan2015/WebnCommunications-Report.pdf" target="_blank">Web and Communications Committee Report</a>
	</td>
  </tr>
  <tr>
	<td><BR/></td>
  </tr> 

</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>