<?php
require_once ('./session.php'); // Connect to the database.
?>
<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Directions to Sri Venkateswara Temple of Colorado</title>
    <!--Sarat Dontula generated this google maps api key. Contact him at sdontula@gmail.com if encountered a problem.-->
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAMZyVpBjVL4bTAeC8rKUuUxQdU8R7YrF-Cfit2qisVvoaSlupvBSvvUGT-wEgT1Y6Fa6ssxYfSKVkig&sensor=true"
            type="text/javascript"></script>
    <script type="text/javascript">

    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(39.3403284, -104.8152998), 12);
        var point = new GLatLng(39.3403284, -104.8152998);
        map.addOverlay(new GMarker(point, { title: "Sri Venkateswara Temple" }));
        map.openInfoWindowHtml(map.getCenter(), "Sri Venkateswara Temple <br> 1495 S Ridge Road, <br> Castle Rock, CO <br> 80104");
        map.setUIToDefault();
      }
    }

    </script>
</head>

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

<body bgcolor="#D2B48C" onload="initialize()" onunload="GUnload()">


<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr height="25">
        <td align="center">Location of the Temple</td>
    </tr>

    <tr>
	<td align="center">
	<B> 1495 S Ridge Road, Castle Rock, CO 80104</B>
	</td>
    </tr>
    <tr>
        <td align="center">
<br>
	<B>Directions from I-25</B><br>
	   --------------------------<br>	
            Take exit 181 for Frontage Rd/Plum Creek Pkwy toward Wilcox St<br>
Turn east (right coming from I-25 South, left coming from I-25 North) onto Plum Creek Pkwy toward Wilcox St<br>
Turn right onto Ridge Rd<br>
<br>
Destination will be on the right<br>
        </td>
    </tr>


</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
    <tr>
        <td style="padding:10px;" align="center">
            <div id="map_canvas" style="width: 500px; height: 300px"></div>
        </td>
    </tr>
</table>
</table>
</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>

