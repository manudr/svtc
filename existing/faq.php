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
    <td width="226%" align="left" valign="top" class="headingmain_txt">FAQ</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="question">Why would I need to become a member in order to vote in the up coming elections for Board of Trustees?

</td>
        </tr>
        <tr>
          <td class="answer">The Board of Trustees represents all the members of the temple and act in their best interest. Like any organization, we believe that the members who have contributed and helped to build this temple should have a say in who gets elected to the Board of Trustees and represent their interests. The elections were held on November 17th, 2007. All founding members of the temple are eligible to vote in these elections. There are certain criteria that must be met to compete in the elections. Please review guidelines document under Donate Web Page for directions on how to become founding members and contest in the elections for Board of Trustees.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">Is this temple in competition with Hindu Temple of Colorado?

</td>
        </tr>
        <tr>
          <td class="answer">No. This temple is not competing with Hindu Temple of Colorado or any other organization. The Indian community has grown significantly over the last 10 years in the Rocky mountain region. We believe there is enough support to build two temples. As a matter of fact, SVTC has not only secured 8 acres of land for the temple construction, it also has obtained over $500K in commitments since May 2007. The goal of Sri Venkateswara Temple of Colorado is to build a temple for Lord Venkateswara per agama sasthras.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">Is this a separate temple?

</td>
        </tr>
        <tr>
          <td class="answer">Yes. This is a separate effort and not affiliated with the Hindu Temple of the Rockies.<br /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">Will I need to make a sizable contribution to become part of this temple?

</td>
        </tr>
        <tr>
          <td class="answer">No. Like any other organization in its infancy, SVTC needs contributions to build the temple. In order to raise funds for the temple, the interim committee has set some guidelines to participate in the board of trustees? elections, which includes contribution limits. However, any one willing and interested are welcome to serve on one of the several committees (fund raising, architecture etc.). The information about various committees will be communicated once the permanent board of trustees is in place.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">Will SVTC be too far from my house/work area?



</td>
        </tr>
        <tr>
          <td class="answer">The site to build SVTC is located in Castle Rock. The site can be reached by taking Founder Park Exit (Factory Outlet Malls) and going east for about 5 miles. It is within 15 minutes drive from DTC area. This site is donated to SVTC and consists of 8 acres nestled in the quaint location with Pikes Peak as the background. The size of the land also provides great opportunity to expand in the future and build separate temples for other deities.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">Is it true that SVTC will only house Lord Venkateswara on its premises?



</td>
        </tr>
        <tr>
          <td class="answer">No. The primary focus of the committee is to build a temple dedicated to Lord Venkateswara. However, the committee has secured 8 acres of land in Castle Rock. This will provide great opportunity to expand in the future. Once the infrastructure is complete and temple is built for Lord Venkateswara, the committee is planning to build separate temples for other deities based on the interest from the community.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">What is the vision of the Sri Venkateswara Temple of Colorado?



</td>
        </tr>
        <tr>
          <td class="answer">Our philosophy and vision is to build Sri Venkateswara Temple in Colorado, in the background of mighty Rockies with strict adherence to the principles of AGAMA SASHTRAS as described in Vedas. It is also our philosophy and vision to install the statues of Lord VENKATESWARA along with SRI DEVI and BHUDEVI, with strict adherence to Agama Sashtras, under the directives of experts from SRI VENKATESWAR TEMPLE OF TIRUPATHI AND TIRUMALA.<br /><br />

The temple will adopt and follow the various procedures of worship and activities on day to day basis with strict adherence to the principles and traditions by following the agama sashtras and the directives from the experts at TTD DEVASTHANAMS, TIRUPATHI. In other words, simply put we would like to create the same atmosphere as we have experienced when we visited Sri VENKATESWARA TEMPLE IN TIRUPATHI.<br /><br />

We invite the like minded people who understand and believe in these principles and philosophies to join the hands with us as the founding members of this divine institution. Again we would like to stress how gratifying experience it will be to participate in this divine cause and once in a life time opportunity to be part of the team of founding members.
</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td class="question">Why Venkateswara temple ?
</td>
        </tr>
        <tr>
          <td class="answer">Sri Venkateswara Temple has been long cherished dream of people of Colorado. The desire of the community is to have a temple that is reminiscent of the rituals and poojas performed at Tirumala Tirupati Devastanam (TTD). As per Agama Sasthras, Lord Venkateswara can be the only main deity in a Venkateswara temple.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
		
		
      </table></td>
  </tr>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>