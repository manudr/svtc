<?php require_once ('./session.php'); ?>
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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Forgot username or password</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	*Note: Membership to this portal is Public.
Once your account information has been submitted, you will be immediately granted access to the portal environment.All fields marked with red arrow are required.	</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;"><center><font color="<?php echo $color_of_message; ?>"><?php echo $message; ?></font></center></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">&nbsp;
	<?php # Script 11.4 - mysql_connect.php

// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.
require_once ('./mysql_connect.php'); // Connect to the database.
$message = NULL; // Create an empty new variable.
$color_of_message = "blue";

// Function for escaping and trimming form data.
function escape_data ($data) {
	global $dbc;
	if (ini_get('magic_quotes_gpc')) {
		$data = stripslashes($data);
	}
	return mysql_real_escape_string (trim ($data), $dbc);
} // End of escape_data() function.

function generatePassword($length=6,$level=2){

   list($usec, $sec) = explode(' ', microtime());
   srand((float) $sec + ((float) $usec * 100000));

   $validchars[1] = "0123456789abcdfghjkmnpqrstvwxyz";
   $validchars[2] = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $validchars[3] = "0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%&*()-=+/";

   $password  = "";
   $counter   = 0;

   while ($counter < $length) {
     $actChar = substr($validchars[$level], rand(0, strlen($validchars[$level])-1), 1);

     // All character must be different
     if (!strstr($password, $actChar)) {
        $password .= $actChar;
        $counter++;
     }
   }

   return $password;
}

// Check for email
if (empty($_POST['email'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your email!</p>';
	}
} else {
	$email=strtolower($_POST['email']);
}

if(!eregi("^[a-z0-9_.]+@[a-z0-9\-]+\.[a-z\-\.]+$",$email)) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>Invalid email address entered!</p>';
	}
}

// DB based validation starts here
 $query = "select a.member_id, a.first_name, a.last_name, b.user_name from members a, users b where a.email_address = '$email' and b.member_id = a.member_id";
 $result = @mysql_query ($query); // Run the query.
 $num = mysql_num_rows ($result);

 if ( $num == 0 ) {
	$np = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>There is no member with this email address!</p>';
	}
 }
 else {
     $row = mysql_fetch_array($result, MYSQL_NUM);
     $member_id=$row[0];
     $firstname=$row[1];
     $lastname=$row[2];
     $username=$row[3];
 }

 if ($message == NULL ) {
    $password_length = 8;
    $password_strength = 2;
    $password = generatePassword($password_length,$password_strength);
    $encrypted_password = crypt(trim($password));
    $query="update users set password = '$encrypted_password' where member_id = '$member_id'";
    mysql_query($query) or die('Error updating users table' . mysql_error());
    mysql_close();

    $message .= "An email has been sent to you with the user information on file";

	//Now formulate and send the email
	$to = $email;
	$subject = "Here is your username and password";
	$random_hash = md5(date('r', time()));
	$headers = "From: info@svtempleco.org\r\nReply-To: info@svtempleco.org\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$email_message = "Dear " . $firstname . " " . $lastname . ", <br> Your username is " . $username . ". Your password is " . $password . ".\r\nPlease change your password after logging" .
	 " into the site. Thanks for being a valued member of the SV Temple of Colorado";

	$mail_sent = @mail( $to, $subject, $email_message, $headers);
}
else {
     $color_of_message = "red";
}

?>	</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<form  action="<?php if ($message != "An email has been sent to you with the user information on file" ) { echo 'forgotuserpass.php'; } else {echo 'homepage.php';} ?>" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><input name="email" class="input" type="hidden" value="<?php echo $email; ?>" >
<input class="btnStyle" name="Back" type="submit" value="Back"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
	</form>	</td>
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