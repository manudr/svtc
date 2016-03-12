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
		<style type="text/css">
			select {width: 150px; font:normal 11px Arial, Helvetica, sans-serif;}
			input {width: 125px;}
		</style>
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
							<td width="226%" align="center" valign="top" class="headingmain_txt"><u>Registration</u></td>
							</tr>
							<tr>
								<td align="left" valign="top" style="padding-left:10px;">
									<table width="100%" border="0" cellspacing="1" cellpadding="1">
										<tr>
										<td><b>Preferred User Information </b></td>
										</tr>
										<tr>
										<td>*Note: Membership to this portal is Public.
												Once your account information has been submitted,you will be immediately granted access to the portal environment.All fields marked with red arrow are required.</td>
										</tr>
										<tr>
										<td><font color="red">* -  Indicates required form fields.</font></td>
										</tr>  
										<tr>
											<td>
												<?php
													$firstname = '';
													$middlename = '';
													$lastname = '';
													$address1 = '';
													$address2 = '';
													$address3 = '';
													$city = '';
													$state = 'CO';
													$otherstate = '';
													$zip = '';
													$country_cd = 'US';
													$phone1 = '';
													$phone2 = '';
													$email = '';
													$email_sub = 'Y';
													$username = '';
													$password1 = '';
													$password2 = '';
													$gothram = "0";
													$nakshatram = "0";
													
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
													$email_sub=$_POST['email_sub'];
													$phone1=$_POST['phone1'];
													$phone2=$_POST['phone2'];
													$username=$_POST['username'];
													$password1=$_POST['password1'];
													$password2=$_POST['password2'];
													$gothram=$_POST['gothram'];
													$nakshatram=$_POST['nakshatram'];
													unset($_POST['Back']);
													}
													?>
												<form  action="register.php" method="post">
													<table width="100%" border="0" cellspacing="0" cellpadding="5">
														<tr><td>
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td colspan="4"><b>Personal Information</b></td>
																	</tr>																
																	<tr>
																	<td>First Name: </td>
																	<td><input name="firstname" class="txtBox" value="<?php echo $firstname; ?>" ><font color="red">&nbsp;*</font></td>
																	<td>Last Name: </td>
																	<td><input name="lastname" class="txtBox" value="<?php echo $lastname; ?>"><font color="red">*</font></td>
																	</tr>
																	<!--
																	<tr>
																	<td>Middle Name:</td>
																	<td><input name="middlename" class="txtBox" value="<?php echo $middlename; ?>"></td>
																	</tr>
																	-->																		
																	<tr>
																	<td valign="top">Gothram:</td>
																	<td valign="top"><select name="gothram" size="1" class="txtBox">
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
																	<td valign="top">Nakshatram:</td>
																	<td valign="top"><select name="nakshatram" class="txtBox">
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
																		<td colspan="4"><br/></td>
																	</tr>																		
																	<tr>
																		<td colspan="4"><b>Contact Information</b></td>
																	</tr>															
																	<tr>
																	<td valign="top">Address Line1: </td>
																	<td><input name="address1" class="txtBox" value="<?php echo $address1; ?>"> <font color="red">*</font></td>
																	<td valign="top">Address Line2: </td>
																	<td><input name="address2" class="txtBox" value="<?php echo $address2; ?>"></td>
																	</tr>
																	<tr>
																	<td valign="top">City:</td>
																	<td valign="top"><input name="city" class="txtBox" value="<?php echo $city; ?>"><font color="red">*</font></td>
																	<td valign="top">State ( in USA ):</td>
																	<td valign="top">
																		<select name="state" class="txtBox">
																			<?php
																					require_once ('./mysql_connect.php'); // Connect to the database.
																					$query = "select state_cd, state_name from state_lk order by state_name";
																					$result = mysql_query( $query );
																					if (!$result)
																					{
																					die ("Could not query the database for state names: <br />" . mysql_error());
																					}
																					while ($row = mysql_fetch_row($result)) {
																					echo '<option value="' . $row[0] . '"';
																					if ($state == $row[0] ) {
																					echo 'selected';
																					}
																					echo '>' . $row[1] . '</option>';
																					}
																					?>
																			</select><font color="red">*</font></td>
																	</tr>
																	<tr>
																	<td valign="top">ZIP:</td>
																	<td valign="top"><input name="zip" class="txtBox" value="<?php echo $zip; ?>"><font color="red">*</font></td>
																	<td valign="top">Country:</td>
																	<td valign="top"><select name="country_cd" size="1" class="txtBox">
																				
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
																				
																			</select><font color="red">*</font></td>
																	</tr>
																	<tr>
																	<td valign="top">Phone1:</td>
																	<td valign="top"><input name="phone1" class="txtBox" value="<?php echo $phone1; ?>"><font color="red">*</font></td>
																	<td valign="top">Phone2:</td>
																	<td valign="top"><input name="phone2" class="txtBox" value="<?php echo $phone2; ?>"></td>
																	</tr>
																	<tr>
																	<td valign="top">EMail Address:</td>
																	<td valign="top" colspan="3"><input name="email" class="txtBox" value="<?php echo $email; ?>"><font color="red">*</font></td>
																	</tr>																		
																	<tr>
																		<td colspan="4"><br/></td>
																	</tr>																		
																	<tr>
																		<td colspan="4"><b>Choose Login Information</b></td>
																	</tr>																	
																<tr>
																	<td valign="top">Username:</td>
																	<td valign="top"><input name="username" class="txtBox" value="<?php echo $username; ?>"><font color="red">*</font></td>
																	</tr>
																<tr>
																	<td valign="top">Password:</td>
																	<td valign="top"><input name="password1" type="password" class="txtBox" value="<?php echo $password1; ?>"><font color="red">*</font></td>
																	<td valign="top">Password (Confirmation):</td>
																	<td valign="top"><input name="password2" type="password" class="txtBox" value="<?php echo $password2; ?>" /><font color="red">*</font></td>
																</tr>
																<tr>
																	<td valign="top">Subscribe to newletters?</td>
																	<td valign="top" colspan="3"><input name="email_sub" type="radio" value="Y" <?php if ($email_sub == "Y") echo "checked"; ?> >Yes<input name="email_sub" type="radio" value="N" <?php if ($email_sub == "N") echo "checked"; ?> >No <font color="red">*</font></td>																	
																</tr>
																<tr>
																	<td colspan="4"><br/></td>
																</tr>																		
																<tr>
																	<td colspan="4"><b>Family Details</b></td>
																</tr>
																<tr>
																	<td colspan="4"><br/></td>
																</tr>																
																<tr>
																	<td valign="top" align="center"><b>Relation</b></td>
																	<td valign="top" align="center"><b>Name</b></td>
																	<td valign="top" align="center"><b>Gotram</b></td>
																	<td valign="top" align="center"><b>Nakshatram</b></td>
																</tr>
																<tr>
																	<td valign="top">1. <input name="relation1" class="txtBox"></td>
																	<td valign="top"><input name="name1" class="txtBox"></td>
																	<td valign="top"><input name="gotram1" class="txtBox"></td>
																	<td valign="top"><input name="nakshatram1" class="txtBox"></td>
																</tr>
																<tr>
																	<td valign="top">2. <input name="relation2" class="txtBox"></td>
																	<td valign="top"><input name="name2" class="txtBox"></td>
																	<td valign="top"><input name="gotram2" class="txtBox"></td>
																	<td valign="top"><input name="nakshatram2" class="txtBox"></td>
																</tr>
																<tr>
																	<td valign="top">3. <input name="relation3" class="txtBox"></td>
																	<td valign="top"><input name="name3" class="txtBox"></td>
																	<td valign="top"><input name="gotram3" class="txtBox"></td>
																	<td valign="top"><input name="nakshatram3" class="txtBox"></td>
																</tr>																																																																							
																<tr>
																	<td valign="top">&nbsp;</td>
																	<td valign="top" colspan="3">&nbsp;</td>
																	</tr>
																<tr>
																	<td colspan="4">&nbsp;<center> <font color="red"><?php echo "$displaytext"; ?></font></center></td>
																	</tr>
																<tr>
																	<td colspan="4" align="center"><input class="btnStyleXLong" type="submit" name="submit" value="Register"></input></td>
																	</tr>
																<tr>
																	<td colspan="2">&nbsp;</td>
																	</tr>
																</table>
															</td></tr>
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
