<?php
require_once ('../session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SVTC School of Fine Arts</title>
<link href="../resources/css/style.css" rel="stylesheet" type="text/css" />
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
<?php include '..\resources\includes\header.html' ?>
<?php include '..\resources\includes\popupmenu.html' ?>
<?php include '..\resources\includes\topbanner.html' ?>


<div class="contentContainer">
<?php include '..\resources\includes\leftmenu.html' ?>
<div class="rightBg" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="center" valign="top" class="headingmain_txt">School of Fine Arts</td>
  </tr>
</table>
<B>Vision</B><BR/>
	To nurture and propagate the priceless heritage of Indian Music, Dance and musical instruments by making them innovative and affordable to everyone. Enrich the mind through Arts and Culture by vigorously supporting the artists of all Discipline. 
<br /><br />

<li><a href="sofa_mission.php">Mission</a></li>

<li><a href="sofa_schedule.php">Schedule of Classes</a></li>
<li><a href="sofa_teachers.php">Teachers and their profiles</a></li>
<BR/><BR/>

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">How To Donate</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="85%"><b>We recommend you download the <a href="/Pledge documents/PledgeForm06272011.pdf" target="_blank">pledge form</a> and fill it out and send us the check by mail.<br /><br />
If you woud like to donate by using Credit Card, please use this form <a href="/Pledge documents/SVTC_Credit_Card_Authorization_form.pdf" target="_blank">monthly donations using credit card form</a> or contact Temple Manager @303 898 5514.<br /><br />
	<!-- To donate online please click on the paypal link to the right.-->
	</b>
	</td>
    <td valign="bottom"><img src="resources/image/paypal_logo.gif" width="122" height="50" /></td> -->
  </tr>

  <tr>
    <td width="85%"><b>Please use this form for auto payment of the SVTC School fees using the Credit card <a href="/Pledge documents/SVTCSchool_CC_AUTHORIZATION.pdf" target="_blank">auto payment to SVTC School</a> <br /><br /> <br /><br />
	</b>
	</td>
  </tr>
</table>


<br /><br />

<B>Contact Information</B><BR/>
Please contact the following for enrolling or teaching at the SVTC School  
<br>Nandu Sankaran @ 719-214-7332  E-mail: nandu_sankaran@hotmail.comi 
<br /><br />

</div>
</div>
<?php include '..\resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>