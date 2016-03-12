<?php  

require_once ('./session.php'); 
require_once ('./mysql_connect.php')

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
    <td width="226%" align="left" valign="top" class="headingmain_txt">SVTemple Colorado Mailing List</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<!-- Start of FORM -->

<!-- Process the form -->
<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$subunsub=$_POST['subunsub'];

function is_valid_email($email) {
  return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
}

if (!is_valid_email($email)) {
	$displaytext="The e-mail address provided is not valid.Please try again.Thank you!";
}
else
{


// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
$selectquery="select * from subscriptions where email_address='$email'";
$selectresult=mysql_query($selectquery)or die('Error querying the DB' . mysql_error());

$selectresultrows=mysql_numrows($selectresult);
	if( $subunsub == "sub")
	{
		if($selectresultrows != 0)
		{
			$displaytext="Your e-mail address is already in the mailing list.Thank you!";
		}
		else
		{
			$query="insert into subscriptions values ('".$firstname."','".$lastname."','".$email."')";
			mysql_query($query) or die('Error updating the DB' . mysql_error());
			$displaytext="Thank you for joining svtempleco.org's mailing list.";
			// Send welcome email.
			//define the receiver of the email
			$to = $email;
			//define the subject of the email
			$subject = "Thank you for joining svtempleco.org's mailing list";
			//create a boundary string. It must be unique
			//so we use the MD5 algorithm to generate a random hash
			$random_hash = md5(date('r', time()));
			//define the headers we want passed. Note that they are separated with \r\n
			$headers = "From: info@svtempleco.org\r\nReply-To: info@svtempleco.org\r\nCC:communications@svtempleco.org\r\n";
			// To send HTML mail, the Content-type header must be set
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			//add boundary string and mime type specification
			//$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";
			//define the body of the message.
			$message = 'Welcome to SVtempleco.org. Sri Venkateswara Temple has been long cherished dream of people of Colorado. There are tremendous efforts underway to build a new Venkateswara Temple. Please visit this web site frequently to learn more about what is going on regarding this effort.<br><br>Newsletters and latest happenings will be be forwarded to your email periodically.<br><br>Thank you,
			<br>SV Temple of Colorado Committee';
			//send the email
			$mail_sent = @mail( $to, $subject, $message, $headers);
			//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
			//echo $mail_sent ? "Mail sent" : "Mail failed";
		}
	}
	else
	{
		if($selectresultrows == 0)
		{
			$displaytext="Your e-mail address was not in the current mailing list.So,cannot unsubscribe.Thank you!";
		}
		else
		{
			$query="delete from subscriptions where email_address='$email'";
			mysql_query($query) or die('Error updating the DB' . mysql_error());
			$displaytext="You have been removed from svtempleco.org's mailing list.Sorry for any inconvenience.";
		}
	}

mysql_close();
}

?>	</td>
  </tr>
 <tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td style="padding-left:10px;"><?php echo $displaytext; ?></td>
		</tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <center><a href="subscribepage.php">Back to Subscription Page</a> </center></td></tr>	
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>
