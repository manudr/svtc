<?php  
require_once ('./session.php'); 
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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Feedback</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="70%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td><b>Please provide your valuable feedback to SVTemple Colorado </b></td>
    </tr>
  <tr>
    <td>
	<?php

			function is_valid_email($email) {
				return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
			}
			//$displaytext="\nForm was not submitted..";
			if(isset($_POST['submit']))
			{
				//$displaytext="\nForm was submitted..";
				$name=$_POST['name'];
				$email=$_POST['email'];
				$subject=$_POST['subject'];
				$message=$_POST['message'];
				//$message = trim($message);
				//$message = stripslashes($message);
				//$message = htmlspecialchars($message);

				if (!is_valid_email($email)) 
				{
					$displaytext.="The e-mail address provided is not valid.";
				}
				if( ($message == null) || (strlen($message) == 0) )
				{
					$displaytext .="No message was provided.";
				}
				else
				{
					$to = 'cnarumanchi@yahoo.com';
					//define the subject of the email
					$newsubject = "Feedback:" . $subject;
					//create a boundary string. It must be unique
					//so we use the MD5 algorithm to generate a random hash
					$random_hash = md5(date('r', time()));
					//define the headers we want passed. Note that they are separated with \r\n
					$headers = "From: $email\r\nReply-To: info@svtempleco.org\r\nCC:\r\n";
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					// To send HTML mail, the Content-type header must be set
					//add boundary string and mime type specification
					//$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";
					//define the body of the message.
					$newmessage = "Name:$name\n\n" . $message;
					//send the email
					//$mail_sent = @mail( $to, $newsubject, $newmessage, $headers);
					$mail_sent = @mail( $to, $newsubject, $message, $headers);
					//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
					if($mail_sent)
						$displaytext="\nYour feedback has been sent.Thank you!";
					else
						$displaytext="\nError in sending the feedback.Please try again at a later time.Thank you!";	
				}
				unset($_POST['submit']);
			}
	?>
	<form action='<?php echo $_SERVER['PHP_Self']; ?>' method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>Name:</td>
        <td><input class="txtBox" name="name" type="text" value='<?php if(isset($name)){echo $name; } ?>' size="40"></input><font color="red">&nbsp;(required)</font></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input class="txtBox" name="email" type="text" value='<?php if(isset($email)){echo $email; } ?>' size="40"></input></td>
      </tr>
      <tr>
        <td>Subject:</td>
        <td><input class="txtBox" name="subject" type="text" value='<?php if(isset($subject)){echo $subject; } ?>' size="40"></input></td>
      </tr>
      <tr>
        <td valign="top">Message:</td>
        <td valign="top"><TEXTAREA class="txtBox" NAME="message" COLS=31 ROWS=8><?php if(isset($message)){echo $message; } ?></TEXTAREA> <font color="red">(required)</font></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;<center> <font color="red"><?php echo "$displaytext"; ?></font></center></td>
        </tr>
      <tr>
        <td colspan="2" align="center"><input class="btnStyleXLong" type="submit" name="submit" value="Submit"></input></td>
      </tr>
	  <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
    </table>
	</form>
	</td>
    </tr>
</table>

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
