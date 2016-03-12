<?php
require_once ('./session.php'); // Connect to the database.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sri Venkateswara temple</title>
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="roundedcorners.css">
<link rel="stylesheet" type="text/css" href="roundedprint.css" media="print">
<script type="text/javascript" src="roundedcorners.js"></script>
<script type="text/javascript">
window.onload=function(){
if(!NiftyCheck())
    return;
Rounded("div#content","#fff","#fdf7dd");
Rounded("div#navright","#fff","#E5FFC4");
Rounded("div#navleft","#fff","#E5FFC4");
}
</script>
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
<?php include 'resources\includes\popupmenu.html' ?>
<?php include 'resources\includes\topbanner.html' ?>


<div class="contentContainer">
<?php include 'resources\includes\leftmenu.html' ?>
<div class="rightBg" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">


<TABLE BORDER="1"    WIDTH="100%"   >
   <TR>
      <TH COLSPAN="2"><div id="container"><center>
	<div id="content"><H1>Temple Timings</H1>
      </TH>
   </TR>

   <TR>
      <TD><H2>Weeends/Holidays</H2></TD>
      <TD><H2>&nbsp;From 9:00 a.m To 8:30 p.m</H2></TD>
   </TR>
   <TR>
      <TD><H2>Weekdays</H2></TD>
	<TD>
	<TABLE WIDTH=100%>
	   <TR>
	      <TD><H2>Morning:</H2></TD>
	      <TD><H2>From 9:00 a.m To 12:00 p.m</H2></TD>
	   </TR>
	   <TR>
	      <TD><H2>Evening:</H2></TD>
	      <TD><H2>From 6:00 p.m to 8:30 p.m</H2></TD>
	   </TR>
	</TABLE>
	</TD>
   </TR>
</TABLE>

<font size="+1">

  <tr>
    <td align="left" valign="top" style="padding-left:5px;">
       <p/> 
	 <B>Phone Numbers</B><br/>
	Temple:  303-660-9555<br/>
	Manager: 303-898-5514<br/>
	Email:
		<a href="mailto:manager@svtempleco.org?subject=Information%20about%20SVTC">manager@svtempleco.org</a> or 
		<a href="mailto:info@svtempleco.org?subject=Information%20about%20SVTC">info@svtempleco.org</a><br/>
    </td>
</tr>


  <tr>
    <td align="left" valign="top" style="padding-left:5px;">
<p>

 <B>Temple Address</B><br/>
1495 S Ridge Road,<br/>

Castle Rock, CO 80104<br/>
<br/>

<B>Directions: From I-25</B><br/>
Take exit 181 for Frontage Rd/Plum Creek Pkwy toward Wilcox St<br>
Turn east (right coming from I-25 South, left coming from I-25 North) onto Plum Creek Pkwy toward Wilcox St<br>
Turn right onto Ridge Rd<br>
<br>
Continue for about a mile<br>
Destination will be on the right<br>


<br>
</p>
</div>
</center>
</div>	</td>
  </tr>
</font>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>




