<?php  require_once ('./session.php'); 
		require_once ('./mysql_connect.php');
?>
<?php

include("./fckeditor/fckeditor.php") ;
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

<div class="rightBg" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <td width="226%" align="left" valign="top" class="headingmain_txt">Manage Announcements</td>
  </tr>
  <tr><td style="padding-left:10px;">
  <?php

				$activeUserId = $_SESSION['username'];
				if( $activeUserId == 'svtc_com' || $activeUserId == 'admin')
				{
				echo "<div class='future'>";
				echo "<table width='100%' border='0' cellspacing='1' cellpadding='1'>";
				echo "<tr><td>";
				echo "<font>Current Email Addresses in the DB</font>";
				echo "</td></tr>";
				
					

				// Make the connnection and then select the database.
					$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
					mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
					$query="SELECT * FROM subscriptions";

					$result=mysql_query($query)or die('Error querying the DB' . mysql_error());
		 
					$num=mysql_numrows($result);

					mysql_close();

					$i=0;
					
					$emailaddresses = '';
					if( $num == 0)
					{
						echo "There no email addresses in the DB currently";
					}
					else
					{
							
							while ($i < $num) 
							{
								$emailaddresses .= mysql_result($result,$i,'email_address');
								$emailaddresses .= ',';
								$i++;
							}
							echo "<tr><td>";
							echo "<b>$emailaddresses</b>";
							echo "</td></tr>";
							echo "</table></div>";
								
					}
				}	
				else
				{
					echo "<h2><font color='red'>Not authorized to send Events!</font></h2>";
					echo "<br><br><br><center><img border='0' alt='' src='./balaji/images/b2.jpg' width='712' height='55' > 				
					</img><br></body></center></html>";
					exit;
				}
?>
  </td></tr>
  <tr>
    <td align="left" valign="top">
	<form action="sendevents.php" method="post" >
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
  <tr>
    <td colspan="2" class="headingmain_txt">Send Bulk Event Notice</td>
    </tr>
  <tr>
    <td width="10%" style="padding-left:10px;"><b>Subject:</b></td>
    <td><input name="subject" class="input" style="width:500px"></td>
  </tr>
  <tr>
    <td style="padding-left:10px;"><b>Bcc:</b></td>
    <td><TEXTAREA NAME="bcc" COLS=40 ROWS=6 style="width:500px;height:50px;"> <?php echo $emailaddresses; ?></TEXTAREA></td>
  </tr>
  <tr>
    <td colspan="2" style="padding-left:10px;"><b>Message:</b></td>
    </tr>
  <tr>
    <td colspan="2" style="padding-left:10px;"><?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
//$sBasePath = $_SERVER['PHP_SELF'] ;
//$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('message') ;
$oFCKeditor->BasePath	= 'fckeditor/' ;
$oFCKeditor->Value		= '' ;
$oFCKeditor->Height=300;
$oFCKeditor->Width=730;
$oFCKeditor->Create() ;

		$activeUserId = $_SESSION['username'];
				if( $activeUserId == 'svtc_com' || $activeUserId == 'admin')
				{
					echo "<br><input type='submit' value='Send Email' class='btnStyleLong'>";
				}
				else
				{
					$oFCKeditor->Value		= 'NOT AUTHORIZED TO SEND EMAIL!' ;
				}
?></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>
</form>
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