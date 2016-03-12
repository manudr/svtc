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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Member Login 
</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<?php # Script 11.4 - mysql_connect.php

// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.
require_once ('./mysql_connect.php'); // Connect to the database.
$message = NULL; // Create an empty new variable.

// Function for escaping and trimming form data.
function escape_data ($data) {
	global $dbc;
	if (ini_get('magic_quotes_gpc')) {
		$data = stripslashes($data);
	}
	return mysql_real_escape_string (trim ($data), $dbc);
} // End of escape_data() function.

$color_of_message = "blue";

// Check for a firstname.
if (empty($_POST['username'])) {
	$u = FALSE;
	$message .= '<p><font color="red">You forgot to enter your username!</font></p>';
} else {
	$username=strtolower($_POST['username']);
}

// Check for a lastname.
if (!isset($message))
{
  if(empty($_POST['password'])) {
	$u = FALSE;
	$message .= '<p><font color="red">You forgot to enter your password!</font></p>';
} else {
	$password=$_POST['password'];
}
}
if (!isset($message))
{
	$query = "select password from users where user_name = '$username'" ;
	$result = @mysql_query ($query);
	$num = mysql_num_rows ($result);

	if ( $num == 0 ) {
		$u = FALSE;
		$message .= '<p><font color="red">No such user exists.Please register before logging in..!</font></p>';
	}
}

if (!isset($message))
{
	$row = mysql_fetch_array($result, MYSQL_NUM);
	$encrypt_pass_in_db=$row[0];
	$encrypt_pass = crypt($password , $encrypt_pass_in_db );

	if ( $encrypt_pass != $encrypt_pass_in_db ) {
		$u = FALSE;
		$message .= '<p><font color="red">Invalid Username or password entered!</font></p>';
	}
}

if (!isset($message))
{
	$query = "select a.first_name, a.last_name from members a, users b where b.user_name = '$username' and a.member_id = b.member_id" ;
	$result = @mysql_query ($query);
	$num = mysql_num_rows ($result);

	if ( $num == 0 ) {
		$u = FALSE;
		$message .= '<p><font color="red">Invalid Username or password entered!</font></p>';
	}
}

if (!isset($message))
{
	$row = mysql_fetch_array($result, MYSQL_NUM);
	$firstname=$row[0];
	$lastname=$row[1];

	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['username'] = $username;
	$_SESSION['loggedin'] = time();

	$message = "<p>Welcome $firstname $lastname. You have successfully logged in!</p>";
}
else {
     $color_of_message = "red";
}

mysql_close();

?>
</td>
  </tr>
 <tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td style="padding-left:10px;"><center><font color="<?php echo $color_of_message; ?>"><?php echo $message; ?></font></center></td>
		</tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td align="center">
<form  action="<?php if (strpos($message,"You have successfully logged in") == false ) { echo 'loginpage.php'; } else {echo 'homepage.php';} ?>" method="post">
<input name="username" class="input" type="hidden" value="<?php echo $username; ?>" >
<input name="password" class="input" type="hidden" value="<?php echo $password; ?>" >
<input class="btnStyle"  name="Back" type="submit" value="Back">
</form>
</td></tr>	
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>
