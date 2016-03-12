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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Unregister User</td>
  </tr>
  <tr><td style="padding-left:10px;">
   *Note: Membership to this portal is Public.
Once your account information has been submitted, you will be immediately granted access to the portal environment.All fields marked with red arrow are required.
	</td>
  </tr>
  <tr><td>&nbsp;
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
	   $message .= '<p>You forgot to enter the password!</p>';
	}
} else {
	$current_password=$_POST['current_password'];
}

$encrypted_current_password = crypt(trim($current_password),$old_password);

if ($encrypted_current_password != $old_password) {
	$np = FALSE;
    if ($message == NULL ) {	
	    $message .= '<p>Password entered is not valid!</p>';
	}
}

$unregister_conf=$_POST['unregister_conf'];

if ($message == NULL ) {
     if ( $unregister_conf == 'Y' ) {
         $password = crypt(trim($current_password));
         $query="select member_id from users where user_name = '$username'";
         $result = @mysql_query ($query); // Run the query.
         $num = mysql_num_rows ($result);

         if ( $num > 0 ) {
               $row = mysql_fetch_array($result, MYSQL_NUM);
	           $member_id = $row[0];

	           $query="delete from subscriptions where email_address = ( select email_address from members where member_id = '$member_id')";
               mysql_query($query) or die('Error deleting email subscription' . mysql_error());
               $query="delete from members where member_id = '$member_id'";
               mysql_query($query) or die('Error deleting member' . mysql_error());
	           $query="delete from users where member_id = '$member_id'";
               mysql_query($query) or die('Error deleting user' . mysql_error());
         }

         mysql_close();
         session_name ('YourVisitID');

         if (!isset($_SESSION))  {
            session_name ('YourVisitID');
            session_start();
         }

         unset($_SESSION);
         session_destroy();
         $message .= "User has been unregistered";
     }
}
else {
     $color_of_message = "red";
}

?>
  </td></tr>
   <tr><td><center><font color="<?php echo $color_of_message; ?>"><?php echo $message; ?></font></center> </td></tr>
    <tr><td>&nbsp;</td></tr>
	 <tr><td align="center">
	 <form  action="<?php if ($message != "User has been unregistered" ) { echo 'unregisterpage.php'; } else {echo 'homepage.php';} ?>" method="post">
<input name="username" class="input" type="hidden" value="<?php echo $username; ?>" >
<input name="old_password" class="input" type="hidden" value="<?php echo $old_password; ?>" >
<input name="current_password" class="input" type="hidden" value="<?php echo $current_password; ?>" >
<input name="unregister_conf" class="input" type="hidden" value="<?php echo $unregister_conf; ?>" >
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
