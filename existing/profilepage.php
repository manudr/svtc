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
<?php
            require_once ('./mysql_connect.php');
	        $otherstate = '';
	        $password1 = '';
	        $password2 = '';
			$firstname = '';
			$middlename = '';
			$lastname = '';
			$address1 = '';
			$address2 = '';
			$address3 = '';
			$city = '';
			$state = 'CO';
			$zip = '';
			$country_cd = 'US';
			$phone1 = '';
			$phone2 = '';
			$email = '';
			$previous_email = '';
			$gothram = 0;
			$nakshatram = 0;
			$member_id = 0;

	        if (isset($_SESSION['username']))  {
               $username = $_SESSION['username'];

               $query = "select a.first_name, a.middle_name, a.last_name, a.address1, a.address2, a.address3, a.city," .
                 "a.state, a.zip, a.country_cd, a.phone, a.phone2, a.email_address, a.gothram_id, a.nakshatram_id, a.member_id " .
                 "from members a, users b where b.user_name = '$username' and a.member_id = b.member_id";

               $result = @mysql_query ($query); // Run the query.
               $num = mysql_num_rows ($result);

               if ( $num > 0 ) {
                  $row = mysql_fetch_array($result, MYSQL_NUM);
	              $firstname = $row[0];
	              $middlename = $row[1];
	              $lastname = $row[2];
	              $address1 = $row[3];
	              $address2 = $row[4];
	              $address3 = $row[5];
	              $city = $row[6];
	              $state = $row[7];
	              $zip = $row[8];
	              $country_cd = $row[9];
	              $phone1 = $row[10];
	              $phone2 = $row[11];
	              $email = $row[12];
	              $previous_email = $row[12];
	              $gothram = $row[13];
	              $nakshatram = $row[14];
	              $member_id = $row[15];
               }
	        }
	        else {
               $username = '';
	        }

            $query = "select first_name from subscriptions where email_address = '$email'";

            $result = @mysql_query ($query); // Run the query.
            $num = mysql_num_rows ($result);

            if ( $num > 0 )
	           $email_sub = 'Y';
	        else
	           $email_sub = 'N';

			if(isset($_POST['Back']))
			{
				$firstname=$_POST['firstname'];
				$middlename=$_POST['middlename'];
				$lastname=$_POST['lastname'];
				$address1=$_POST['address1'];
				$address2=$_POST['address2'];
				$address3=$_POST['address3'];
				$city=$_POST['city'];
				$state=$_POST['state'];
				$otherstate=$_POST['otherstate'];
				$zip=$_POST['zip'];
				$country_cd=$_POST['country_cd'];
				$email=$_POST['email'];
				$previous_email=$_POST['email'];
				$email_sub=$_POST['email_sub'];
				$phone1=$_POST['phone1'];
				$phone2=$_POST['phone2'];
				$password1=$_POST['password1'];
				$password2=$_POST['password2'];
				$gothram=$_POST['gothram'];
				$nakshatram=$_POST['nakshatram'];
				$member_id=$_POST['member_id'];
				unset($_POST['Back']);
			}
	?>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">Profile of User:  <?php echo $username; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="70%" border="0" cellspacing="1" cellpadding="1">
 
  <tr>
    <td>
	
	<form  action="saveprofile.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>First Name:</td>
        <td><input name="firstname" class="input" value="<?php echo $firstname; ?>" ><font color="red">&nbsp;(required)</font></td>
      </tr>
      <tr>
        <td>Middle Name:</td>
        <td><input name="middlename" class="input" value="<?php echo $middlename; ?>"></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input name="lastname" class="input" value="<?php echo $lastname; ?>"><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Address Line1:</td>
        <td valign="top"><input name="address1" class="input" value="<?php echo $address1; ?>"> <font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Address Line2:</td>
        <td valign="top"><input name="address2" class="input" value="<?php echo $address2; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Address Line3:</td>
        <td valign="top"><input name="address3" class="input" value="<?php echo $address3; ?>"></td>
      </tr>
      <tr>
        <td valign="top">City:</td>
        <td valign="top"><input name="city" class="input" value="<?php echo $city; ?>"><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">State ( in USA ):</td>
        <td valign="top">
<select name="state" class="dropdown">

