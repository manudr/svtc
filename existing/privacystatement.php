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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Privacy Statement</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	SV Temple is committed to protecting your privacy and developing technology that gives you the most powerful and safe online experience. This Statement of Privacy applies to the SV Temple Web site and governs data collection and usage. By using the SV Temple website, you consent to the data practices described in this statement.

<br><br>
<strong>Collection of your Personal Information</strong><br>
<br>

SV Temple collects personally identifiable information, such as your e-mail address, name, home or work address or telephone number. SV Temple also collects anonymous demographic information, which is not unique to you, such as your ZIP code, age, gender, preferences, interests and favorites.

There is also information about your computer hardware and software that is automatically collected by SV Temple. This information can include: your IP address, browser type, domain names, access times and referring Web site addresses. This information is used by SV Temple for the operation of the service, to maintain quality of the service, and to provide general statistics regarding use of the SV Temple Web site.

Please keep in mind that if you directly disclose personally identifiable information or personally sensitive data through SV Temple public message boards, this information may be collected and used by others. Note: SV Temple does not read any of your private online communications.

SV Temple encourages you to review the privacy statements of Web sites you choose to link to from SV Temple so that you can understand how those Web sites collect, use and share your information. SV Temple is not responsible for the privacy statements or other content on Web sites outside of the SV Temple and SV Temple family of Web sites.

<br><br>
<strong>Use of your Personal Information</strong><br>
<br>

SV Temple collects and uses your personal information to operate the SV Temple Web site and deliver the services you have requested. SV Temple also uses your personally identifiable information to inform you of other products or services available from SV Temple and its affiliates. SV Temple may also contact you via surveys to conduct research about your opinion of current services or of potential new services that may be offered.

SV Temple does not sell, rent or lease its customer lists to third parties. SV Temple may, from time to time, contact you on behalf of external business partners about a particular offering that may be of interest to you. In those cases, your unique personally identifiable information (e-mail, name, address, telephone number) is not transferred to the third party. In addition, SV Temple may share data with trusted partners to help us perform statistical analysis, send you email or postal mail, provide customer support, or arrange for deliveries. All such third parties are prohibited from using your personal information except to provide these services to SV Temple, and they are required to maintain the confidentiality of your information.

SV Temple does not use or disclose sensitive personal information, such as race, religion, or political affiliations, without your explicit consent.

SV Temple keeps track of the Web sites and pages our customers visit within SV Temple, in order to determine what SV Temple services are the most popular. This data is used to deliver customized content and advertising within SV Temple to customers whose behavior indicates that they are interested in a particular subject area.

SV Temple Web sites will disclose your personal information, without notice, only if required to do so by law or in the good faith belief that such action is necessary to: (a) conform to the edicts of the law or comply with legal process served on SV Temple or the site; (b) protect and defend the rights or property of SV Temple; and, (c) act under exigent circumstances to protect the personal safety of users of SV Temple, or the public.

<br><br>
<strong>Use of Cookies</strong><br>
<br>

The SV Temple Web site use "cookies" to help you personalize your online experience. A cookie is a text file that is placed on your hard disk by a Web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you.

One of the primary purposes of cookies is to provide a convenience feature to save you time. The purpose of a cookie is to tell the Web server that you have returned to a specific page. For example, if you personalize SV Temple pages, or register with SV Temple site or services, a cookie helps SV Temple to recall your specific information on subsequent visits. This simplifies the process of recording your personal information, such as billing addresses, shipping addresses, and so on. When you return to the same SV Temple Web site, the information you previously provided can be retrieved, so you can easily use the SV Temple features that you customized.

You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the interactive features of the SV Temple services or Web sites you visit.

<br><br>
<strong>Security of your Personal Information</strong><br>
<br>

SV Temple secures your personal information from unauthorized access, use or disclosure. SV Temple secures the personally identifiable information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use or disclosure. When personal information (such as a credit card number) is transmitted to other Web sites, it is protected through the use of encryption, such as the Secure Socket Layer (SSL) protocol.

<br><br>
<strong>Changes to this Statement</strong><br>
<br>

SV Temple will occasionally update this Statement of Privacy to reflect company and customer feedback. SV Temple encourages you to periodically review this Statement to be informed of how SV Temple is protecting your information.

<br><br>
<strong>Contact Information</strong><br>
<br>

SV Temple welcomes your comments regarding this Statement of Privacy. If you believe that SV Temple has not adhered to this Statement, please contact SV Temple at webmaster@svtempleco.org. We will use commercially reasonable efforts to promptly determine and remedy the problem.
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

