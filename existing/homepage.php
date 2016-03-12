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

<?php include 'resources\includes\popupmenu.html' ?>
<?php include 'resources\includes\topbanner.html' ?>
<div class="timingBg">
	<div class="timingText">
	Temple Timings : Weekdays Morning 9.00 AM - 12 PM Evening 6 PM - 8.30 PM Weekends/Holidays 9.00 AM - 8.30 PM
	</div>
</div>


<div class="contentContainer">
<?php include 'resources\includes\leftmenu.html' ?>

<div class="rightBg" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">

  <tr>
<!--
    <td width="126" align="left" valign="top" style="padding-left:4px"><img src="resources/image/temple1.jpg" width="126" height="87" /></td>
    <td width="100%" align="left" valign="top" class="homeContent">
	<img src="resources/image/welcome.jpg" width="116" height="27" />

      <div style="margin-left:10px;">Sri Venkateswara Temple has been a long cherished dream of people of Colorado.
There are tremendous efforts underway to complete the Sri Venkateswara Swamy Temple of Colorado.
Please visit this web site frequently to learn more about what is going on regarding this effort.
Want to be a part of this once in a life time opportunity ? Email to learn more and receive more information <span style="padding-left:25px"><a href="" style="color:#B61500">more »</a></span> </div> 
-->

    <td width="100%" align="left" valign="top" class="homeContent">
<!-- Removed as per EC decision in EC meeting held on 8/8/2015     
	<img src="resources/image/welcome.jpg" width="116" height="27" />
      <div >Sri Venkateswara Swamy Temple of Colorado has been a long cherished dream of people of Colorado.<br/>
There are tremendous efforts underway to complete the Sri Venkateswara Swamy Temple of Colorado.<br/>
Please visit this web site frequently to learn more about what is going on regarding this effort.<br/>
Want to be a part of this once in a life time opportunity? Email to learn more and receive more information<span style="padding-left:10px"><a href="mailto:info@svtempleco.org?subject=Information%20about%20SVTC" style="color:#B61500">more »</a></span> </div> 

<embed src="resources\player\mediaplayer.swf" width="51" height="35"
type="application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" 
flashvars="height=20&width=55&file=NAMO_VENKATESAYA.mp3&volume=1&autostart=true&repeat=true&type=mp3&displaywidth=250&autoscroll=false&thumbsinplaylist=false&showicons=false&usefulscreen=false&searchbar=false&backcolor=0xE59405&frontcolor=0x000000&lightcolor=0xFFFF00&screencolor=0xFFFFFF" /></embed>
-->
<!-- added 2015 pavithrotsavam info
<p style="text-align: center;">&nbsp;<span style="font-size: 20pt; color: rgb(192, 0, 0); font-weight: bold; vertical-align: baseline;">Sri Yaga Sahitha Pavithrotsavam Celebrations</span></p>
<p style="text-align: center;">&nbsp;<span style="font-size: 18pt; color: rgb(0, 102, 0); font-weight: bold; vertical-align: baseline;">Friday, August 28th to Sunday, August 30th 2015
</span></p>
<p style="text-align: center;"><a href="http://www.svtempleco.org/userfiles/2015_SriYagamAndPavitrotsavam.pdf"><span style="color: rgb(0, 0, 255);"><span style="font-size: 18pt;">Click here for event details</span></span></a></p>
<p style="text-align: center;"><a href="http://goo.gl/forms/w9z4yrEhW7 "><span style="color: rgb(0, 0, 255);"><span style="font-size: 18pt;">Click here to register for the events</span></span></a></p>
-->
<!-- End 2015 pavithrotsavam info -->
    </td>
  </tr>

