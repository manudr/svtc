<?php  
require_once ('./session.php'); 
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
    <td width="100%" align="center" valign="top" class="headingmain_txt"><u>Pooja Report Details</u></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
    <form action="reportprint.php" method="post"/>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
        <td colspan="5">&nbsp;</td>
     </tr>		
	   <tr>
		   <td width="15%">Name:</td>
		   <td width="30%"><b>Sarat Dontula</b></td>
		   <td width="10%">&nbsp;</td>
		   <td width="15%">Pooja Name:</td>
		   <td width="30%"><b>Aksharabhyasam</b></td>		   
	   </tr>
	   <tr>
		   <td>Phone#:</td>
		   <td><b>720-980-8884</b></td>
		   <td>&nbsp;</td>
		   <td>Date/Time</td>
		   <td><b>02/16/10 07:30 AM</b></td>		   
	   </tr>
	   <tr>
		   <td>Service At</td>
		   <td><b>1995 E Coalton Rd, Superior, CO</b></td>
		   <td>&nbsp;</td>		   
		   <td>Duration</td>
		   <td><b>1hr 30mins</b></td>		   		   
	   </tr>
	   <tr>
		   <td>Payment Status:</td>
		   <td colspan="4"><b>Paid</b></td>		   
	   </tr>	   	   	   	   
	  <tr>
        <td colspan="5">&nbsp;</td>
     </tr>
	   <tr>
		   <td colspan="5"><b><u>Family Details</u></b></td>  
	   </tr>
	  <tr>
        <td colspan="5">&nbsp;</td>
     </tr>	   
	   <tr>
		   <td><b><center>Name</center></b></td>
		   <td><b><center>Gotram</center></b></td>
		   <td><b><center>Nakshatram</center></b></td>		   
		   <td colspan="2"><b><center>Relation</center></b></td>		   		   
	   </tr>
	   <tr>
		   <td><center>Sandhya Dontula</center></td>
		   <td><center>Pragbalasa</center></td>
		   <td><center>Ashwini</center></td>		   
		   <td colspan="2"><center>Spouse</center></td>		   		   
	   </tr>
	   <tr>
		   <td><center>Srikar Dontula</center></td>
		   <td><center>Pragbalasa</center></td>
		   <td><center>Shatabhisham</center></td>		   
		   <td colspan="2"><center>Child</center></td>		   		   
	   </tr>	 
	  <tr>
        <td colspan="5">&nbsp;</td>
     </tr>		     	   
      <tr>
        <td colspan="5" align="center"><input class="btnStyleXLong" name="submit" value="Print" type="submit"></td>
      </tr>              
    </table>
    </form>
	</td>
    </tr>
</table>

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
