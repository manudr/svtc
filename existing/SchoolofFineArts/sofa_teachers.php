<?php
require_once ('../session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SVTC School of Fine Arts - Teachers Profiles</title>
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
    <td width="226%" align="center" valign="top" class="headingmain_txt">School of Fine Arts<BR/>Teachers</td>
  </tr>
</table>

<li><a href="sofa_mainpage.php">Vision</a></li>
<li><a href="sofa_mission.php">Mission</a></li>

<li><a href="sofa_schedule.php">Schedule of Classes</a></li>


<BR/><BR/>

<B>Teachers</B><BR/>

<li><a href="sofa_teachers.pdf">Sri Arunkumar Kumaraswamy (Vocal)</a></li>
<BR/><BR/>

<li><a href="sofa_teachers.pdf">Smt Sudha Ramesh (Vocal)</a></li>
<BR/><BR/>

<li><a href="sofa_teachers.pdf">Smt Srimohana BalaSubramaniam (Dance- BharataNatyam )</a></li>
<BR/><BR/>

<li><a href="sofa_teachers.pdf">Smt Dr Saritha Rao (Dance - Kuchipudi )</a></li>
<BR/><BR/>

<li><a href="sofa_teachers.pdf">Smt Mala Raghuraman (Vocal Music)</a></li>
<BR/><BR/>

<li><a href="sofa_teachers.pdf">Smt Suhasini K Shetty (Dance - Kuchipudi )</a></li>
<BR/><BR/>

<li><a href="sofa_teachers.pdf">Smt Sheela Dharmarajan (Hatha Yoga )</a></li>
<BR/><BR/>


</div>
</div>
<?php include '..\resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>