<!--
  <tr>
    <td colspan="2" align="left" valign="top" class="heading_txt"><br/>Temple will be closed on Friday October 18th, 2013 evening</td>
  </tr>

  <tr> <td colspan="2" align="left" valign="top"><font size="+1">&nbsp; Penumbral Luner Eclipse </font></td> </tr>
  <tr> <td colspan="2" align="left" valign="top"> <font size="+1">&nbsp; Chandra Grahanam </font> </td> </tr>
  <tr> <td colspan="2" align="left" valign="top"> <font size="+1">&nbsp; 3:53 PM - 7:48 PM </font> </td> </tr>


  <tr> <td colspan="2" align="left" valign="top"><br/> <br/></tr> 
  <tr> <td colspan="2" align="left" valign="top"></tr> 
  <tr> <td colspan="2" align="left" valign="top">
-->    
	<b>

  <!--
  <font size="+1">&nbsp; Media Coverage</font></b>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="http://youtu.be/w5XVbxQ-bD4" target="_blank">Pavithrotsavam Celerations 2014</a>	</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="http://youtu.be/WMgUORoiWeI" target="_blank">V6 News coverage - Deepavali Celerations 2014</a>	</td>
  </tr>
  -->


  <tr>
    <td colspan="2" align="center" valign="top" class="heading_txt">Welcome to Sri Venkateswara Swamy Temple of Colorado</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" style="padding-left:12px; height: 10px;">1495 S Ridge Road, Castle Rock, CO-80104</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" style="padding-left:10px; height: 10px;">Phone: Temple - 303-660-9555, Manager - 303-898-5514    Email: manager@svtempleco.org</td>
  </tr>
<!-- 9/1/2015 - Add upcoming events from google slides-->  
  <tr>
    <td colspan="0" align="left" valign="top">
      <iframe src="https://docs.google.com/presentation/d/1aSYmB04l47_H76nsmxxb2h2yiBmN_3ArKLdOj3Lx9J8/embed?start=true&loop=true&delayms=10000" frameborder="0" width="640" height="425" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
    </td>
  </tr>


  <!-- <tr>
    <td colspan="2" align="left" valign="top"><BR/> <b>
	&nbsp;
	<a href="elections.php">Notice of Elections 2011 - Election of  Board of Trustees</a> </b>
    </td>
  </tr>
	-->

  <tr>
    <td colspan="2" align="left" valign="top">
      <!-- 
	  <iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffcc33&amp;src=svtempleofco%40gmail.com&amp;color=%23875509&amp;ctz=America%2FDenver" 
	  style=" border:solid 1px #777 " width="630" height="600" frameborder="0" scrolling="no"></iframe>  -->
	  <iframe src="https://www.google.com/calendar/embed?title=Events%20Calendar&amp;showTabs=0&amp;mode=AGENDA&amp;height=300&amp;wkst=2&amp;hl=en&amp;bgcolor=%23ffcc33&amp;src=svtempleofco%40gmail.com&amp;color=%23875509&amp;ctz=America%2FDenver" 
	  style=" border:solid 1px #777 " width="600" height="300" frameborder="0" scrolling="no"></iframe>
    </td>
  </tr>	
	
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;">
	<?php



// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
$query="SELECT * FROM announcements order by vieworder";

$result=mysql_query($query)or die('Error querying the DB' . mysql_error());

$num=mysql_numrows($result);

mysql_close();

	$i=0;
	while ($i < $num) {
		$title=mysql_result($result,$i,"title");
     	$description=mysql_result($result,$i,"description");
		$descriptionAsHTML = htmlspecialchars_decode( $description ) ;
		$publishdate = mysql_result($result,$i,"publishdate");
		$expirydate = mysql_result($result,$i,"expirydate");
		$publishdateformatted = date("Y/m/d",strtotime($publishdate));
		$expirydateformatted = date("Y/m/d",strtotime($expirydate));
		$currentdate = date("Y/m/d");
		if( $currentdate < $publishdateformatted  || $currentdate > $expirydateformatted )
		;
		else
		{
			echo "<br/><b>$title</b>";
			echo "$descriptionAsHTML";
		}
		$i++;
	}
/*print "expirydate {$expirydate}";
print "publishdate {$publishdate} ";
print "currentdate {$currentdate}";*/
?>

	<!--	<?php include("./uploads/Events.html"); ?> -->
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