<?php  

require_once ('./session.php'); 
require_once ('./mysql_connect.php')

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
    <td width="226%" align="left" valign="top" class="headingmain_txt">SVTemple Colorado Mailing List</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="70%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td><b>Please sign-up for SV Temple Mailing List to receive emails from SVTemple Colorado</b></td>
    </tr>
  <tr>
    <td>
	
	<form action="subscribe.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>First Name:</td>
        <td><input name="firstname" type="text" size="40"></input></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input name="lastname" type="text" size="40"></input></td>
      </tr>
      <tr>
        <td>EMail Address:</td>
        <td><input name="email" type="text" size="40"></input><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top"><input type="radio" name="subunsub" value="sub" checked="checked">Subscribe</input>
			<input type="radio" name="subunsub" value="unsub">Un-Subscribe</input></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" align="center"><input class="btnStyle" type="submit" name="submit" value="Submit"></input></td>
      </tr>
	  <tr>
        <td colspan="2" align="right"><a href="privacystatement.php" style="color:#FF6600;font-size:12px">	Privacy Statement</a></td>
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
