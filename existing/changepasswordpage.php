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
			$current_password='';
	        $password1 = '';
	        $password2 = '';

            $username = $_SESSION['username'];

            $query = "select password from users where user_name = '$username'";

            $result = @mysql_query ($query); // Run the query.
            $num = mysql_num_rows ($result);

            if ( $num > 0 ) {
               $row = mysql_fetch_array($result, MYSQL_NUM);
	           $old_password = $row[0];
	        }

			if(isset($_POST['Back']))
			{
				$old_password=$_POST['old_password'];
				$current_password=$_POST['current_password'];
				$password1=$_POST['password1'];
				$password2=$_POST['password2'];
				unset($_POST['Back']);
			}
	?>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">Change Password for User:  <?php echo $username; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<table width="70%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>*Note: Membership to this portal is Public.
Once your account information has been submitted, you will be immediately granted access to the portal environment.<br>All fields marked with red arrow are required.</td>
    </tr>
  <tr>
    <td>	
	<form  action="changepassword.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>Current password:</td>
        <td><input name="current_password" type="password" class="input" value="<?php echo $current_password; ?>"><font color="red">&nbsp;(required)</font></td>
      </tr>
      <tr>
        <td>New password:</td>
        <td><input name="password1" type="password" class="input" value="<?php echo $password1; ?>"><font color="red">&nbsp;(required)</font></td>
      </tr>
      <tr>
        <td>Confirm new password:</td>
        <td><input name="password2" type="password" class="input" value="<?php echo $password2; ?>"></td>
      </tr>
     
      <tr>
        <td colspan="2" align="center">&nbsp;
		<input name="username" class="input" type="hidden" value="<?php echo $username; ?>" >
<input name="old_password" class="input" type="hidden" value="<?php echo $old_password; ?>" >
		</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input class="btnStyleXLong" type="submit"  value="Change Password"></input></td>
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