<?php
require_once ('./mysql_connect.php'); // Connect to the database.
$query = "select state_cd, state_name from state_lk order by state_name";
$result = mysql_query( $query );
if (!$result)
{
   die ("Could not query the database for state names: <br />" . mysql_error());
}
$state_found_in_lookup_table = 'N';

while ($row = mysql_fetch_row($result)) {
    echo '<option value="' . $row[0] . '"';
    if ($state == $row[0] ) {
       echo 'selected';
       $state_found_in_lookup_table = 'Y';
    }
    echo '>' . $row[1] . '</option>';
}

if ( $state_found_in_lookup_table == 'N' ) {
    $otherstate = $state;
}

?>
</select><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">State ( in Other Country ):</td>
        <td valign="top"><input name="otherstate" class="input" value="<?php echo $otherstate; ?>"></td>
      </tr>
      <tr>
        <td valign="top">ZIP:</td>
        <td valign="top"><input name="zip" class="input" value="<?php echo $zip; ?>"><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Country:</td>
        <td valign="top"><select name="country_cd" size="1" class="dropdown">

<?php
require_once ('./mysql_connect.php'); // Connect to the database.
$query = "select country_cd, country_name from country_lk order by country_name";
$result = mysql_query( $query );
if (!$result)
{
   die ("Could not query the database for country names: <br />" . mysql_error());
}
while ($row = mysql_fetch_row($result)) {
    echo '<option value="' . $row[0] . '"';
    if ($country_cd == $row[0] ) {
       echo 'selected';
    }
    echo '>' . $row[1] . '</option>';
}
?>

</select><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Phone1:</td>
        <td valign="top"><input name="phone1" class="input" value="<?php echo $phone1; ?>"><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Phone2:</td>
        <td valign="top"><input name="phone2" class="input" value="<?php echo $phone2; ?>"></td>
      </tr>
      <tr>
        <td valign="top">EMail Address:</td>
        <td valign="top"><input name="email" class="input" value="<?php echo $email; ?>"><font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Subscribe to newletters?</td>
        <td valign="top"><input name="email_sub" type="radio" value="Y" <?php if ($email_sub == "Y") echo "checked"; ?> >Yes<input name="email_sub" type="radio" value="N" <?php if ($email_sub == "N") echo "checked"; ?> >No <font color="red">(required)</font></td>
      </tr>
      <tr>
        <td valign="top">Gothram:</td>
        <td valign="top"><select name="gothram" size="1" class="dropdown">
<?php
require_once ('./mysql_connect.php'); // Connect to the database.
$query = "select gothram_id, gothram_name from gothram_lk order by gothram_name";
$result = mysql_query( $query );
if (!$result)
{
   die ("Could not query the database for gothram names: <br />" . mysql_error());
}
while ($row = mysql_fetch_row($result)) {
    echo '<option value="' . $row[0] . '"';
    if ($gothram == $row[0] ) {
       echo 'selected';
    }
    echo '>' . $row[1] . '</option>';
}
?>
</select></td>
      </tr>
      <tr>
        <td valign="top">Nakshatram:</td>
        <td valign="top"><select name="nakshatram" class="dropdown">
<?php
require_once ('./mysql_connect.php'); // Connect to the database.
$query = "select nakshatram_id, long_name from nakshatram_lk order by nakshatram_id";
$result = mysql_query( $query );
if (!$result)
{
   die ("Could not query the database for nakshatram names: <br />" . mysql_error());
}
while ($row = mysql_fetch_row($result)) {
    echo '<option value="' . $row[0] . '"';
    if ($nakshatram == $row[0] ) {
       echo 'selected';
    }
    echo '>' . $row[1] . '</option>';
}
?>

</select></td>
      </tr>
      
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;<input name="username" class="input" type="hidden" value="<?php echo $username; ?>" >
<input name="member_id" class="input" type="hidden" value="<?php echo $member_id; ?>" >
<input name="previous_email" class="input" type="hidden" value="<?php echo $previous_email; ?>" ></td>
        </tr>
      <tr>
        <td colspan="2" align="center"><input class="btnStyleLong" type="submit" value="Update Profile"></input></td>
      </tr>
	  <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
    </table>
	</form>	</td>
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

