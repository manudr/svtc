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
    <td width="100%" align="center" valign="top" class="headingmain_txt"><u>Special Event Registration Confirmation</u></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
	<form action="eventRegisterReview.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
        <td colspan="5">&nbsp;</td>
     </tr>	
	   <tr>
		   <td width="15%">Name:</td>
		   <td width="30%"><b>Sarat Dontula</b></td>
		   <td width="10%">&nbsp;</td>
		   <td width="15%">Sponsor Type:</td>
		   <td width="30%"><b>One Time</b></td>
	   </tr>	   
      <tr>
        <td>Activity:</td>
        <td><b>Sri Rama Navami</b></td>
        <td>&nbsp;</td>
        <td>Pooja Name:</td>
        <td><b>Archana, Kalayna Utsavam</b></td>        
      </tr>     
      <tr>
        <td>Amount:</td>
        <td><b>$100.00</b></td>
        <td>&nbsp;</td>
        <td>Payment Status:</td>
        <td><b>Paid</b>        
      </tr>      
      <tr>
        <td>Date/Time:</td>
        <td><b>03/20/2010 - 07:45 AM</b></td>
        <td>&nbsp;</td>
        <td>Duration:</td>
        <td><b>5hrs 30mins</b>        
      </tr>                               
      <tr>
        <td colspan="5">&nbsp;<center> <font color="red"><?php echo "$displaytext"; ?></font></center></td>
      </tr>
	   <tr>
		   <td colspan="5"><b><u>Family Details</u></b></td>  
	   </tr>
	  <tr>
        <td colspan="5">&nbsp;</td>
     </tr>	   
	   <tr>
		   <td><b><center><u>Name</u></center></b></td>
		   <td><b><center><u>Gotram</u></center></b></td>
		   <td><b><center><u>Nakshatram</u></center></b></td>		   
		   <td colspan="2"><b><center><u>Relation</u></center></b></td>		   		   
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
        <td colspan="5" align="center"><input class="btnStyleXLong" type="submit" name="submit" value="Confirm"></input></td>
      </tr>
	  <tr>
        <td colspan="5">&nbsp;</td>
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
