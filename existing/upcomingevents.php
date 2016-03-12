
<?php  require_once ('./session.php'); 
		require_once ('./mysql_connect.php');

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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Upcoming Events</td>
  </tr>
  
  <tr>
    <td colspan="2" align="left" valign="top">
	  <iframe src="https://www.google.com/calendar/embed?title=Upcoming%20Events&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;hl=en&amp;bgcolor=%23ffcc66&amp;src=svtempleofco%40gmail.com&amp;color=%23875509&amp;ctz=America%2FDenver" style=" border:solid 1px #777 " width="640" height="600" frameborder="0" scrolling="no"></iframe>
	</td>
  </tr>  
<!--  
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<?php

// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
$query="SELECT * FROM upcomingevents";

$result=mysql_query($query)or die('Error querying the DB' . mysql_error());

$num=mysql_numrows($result);

mysql_close();

	$i=0;
	while ($i < $num) {
     	$description=mysql_result($result,$i,"description");
		$descriptionAsHTML = htmlspecialchars_decode( $description ) ;
		echo "$descriptionAsHTML</br>";
		$i++;
	}

?>
	</td>
  </tr>
  
-->
  
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>
