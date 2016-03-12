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

$username = $_POST['username'];
$old_password=$_POST['old_password'];

// Check for current password.
if (empty($_POST['current_password'])) {
	$p = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>You forgot to enter the current password!</p>';
	}
} else {
	$current_password=$_POST['current_password'];
}


// Check for password.
if (empty($_POST['password1'])) {
	$p = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>You forgot to enter new password!</p>';
	}
} else {
	$password1=$_POST['password1'];
}

// Check for new password and match against the confirmed new password.
if (empty($_POST['password2'])) {
	$np = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter the confirmation for new password!</p>';
	}
} else {
	if ($_POST['password1'] != $_POST['password2']) {
		$np = FALSE;
	    if ($message == NULL ) {
		    $message .= '<p>Your passwords do not match!</p>';
		}
	}
}

$encrypted_current_password = crypt(trim($current_password),$old_password);

if ($encrypted_current_password != $old_password) {
	$np = FALSE;
    if ($message == NULL ) {
	    $message .= '<p>Current password entered is not valid!</p>';
	}
}

if ($current_password == $password1) {
	$np = FALSE;
    if ($message == NULL ) {
	    $message .= '<p>New password cannot be the same as the current password!</p>';
	}
}

$password2=$_POST['password2'];

if ($message == NULL ) {
     $password = crypt(trim($password1));
     $query="update users set password = '$password' where user_name = '$username'";
     mysql_query($query) or die('Error updating password ' . mysql_error());
     mysql_close();
     $message .= "Password has been changed";
}
else {
     $color_of_message = "red";
}

?>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">Change Password</td>
  </tr>
  <tr><td style="padding-left:10px;">
   *Note: Membership to this portal is Public.
Once your account information has been submitted, you will be immediately granted access to the portal environment.All fields marked with red arrow are required.
	</td>
  </tr>
  <tr><td>&nbsp;
  
  </td></tr>
   <tr><td><center><font color="<?php echo $color_of_message; ?>"><?php echo $message; ?></font></center>  </td></tr>
    <tr><td>&nbsp;</td></tr>
	 <tr><td align="center">
	 <form  action="<?php if ($message != "Password has been changed" ) { echo 'changepasswordpage.php'; } else {echo 'homepage.php';} ?>" method="post">
<input name="username" class="input" type="hidden" value="<?php echo $username; ?>" >
<input name="old_password" class="input" type="hidden" value="<?php echo $old_password; ?>" >
<input name="current_password" class="input" type="hidden" value="<?php echo $current_password; ?>" >
<input name="password1" class="input" type="hidden" value="<?php echo $password1; ?>" >
<input name="password2" class="input" type="hidden" value="<?php echo $password2; ?>" >
<input class="btnStyle" name="Back" type="submit" value="Back">
</form></td></tr>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>
