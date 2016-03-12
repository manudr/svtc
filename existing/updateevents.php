<?php  
	require_once ('./session.php'); 
	require_once ('./mysql_connect.php');
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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Events Addition Confirmation</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">&nbsp;
		</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;"><table width="100%" border="0" cellspacing="1" cellpadding="1" class="table_style">
      <tr>
        <th width="20%"><strong>Field Name</strong></th>
        <th><strong>Value</strong></th>
      </tr>
    <?php

// Set the database access information as constants.
$description=$_POST['description'];
// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
if( $vieworder == $oldvieworder )
{
$updatequery="update upcomingevents set description='$description'";
$selectresult=mysql_query($updatequery)or die('Error querying the DB' . mysql_error());
}
mysql_close();

echo "<font style='color:#2f7d10;font-weight:bold;font-size:12px'>Updated the following Events Values and inserted into DB</font>";


if ( isset( $_POST ) )
   $postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
   $postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS

foreach ( $postArray as $sForm => $value )
{
	if ( get_magic_quotes_gpc() )
		$postedValue = htmlspecialchars( stripslashes( $value ) ) ;
	else
		$postedValue = htmlspecialchars( $value ) ;

?>
			<tr>
				<td><?php echo $sForm?></td>
				<td><pre><?php echo $postedValue?></pre></td>
			</tr>
<?php
}



?>
     
    </table>
	
	</td>
  </tr>
  <tr><td align="center" style="padding-top:20px;padding-bottom:20px;"><h4><a href='manageevents.php'>Back to Event</a></h4></td></tr>
</table>

</div>
</div>
<?php include 'resources\includes\footer.html' ?>
</div>
</div>
</body>
</html>