<?php
require_once ('../session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SVTC School of Fine Arts - Mission</title>
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
    <td width="226%" align="center" valign="top" class="headingmain_txt">School of Fine Arts<BR/>Mission</td>
  </tr>
</table>

<li><a href="sofa_mainpage.php">Vision</a></li>

<li><a href="sofa_schedule.php">Schedule of Classes</a></li>
<li><a href="sofa_teachers.php">Teachers and their profiles</a></li>
<BR/><BR/>

<B>Mission</B><BR/>
Historically, the Hindu Temples have been the custodians of the Asian Indian Culture. They have played a major role in promoting, preserving and celebrating the various Indian art forms. Since music and dance are so interwoven with the Hindu worship and rituals, the temples became the chosen centers for the presentation and nurturing of these arts and the artists. Sri Venkateswara Swamy Temple of Colorado, a Hindu Temple in the Rocky Mountain Region, has played that significant role in the promotion of the Asian Indian culture by starting SVTC school of Fine Arts.
 
<BR/><BR/>

The SVTC school of Fine Arts was founded in May 2009 with a handful of students for teaching the children the rich heritage of Hinduism through Music and Dance. Today we have about 60 students and about 10 talented volunteer teachers teaching Classical Music, Tabla, Mridangam, Dance (both Bhatathanatyam and the Kuchipudi style). We are also conducting Language classes in Telugu and Tamil. In the last few months there have been enquiries for starting Sanskrit, Yoga and Veda Classes. We will be starting very soon once we have enough students. 
 
<BR/><BR/>

The Mission of SVTC School is to  

<BR/>
&nbsp;&nbsp;&nbsp;&nbsp; 

	•	Coordinate and organize classes in all the types of Classical Music, Dance, Art, Asian Indian languages and literary programs which shall reflect the Hindu Cultural and Heritage.
 
<BR/>
&nbsp;&nbsp;&nbsp;&nbsp; 

	•	Coordinate and organize educational classes for the benefit of the members and devotees
 
<BR/>
&nbsp;&nbsp;&nbsp;&nbsp; 

	•	Assist in the development and maintenance of the temple library
 
<BR/>
&nbsp;&nbsp;&nbsp;&nbsp; 

	•	Develop a program for acquiring and distributing educational materials that describe Hinduism for the education of devotees
 
<BR/>
&nbsp;&nbsp;&nbsp;&nbsp; 

	•	Work with the religious committee in organizing programs for temple festivals 
<br /><br />

</div>
</div>
<?php include '..\resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>