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

$displaytext = "";

$activeUserId = $_SESSION['username'];

if( $activeUserId != 'svtc_com' && $activeUserId != 'admin')
{
	$displaytext="Sorry..You are not authorized to send Email. This attempt will be logged for security reasons.";
}
else
{
	$BATCH_SIZE=90;
	$batchNo=1;
	$currEmailAddresses='';
	$currEmailCount=0;
	$subject=$_POST['subject'];
	$emailaddresses=$_POST['bcc'];
	$message=$_POST['message'];
	// Send welcome email.
	$to='communications@svtempleco.org';
	//define the receiver of the email
	$bcc = $emailaddresses;
	$random_hash = md5(date('r', time()));

	//send the email
	$message .="<br>This message was sent by Sri Venkateswara Temple of Colorado web portal administrator. We respect your privacy. To unsubscribe from this list, please visit the Website at http://www.svtempleco.org/subscribepage.php and unsubscribe <br>";
	
	// Now tokenize the email addresses into batch of 90
	$tok = strtok($emailaddresses, ",");

	while ($tok !== false) 
	{
		$currEmailAddresses.=$tok;
		$currEmailAddresses.=',';
		$tok = strtok(",");
		$currEmailCount++;
		if( $currEmailCount == $BATCH_SIZE )
		{
			//Send the batch out			
			$displaytext.="Trying to send Batch No:$batchNo<br>";
			$displaytext.="The EMails in this batch are<br>$currEmailAddresses<br>";
			// send now..
			//define the headers we want passed. Note that they are separated with \r\n
			// To send HTML mail, the Content-type header must be set
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: communications@svtempleco.org\r\nReply-To: communications@svtempleco.org\r\nBcc:";
			$headers .= $currEmailAddresses;
			$headers .= "\r\n";
			$mail_sent = @mail( $to, $subject, $message, $headers);
			//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
			if($mail_sent) 
				$displaytext = "Email was sent successfully for Batch No:$batchNo!";
			else
				$displaytext="Sorry..Email sending has failed for Batch No:$batchNo!";			
			$currEmailAddresses='';
			$currEmailCount=0;
			$batchNo++;
		}
	}
	// We might the last batch.. check to see if it not empty..Need to refactor the emailing code into its own function.. later..
	if( $currEmailAddresses != '')
	{
			//Send the batch out
			$displaytext.="Trying to send the Batch No:$batchNo<br>";
			$displaytext.="The EMails in this batch are<br>$currEmailAddresses<br>";
			//define the headers we want passed. Note that they are separated with \r\n
			// To send HTML mail, the Content-type header must be set
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: communications@svtempleco.org\r\nReply-To: communications@svtempleco.org\r\nBcc:";
			$headers .= $currEmailAddresses;
			$headers .= "\r\n";
				
			$mail_sent = @mail( $to, $subject, $message, $headers);
			//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
			if($mail_sent) 
				$displaytext.= "<h4 style='color:#2c9923'>Email was sent successfully for Batch No:$batchNo!</h4>";
			else
			
				$displaytext.="<h4 style='color:#FF0000'>Sorry..Email sending has failed for Batch No:$batchNo!</h4>";
	}
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
    <td align="left" valign="top" style="padding-left:10px;"><center><h4><a href="homepage.php">Back to Home page</a> </h4></center></td>
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
