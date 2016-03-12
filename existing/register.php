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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Registration</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
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

// Check for a firstname.
if (empty($_POST['firstname'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your first name!</p>';
	}
} else {
	$firstname=ucwords(strtolower($_POST['firstname']));
}

// Check for a lastname.
if (empty($_POST['lastname'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your last name!</p>';
	}
} else {
	$lastname=ucwords(strtolower($_POST['lastname']));
}

// Check for address
if (empty($_POST['address1'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your address!</p>';
	}
} else {
	$address1=ucwords(strtolower($_POST['address1']));
	$address2=ucwords(strtolower($_POST['address2']));
	$address3=ucwords(strtolower($_POST['address3']));
}

// Check for city
if (empty($_POST['city'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your city!</p>';
	}
} else {
	$city=ucwords(strtolower($_POST['city']));
}

if ($_POST['state'] == "  " && $_POST['otherstate'] == "") {
	$np = FALSE;
	if ($message == NULL ) {
		$message .= '<p>State in USA and state from other country can both not be blank!</p>';
	}
}

if ($_POST['state'] != "  " && $_POST['otherstate'] != "") {
	$np = FALSE;
	if ($message == NULL ) {
		$message .= '<p>Make state in USA blank when choosing a state another country!</p>';
	}
}

$state=$_POST['state'];
$otherstate=ucwords(strtolower($_POST['otherstate']));

$country_cd=$_POST['country_cd'];


// Check for zip
if (empty($_POST['zip'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your zip!</p>';
	}
} else {
	$zip=$_POST['zip'];
}

// Check for phone1
if (empty($_POST['phone1'])) {
	$u = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter your phone!</p>';
	}
} else {
	$phone1=$_POST['phone1'];
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

$email_sub=$_POST['email_sub'];

// Check for username
if (empty($_POST['username'])) {
	$p = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>You forgot to enter an username!</p>';
	}
} else {
	$username=strtolower($_POST['username']); ;
}

// Check for password.
if (empty($_POST['password1'])) {
	$p = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>You forgot to enter a password!</p>';
	}
} else {
	$password1=$_POST['password1'];
}

// Check for a password and match against the confirmed password.
if (empty($_POST['password2'])) {
	$np = FALSE;
	if ($message == NULL ) {
	    $message .= '<p>You forgot to enter the confirmation for your password!</p>';
	}
} else {
	if ($_POST['password1'] != $_POST['password2']) {
		$np = FALSE;
	    if ($message == NULL ) {
		    $message .= '<p>Your passwords do not match!</p>';
		}
	}
}

// DB based validation starts here
 $query = "select member_id from members where first_name = '$firstname' and last_name = '$lastname'";
 $result = @mysql_query ($query); // Run the query.
 $num = mysql_num_rows ($result);

 if ( $num > 0 ) {
	$np = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>Member with same first and last name already exists!</p>';
	}
 }

 $query = "select member_id from members where email_address = '$email'";
 $result = @mysql_query ($query); // Run the query.
 $num = mysql_num_rows ($result);

 if ( $num > 0 ) {
	$np = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>Member with this email address already exists!</p>';
	}
 }

 $query = "select member_id from users where user_name = '$username'";
 $result = @mysql_query ($query); // Run the query.
 $num = mysql_num_rows ($result);

 if ( $num > 0 ) {
	$np = FALSE;
	if ($message == NULL ) {
	   $message .= '<p>Username has already been taken. Enter a different name!</p>';
	}
 }

 $middlename=ucwords(strtolower($_POST['middlename']));
 $gothram_id=$_POST['gothram'];
 $nakshatram_id=$_POST['nakshatram'];
 $phone2=$_POST['phone2'];
 $password2=$_POST['password2'];

 if ($message == NULL ) {
     if ( $state == "  " )
        $state_of_residence = $otherstate;
     else
        $state_of_residence = $state;

     $curr_max_member_id = 0;
     $query = "select max(member_id) from members" ;
     $result = @mysql_query ($query); // Run the query.
	 $num = mysql_num_rows ($result);
	 $row = mysql_fetch_array($result, MYSQL_NUM);
     $curr_max_member_id=$row[0];

     $member_id = $curr_max_member_id + 1;

     $query="insert into members (member_id,first_name, middle_name,last_name,address1,address2,address3,city,state,zip,country_cd,phone,phone2,email_address,gothram_id,nakshatram_id)
     values ('".$member_id."','".$firstname."','".$middlename."','".$lastname."','".$address1."','".$address2."','".$address3."',
     '".$city."','".$state_of_residence."','".$zip."','".$country_cd."','".$phone1."','".$phone2."','".$email."','".$gothram_id."',
     '".$nakshatram_id."')";

     mysql_query($query) or die('Error updating the DB' . mysql_error());

     $query = "select member_id from members where ( first_name = '$firstname' and last_name = '$lastname' and email_address = '$email' )";
     $result = @mysql_query ($query); // Run the query.
     $num = mysql_num_rows ($result);
     $row = mysql_fetch_array($result, MYSQL_NUM);
     $member_id=$row[0];
     $password = crypt(trim($password1));

     $query="insert into users values ('".$member_id."','".$username."','".$password."')";
     mysql_query($query) or die('Error inserting into users' . mysql_error());

     if ($email_sub == "Y") {
          $query="insert into subscriptions values ('".$firstname."','".$lastname."','".$email."')";
          mysql_query($query) or die('Error inserting into email_subscription' . mysql_error());
     }

     mysql_close();

     $message .= "User registration was successful";

}
else {
     $color_of_message = "red";
}

?>	</td>
  </tr>
 <tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td style="padding-left:10px;"><center><font color="<?php echo $color_of_message; ?>"><?php echo $message; ?></font></center></td>
		</tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td> <b>&nbsp;</b> </td></tr>
		<tr><td align="center">
		<form  action="<?php if ($message != "User registration was successful" ) { echo 'registerpage.php'; } else {echo 'homepage.php';} ?>" method="post">
<input name="firstname" class="input" type="hidden" value="<?php echo $firstname; ?>" >
<input name="middlename" class="input" type="hidden" value="<?php echo $middlename; ?>" >
<input name="lastname" class="input" type="hidden" value="<?php echo $lastname; ?>" >
<input name="address1" class="input" type="hidden" value="<?php echo $address1; ?>" >
<input name="address2" class="input" type="hidden" value="<?php echo $address2; ?>" >
<input name="address3" class="input" type="hidden" value="<?php echo $address3; ?>" >
<input name="city" class="input" type="hidden" value="<?php echo $city; ?>" >
<input name="state" class="input" type="hidden" value="<?php echo $state; ?>" >
<input name="otherstate" class="input" type="hidden" value="<?php echo $otherstate; ?>" >
<input name="country_cd" class="input" type="hidden" value="<?php echo $country_cd; ?>" >
<input name="zip" class="input" type="hidden" value="<?php echo $zip; ?>" >
<input name="phone1" class="input" type="hidden" value="<?php echo $phone1; ?>" >
<input name="phone2" class="input" type="hidden" value="<?php echo $phone2; ?>" >
<input name="email" class="input" type="hidden" value="<?php echo $email; ?>" >
<input name="email_sub" class="input" type="hidden" value="<?php echo $email_sub; ?>" >
<input name="username" class="input" type="hidden" value="<?php echo $username; ?>" >
<input name="password1" class="input" type="hidden" value="<?php echo $password1; ?>" >
<input name="password2" class="input" type="hidden" value="<?php echo $password2; ?>" >
<input name="gothram" class="input" type="hidden" value="<?php echo $gothram_id; ?>" >
<input name="nakshatram" class="input" type="hidden" value="<?php echo $nakshatram_id; ?>" >

<input class="btnStyle" name="Back" type="submit" value="Back">
</form>
		</td></tr>	
		<tr><td> <b>&nbsp;</b> </td></tr>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>
