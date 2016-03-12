<?php
require_once ('../session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SVTC School of Fine Arts - Schedule of Classes</title>
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
    <td width="226%" align="center" valign="top" class="headingmain_txt">School of Fine Arts<BR/>Schedule of Classes</td>
  </tr>
</table>

<li><a href="sofa_mainpage.php">Vision</a></li>
<li><a href="sofa_mission.php">Mission</a></li>
<li><a href="sofa_teachers.php">Teachers and their profiles</a></li>
<BR/><BR/>

<B>Schedule of Classes</B><BR/>
<pre>
	<B>Saturday</B>
	        10 AM – 12 Noon  Vocal  (Smt. Sudha Ramesh / Sri. Arunkumar)
        	9:00 AM - 12 Noon Dance - Kuchipudi(Smt. Suhasini K Shetty)

	<B>Sunday</B>

                9:00 AM. – 10:00 AM  Yoga (Smt. Sheela Dharmarajan)
                9:00 AM. - 11:00 AM Music (Smt. Mala Raghuraman)
                11:00 AM. - 2:00 PM Dance -Kuchipudi (Dr.Sarita Rao)
                12 Noon - 4:00 P.M. Dance - Bharatnatyam (Sri Mohana)
</pre>

	<B>Course Curriculum</B>
	<BR/>
	<li><a href="/SchoolofFineArts/DanceCurriculum.docx">Dance Course Curriculum</a></li>
	<BR/>
	<BR/>
	<BR/>

	<B>Contact Information</B>
	<BR/>
	&nbsp;&nbsp;&nbsp;Please contact the following for enrolling or teaching at the SVTC School
	<BR/> <BR/>
	&nbsp;&nbsp;&nbsp;Sri. Nandu Sankaran @: 719-214-7332 E-mail: <a href="mailto:nandu_sankaran@hotmail.com">nandu_sankaran@hotmail.com</a>

<br /><br />

</div>
</div>
<?php include '..\resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>