<?php
require_once ('./session.php');
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
<!-- Process the form -->
<?php

$displaytext = "Unknown Error! Please try again!";

$subject=$_POST['subject'];
$emailaddresses=$_POST['bcc'];
$message=$_POST['message'];
// Send welcome email.
			$to='communications@svtempleco.org';
			//define the receiver of the email
			$bcc = $emailaddresses;
			for( $k=0; $k<200; $k++)
				$bcc = ',' . $bcc . ',';
			echo $bcc;
			//create a boundary string. It must be unique
			//so we use the MD5 algorithm to generate a random hash
			$random_hash = md5(date('r', time()));
			//define the headers we want passed. Note that they are separated with \r\n
			// To send HTML mail, the Content-type header must be set
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: communications@svtempleco.org\r\nReply-To: communications@svtempleco.org\r\nBcc:";
			$headers .= $bcc;
			$headers .= "\r\n";

			//add boundary string and mime type specification
			//$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";
			//define the body of the message.
			//$message = 'This is test of sending bulk email for newsletters.Please visit this web site frequently to learn more about what is going on regarding this effort.<br><br>Newsletters and latest happenings will be be forwarded to your email periodically.<br><br>Thank you,
			//<br>SV Temple of Colorado Committee';
			//send the email
			$message .="<br>This message was sent by Sri Venkateswara Temple of Colorado web portal administrator. We respect your privacy. To unsubscribe from
			this list, please visit the Website at http://www.svtempleco.org/subscribepage.php and unsubscribe <br>";
		
			$activeUserId = $_SESSION['username'];

			if( $activeUserId == 'svtc_com' || $activeUserId == 'admin')
			{
				$mail_sent = @mail( $to, $subject, $message, $headers);
				//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
				if($mail_sent) 
					$displaytext = "<h4 style='color:#2c9923'>Mail was sent successfully!</h4>";
				else
					$displaytext="<h4 style='color:#FF0000'>Sorry..Mail sending has failed</h4>";
			}
			else
			{
					$displaytext="<h4 style='color:#FF0000'>Sorry..You are not authorized to send email. This attempt will be logged for security reasons.</h4>";
			}
?>

<div class="contentContainer">

<div class="rightBg" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">SVTemple Colorado Events Management Program</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<div class="future">
			<table width="100%" border="0" cellspacing="1" cellpadding="1">
			<tr><td>
	<b><?php echo $displaytext; ?></b>
	</td></tr></table></div>
		</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;"><center><h4><a href="bulkemail.php">Back to Bulk Mail Program</a></h4></center></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">&nbsp;</td>
  </tr>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>