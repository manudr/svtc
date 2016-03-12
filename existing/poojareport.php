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
    <td width="100%" align="center" valign="top" class="headingmain_txt"><u>Pooja Report</u></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
    <form action="reportprint.php" method="post"/>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	   <tr>
        <td colspan="6">&nbsp;</td>
      </tr>	
	   <tr>
	   	<td colspan="4">Priest Name: <b>Sri Jagannadha Acharyulu</b></td>
			<td colspan="2">
				Date: <b>02/13/2010</b>
			</td>
	   </tr>
	   <tr>
	   	<td colspan="4">&nbsp;</td>
			<td colspan="2">
				Period:<b>02/14/2010 - 02/20/2010</b> 
			</td>
	   </tr>	   
	   <tr>
        <td colspan="6">&nbsp;</td>
      </tr>	         
	   <tr>
	   	<td width="5%"></td>
		   <td width="25%"><b><center><u>Name</u></center></b></td>
		   <td width="5%"><b><center><u>Place</u></center></b></td>
			<td width="35%"><b><center><u>Pooja Type</u></center></b></td>
			<td width="20%"><b><center><u>Date/Time</u></center></b></td>
			<td width="10%"><b><center><u>Duration</u></center></b></td>				   
	   </tr>
	   <tr>
	   	<td><INPUT TYPE=CHECKBOX NAME="selection"></td>
		   <td><center>Dr. Gupta Kuna</center></td>
		   <td><center>Home</center></td>
			<td><center>Satyanarayana Swamy Pooja</center></td>
			<td><center>02/15/10 &nbsp; 07:00 AM</center></td>
			<td><center>02hr 30min</center></td>				   
	   </tr>
	   <tr>
	   	<td><INPUT TYPE=CHECKBOX NAME="selection"></td>
		   <td><center>VJ Chukkapalli</center></td>
		   <td><center>Home</center></td>
			<td><center>Kalyana Utsavam</center></td>
			<td><center>02/15/10 &nbsp; 02:00 PM</center></td>
			<td><center>02hr 30min</center></td>				   
	   </tr>
	   <tr>
	   	<td><INPUT TYPE=CHECKBOX NAME="selection"></td>
		   <td><center>Govinda Madugula</center></td>
		   <td><center>Temple</center></td>
			<td><center>Archana</center></td>
			<td><center>02/15/10 &nbsp; 06:00 PM</center></td>
			<td><center>30min</center></td>				   
	   </tr>
	   <tr>
	   	<td><INPUT TYPE=CHECKBOX NAME="selection"></td>
		   <td><center>Sarat Dontula</center></td>
		   <td><center>Temple</center></td>
			<td><center>Aksharabhyasam</center></td>
			<td><center>02/16/10 &nbsp; 07:00 AM</center></td>
			<td><center>01hr 30min</center></td>				   
	   </tr>	   	   	   
	   <tr>
        <td colspan="6">&nbsp;</td>
      </tr>  
      <tr>
        <td colspan="6" align="center">
	        	<input class="btnStyleXLong" name="submit" value="Print Summary" type="submit">
	        	<input class="btnStyleXLong" name="submit" value="Print All Details" type="submit">
        	</td>
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
