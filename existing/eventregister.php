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
    <td width="100%" align="center" valign="top" class="headingmain_txt"><u>Temple Special Events Registration</u></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
	<form action="eventRegisterReview.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
        <td colspan="2">&nbsp;</td>
      </tr>	
	   <tr>
		   <td>Name:</td>
		   <td>Sarat Dontula</td>
	   </tr>
      <tr>
        <td>Select Activity:</td>
        <td><select name="activity" class="txtBox">
						<option value="DW">Diwali</option>
						<option value="DA">Dasara</option>						
						<option value="MS">Maha Siva Ratri</option>
						<option value="NY">New Year</option>					
						<option value="SR" selected>Sri Rama Navami</option>
						<option value="TP">Tiruppavadai</option>
						<option value="UD">Udayasthamana Seva</option>							
						<option value="UG">Ugadi</option>						
				</select>
				<font color="red">&nbsp;*</font>
			</td>
      </tr>
      <tr>
        <td>Pooja Type:</td>
        <td><select name="poojatype" class="txtBox" size="4" multiple>
						<option value="AR">Archana</option>
						<option value="AR">Sahasranamarchana</option>
						<option value="AR">Abhishekam</option>
						<option value="AR">Kalayna Utsavam</option>
				</select>
				<font color="red">&nbsp;*</font>
			</td>
      </tr>      
      <tr>
        <td>Sponsor Type:</td>
        <td>
        		<input name="service" value="Y" checked="checked" type="radio">Grand</input>
        		<input name="service" value="Y" type="radio">One TIme</input>
        		<font color="red">&nbsp;*</font>
        </td>
      </tr>
      <tr>
        <td>Amount:</td>
        <td>$100.00 &nbsp; &nbsp; <input class="btnStyleXLong" name="submit" value="Payment" type="submit"></td>
      </tr>
      <tr>
        <td>Payment:</td>
        <td>
				<select name="paymethod" class="txtBox">
						<option value="CC">Credit Card</option>
						<option value="CA">Cash</option>
						<option value="CK">Check</option>
						<option value="PA">PayPal</option>
				</select>        
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
