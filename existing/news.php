<?php
require_once ('./session.php'); // Connect to the database.
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
    <td width="226%" align="left" valign="top" class="headingmain_txt">News Articles </td>
  </tr>
  
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="http://youtu.be/w5XVbxQ-bD4" target="_blank">Pavithrotsavam Celerations 2014</a>	</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="http://youtu.be/WMgUORoiWeI" target="_blank">V6 News coverage - Deepavali Celerations 2014</a>	</td>
  </tr>
  
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<a href="http://teluguone.com/nrinews/index.jsp?filename=SriVariBrahmotsavaluatColorado.html"></a>
	<a href="http://teluguone.com/nrinews/index.jsp?filename=SriVariBrahmotsavaluatColorado.html"></a>	</td></tr>

 <tr>
    <td colspan="2" align="left" valign="top">
	<b>
<font size="+1">&nbsp; Brahmotsavam 2014 Celebrations Media Coverage</font></b>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="https://www.youtube.com/watch?v=qMuEEdo69RQ&feature=youtu.be" target="_blank">6TV News coverage of Brahmotsavam Celebrations</a>	</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="https://www.youtube.com/watch?v=Yeh_r1gvLlE" target="_blank">Brahmotsavam Celebrations Day 2 - Shesha Vahana Seva</a>	</td>
  </tr> 
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="https://docs.google.com/file/d/0B1Ejl8oGweXXN2VpclU3TlpTeHM/edit" target="_blank">Brahmotsavam Celebrations Day 3 - Kalyanam, Garuda Vahana Seva</a>	</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="https://docs.google.com/file/d/0B1Ejl8oGweXXN3JqYnI3bDU4eHM/edit" target="_blank">Brahmotsavam Celebrations Day 4 - Gayathri Homam, Chakra Snanam</a>	</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="https://docs.google.com/file/d/0B1Ejl8oGweXXai1IY1J5eklrTE0/edit" target="_blank">Brahmotsavam Celebrations Day 5 - Shiva Parivar Abhishekam</a>	</td>
  </tr>
   <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="https://docs.google.com/file/d/0B1Ejl8oGweXXc2U0OHo3VFNQZ0E/edit" target="_blank">Brahmotsavam Celebrations Day 6 - Sri PushpaYaaga Homam, Surya Prabha Vahana Seva</a>	</td>
  </tr>

  	<tr>
		<td> <br /> </td>
	</tr>
  
  <tr>
    <td colspan="2" align="left" valign="top">
	<b><font size="+1">&nbsp; Past Media Coverage</font></b>
    </td>
  </tr>  
    <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="http://www.youtube.com/watch?v=C98yABQl_Bw" target="_blank">Ugadi 2014 Celebrations (Forward video to 23 mins)</a>	</td>
  </tr> 
  <tr>
    <td colspan="2" align="left" valign="top" style="padding-left:10px;" class="txtLink1">
	<a href="http://youtu.be/s_JMQk7scvk" target="_blank">Sri Krishna Janmashtami 2014</a>	</td>
  </tr> 

	<tr>
		<td> <br /> </td>
	</tr>
  <tr>
    <!-- <td colspan="2" align="left" valign="top" class="heading_txt"> -->
    <td colspan="2" align="left" valign="top">
	<b><font size="+1">&nbsp; Prana Prathishta & Maha Kumbhabhishekam Celebrations TV Coverage</font></b>
    </td>
  </tr>

	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.youtube.com/watch?v=1GgtbyLiVRc" target="_blank">Maha Kumbhabhishekam Celerations coverage by TV9 - Part 1</a>	</td>
	</tr>

	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.youtube.com/watch?v=oSbVavI-ti8" target="_blank">Maha Kumbhabhishekam Celerations coverage by TV9 - Part 2</a>	</td>
	</tr>

	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.youtube.com/watch?v=-q_dZkx8b0g" target="_blank">Maha Kumbhabhishekam Celerations coverage by TV9 - Part 3</a>	</td>
	</tr>

	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://youtu.be/EjTwp496-Io" target="_blank">Maha Kumbhabhishekam Celerations coverage by TV5</a>	</td>
	</tr>

	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.youtube.com/watch?v=HqpPWO2g__k" target="_blank">Dwajasthambha Pratishta Celerations coverage by TV9</a>	</td>
	</tr>
	
	<tr>
		<td> <br /> </td>
	</tr>
	  <tr>
    <td colspan="2" align="left" valign="top">
	<b><font size="+1">&nbsp; Past Events</font></b>
    </td>
  </tr> 
	
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a class="txtLink" href="http://www.vikatan.com/vc/2008/oct/vcinner.asp?articleid=7249">Sri Venkateswara Swamy birthday with Udayaasthamana Seva News from Vikatan</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.namastheandhra.com/newsdetails.asp?newsid=2554">Sri Venkateswara Swamy birthday with Udayaasthamana Seva News from Namasthe Andhra</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://teluguone.com/nrinews/index.jsp?filename=SriVariBrahmotsavaluatColorado.html">Sri Venkateswara Swamy birthday with Udayaasthamana Seva News from Teluguone</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.andhrajyothy.com/latestmainshow.asp?qry=/2008/jul/23new29">Guru Pournami News from Andhrajyothy</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.eenadu.net/story.asp?qry1=31&amp;reccount=32">Guru Pournami News from Eenadu</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.teluguone.com/nrinews/index.jsp?filename=gurupournami.html">Guru Pournami News from Teluguone</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a href="http://www.teluguone.com/nrinews/index.jsp?filename=SriRama.html">Seetha Rama Kalyanam News from Teluguone</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a target="_blank" href="/Event News/SVTC_RamaNavami_Eenadu.pdf">Seetha Rama Kalyanam News from Eenadu</a>	</td></tr>
	<tr>
    <td align="left" valign="top" style="padding-left:10px;" class="txtLink">
	<a target="_blank" href="/Event News/SVTC_RamaNavami_Andhrajyothy.pdf">Seetha Rama Kalyanam News from Andhrajyothy</a>	</td></tr>
	<tr>
	  <td align="left" valign="top" style="padding-left:10px;" class="txtLink">&nbsp;</td>
	  </tr>
	<a target="_blank" href="../../../../../../SVTC_RamaNavami_Andhrajyothy.pdf"></a>
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