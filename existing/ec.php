<?php require_once ('./session.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SVTC - Executive Committee</title>
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
        <td width="226%" align="left" valign="top" class="headingmain_txt">Executive Committee</td>
    </tr>

    <tr>
        <td align="left" valign="top" style="padding-left:20px;">
            <p><strong>Sri Nandu Sankaran - Executive Committee President</strong></p>
            <p><strong>Sri Saiganesh Rajamani - Religious Committee Chair</strong></p>
            <p><strong>Sri Baburao Karamsetty - Finance Committee Chair</strong></p>
            <p><strong>Smt Madhuri Mohan - Annapurna Committee Chair</strong></p>
            <p><strong>Sri Ratnakar Kalangi - Facilities Committee Chair</strong></p>
            <p><strong>Sri Sreedhar Donthula - Education and Cultural Committee Chair</strong></p>
            <p><strong>Sri Manmohan Dronamraju - Web and Communications Committee Chair</strong></p>
            <p><strong>Smt Soummya Nandireddy - Temple Manager</strong></p>
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

