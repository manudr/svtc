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
		<style type="text/css">
			select {width: 200px; font:normal 11px Arial, Helvetica, sans-serif;}
			input {width: 150px; font:normal 11px Arial, Helvetica, sans-serif;}
		</style>
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
    <td width="100%" align="center" valign="top" class="headingmain_txt"><u>Pooja Registration Confirmation</u></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
    <form action="poojaRegisterReview.php" method="post"/>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	   <tr>
        <td colspan="4">&nbsp;</td>
      </tr>	
	   <tr>
		   <td width="15%">Name:</td>
		   <td width="35%"><b>Govinda Madugula</b></td>
         <td width="15%">Pooja Name:</td>
         <td width="35%"><b>Archana</b></td>		   
	   </tr>	   
      <tr>
        <td valign="top">Service For:</td>
        <td valign="top"><b>Self</b></td>
        <td valign="top">Place:</td>
        <td><b>HOME [225 Centennial Pkwy, Colorado Springs, CO]</b></td>        
      </tr>      
      <tr>
        <td>Amount:</td>
        <td><b>$100.00</b></td>
        <td>Date / Time:</td>
        <td><b>03/15/2010 - 07:30 AM</b></td>        
      </tr>      
      <tr>
        <td>Payment Status:</td>
        <td><b>Paid</b></td>
        <td>Priest:</td>
        <td><b>Sri Jagannadha Acharyulu</b></td>
      </tr>      
      <tr>
        <td>Duration:</td>
        <td><b>2hrs 30 mins</b></td>
        <td>Priest Phone#:</td>
        <td><b>720-993-8782</b></td>
      </tr>      
	   <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
	   <tr>
        <td colspan="4">&nbsp;</td>
      </tr>        
      <tr>
        <td colspan="4" align="center"><font size="8"><input class="btnStyleXLong" name="submit" value="Confirm" type="submit"></font></td>
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
