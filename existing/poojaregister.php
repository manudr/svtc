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
    <td width="100%" align="center" valign="top" class="headingmain_txt"><u>Pooja Registration</u></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
	<form action="poojaRegisterReview.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	   <tr>
		   <td>Name:</td>
		   <td>Govinda Madugula</td>
	   </tr>
      <tr>
        <td>Type of Pooja:</td>
        <td><select name="poojatype">
        				<option value="OT">Other</option>
						<option value="AR" selected>Archana</option>
						<option value="AP">Anna Prasana</option>
						<option value="SW">Birthday</option>						
						<option value="SW">Satya Narayana Swamy Vratam</option>
						<option value="SW">Shastipurthi</option>						
						<option value="SW">Upanayanam</option>
				</select>
				&nbsp; &nbsp; Other: <input class="txtBox" name="poojaother" type="text" size="15"></input>				
				<font color="red">&nbsp;*</font>
			</td>
      </tr>
      <tr>
        <td>Service For:</td>
        <td>
        		<input name="service" value="S" checked="checked" type="radio">Self</input>
        		<input name="service" value="O" type="radio">Other</input>&nbsp; &nbsp;<input class="txtBox" name="serviceother" type="text" size="15"></input>
        </td>
      </tr>
      <tr>
        <td>Place:</td>
        <td>
        		<input name="place" value="T" checked="checked" type="radio">Temple</input>
        		<input name="place" value="H" type="radio">Home</input>
        		<!--<select name="place" class="txtBox">
						<option value="  "></option>
						<option value="TEMPLE">TEMPLE</option>
						<option value="HOME">HOME</option>
				</select>-->
				<font color="red">&nbsp;*</font>
        </td>
      </tr>
      <tr>
        <td>Priest:</td>
        <td>
        		<select name="priest" class="txtBox">
						<option value="priest1" selected>Sri Jagannadha Acharyulu</option>
				</select>        		
	        <font color="red">&nbsp;* &nbsp; <u>Check Priest Calendar</u></font>
        </td>
      </tr>
      <tr>
        <td>Amount:</td>
        <td>$100.00 &nbsp; &nbsp; <input class="btnStyleXLong" type="submit" name="submit" value="Payment"></td>
      </tr>
      <tr>
        <td>Date/Time:</td>
        <td>
        		<input class="txtbox" name="date" type="text" size="15" value="03/15/2010 - 07:30 AM"></input>
        		<img src="resources/image/datePicker.gif" />
        		<font color="red">&nbsp;*</font>
        </td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;<font color="red">* - Indicates Required Fields</font></td>
      </tr>                   
      <tr>
        <td colspan="2">&nbsp;<center> <font color="red"><?php echo "$displaytext"; ?></font></center></td>
        </tr>
      <tr>
        <td colspan="2" align="center"><input class="btnStyleXLong" type="submit" name="submit" value="Review"></input></td>
      </tr>
	  <tr>
        <td colspan="2">&nbsp;</td>
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
