<?php  
	require_once ('./session.php'); 
	require_once ('./mysql_connect.php');
?>
<?php include("./fckeditor/fckeditor.php") ;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manage Announcements</title>
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />

<link href="resources/css/ui/ui.all.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="resources/js/jquery.js"></script>
<script language="javascript" src="resources/js/ui.datepicker.js"></script>
<script type="text/javascript">
	$(function() {
		$("#publishdate").datepicker();
		$("#expirydate").datepicker();
		
	});
	
	</script>

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
    <td width="100%" align="left" valign="top" class="headingmain_txt">Current Announcements</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding:10px;">
	<?php
		$activeUserId = $_SESSION['username'];

		if( $activeUserId == 'svtc_com' || $activeUserId == 'admin' )
		{



	// Make the connnection and then select the database.
	$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
	mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
	$query="SELECT * FROM announcements order by vieworder";

	$result=mysql_query($query)or die('Error querying the DB' . mysql_error());

	$num=mysql_numrows($result);

	mysql_close();

	$i=0;
	
    if( $num == 0)
	{
		echo "There no announcements in the DB currently";
	}
	else
	{
			echo "<br/>";
			while ($i < $num) 
			{
				$title=mysql_result($result,$i,"title");
				$vieworder=mysql_result($result,$i,"vieworder");
				$description=mysql_result($result,$i,"description");
				$descriptionAsHTML = htmlspecialchars_decode( $description ) ;
				$publishdate = mysql_result($result,$i,"publishdate");
				$expirydate = mysql_result($result,$i,"expirydate");
				$publishdateformatted = date("Y/m/d",strtotime($publishdate));
				$expirydateformatted = date("Y/m/d",strtotime($expirydate));
				$currentdate = date("Y/m/d");
				if( $currentdate < $publishdateformatted )					
					echo "<div class='future'><table width='100%' border='0' cellspacing='1' cellpadding='1'><tr><td width='20%'><strong>Status:</strong></td><td><font>Future Announcement</font></td></tr>";
				else if( $currentdate > $expirydateformatted )
					
					echo "<div class='inactive'><table width='100%' border='0' cellspacing='1' cellpadding='1'><tr><td width='20%'><strong>Status:</strong></td><td><font>Expired Announcement</font></td></tr>";
				else
					echo "<div class='active'><table width='100%' border='0' cellspacing='1' cellpadding='1'><tr><td width='20%'><strong>Status:</strong></td><td><font>Active Announcement</font></td></tr>";
					
				echo "<tr><td><strong>View Order:</strong></td><td><input readonly='readonly' name='txt' type='text' value='$vieworder'/></td></tr>";
				echo "<tr><td><strong>Title:</strong></td><td><input name='txt' readonly='readonly' type='text' value='$title'/></td></tr>";
				echo "<tr><td><strong>Description:</strong></td><td><textarea name='textarea' readonly='readonly'>$descriptionAsHTML</textarea></td> </tr>";
				echo "<tr><td>&nbsp;</td><td rowspan='2'>";
				
				
				echo "<SPAN class=redbtn>";								
				echo "<a href='delupdateannounce.php?vieworder=$vieworder&action=delete' class='button_2'>";
				echo "<span class='btn_lbg'><span class='btn_rbg'>";
				echo "Delete This Announcement";
				echo "</span></span></a>";
				echo "</span>";
				
				
				echo "<SPAN class=bluebtn style='margin-left:10px;'>";	
				echo "<a href='delupdateannounce.php?vieworder=$vieworder&action=update' class='button_2'>";
				echo "<span class='btn_lbg'><span class='btn_rbg'>";
				echo "Update This Announcement";
				echo "</span></span></a>";
				echo "</span>";
				
							
				echo "</td></tr><tr><td>&nbsp;</td></tr></table></div><br/><br/>";	
				$i++;
			}
	} 
}
else
{
	echo "Not authorized to add announcements";
	
	return;
}
?>
	</td>
  </tr>
  <tr><td>
  <form action="addannounce.php" method="post">
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="2" class="headingmain_txt">Add New Announcement</td>
      </tr>
    <tr>
      <td width="10%" style="padding-left:10px;">Title:</td>
      <td><input name="title" class="input"></td>
    </tr>
    <tr>
      <td style="padding-left:10px;">Publish Date:</td>
      <td><input id="publishdate" name="publishdate" class="input" style="background: #fff url(resources/image/datePicker.gif) right no-repeat;"></td>
    </tr>
    <tr>
      <td style="padding-left:10px;">Expiry Date:</td>
      <td><input id="expirydate" name="expirydate" class="input" style="background: #fff url(resources/image/datePicker.gif) right no-repeat;"></td>
    </tr>
	<tr>
      <td style="padding-left:10px;">View Order:</td>
      <td><input name="vieworder" class="input"></td>
    </tr>
	<tr>
	  <td colspan="2" style="padding-left:10px;">Description:</td>
	  </tr>
	<tr>
      <td colspan="2"  style="padding-left:10px;"><?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
//$sBasePath = $_SERVER['PHP_SELF'] ;
//$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;
		$activeUserId = $_SESSION['username'];

		if( $activeUserId == 'svtc_com' || $activeUserId == 'admin')
		{

/*$ctrl_name = 'description';
$sBasePath = 'fckeditor/';
$oFCKeditor = new FCKeditor($ctrl_name) ;
$oFCKeditor->Height = "300px";
$oFCKeditor->Width = "730px";
$oFCKeditor->BasePath = $sBasePath ;
$oFCKeditor->Value = "" ;
$oFCKeditor->Create() ;*/



$oFCKeditor = new FCKeditor('description') ;
$oFCKeditor->BasePath	= 'fckeditor/' ;
$oFCKeditor->Value		= '' ;
$oFCKeditor->Height=300;
$oFCKeditor->Width=730;
$oFCKeditor->Create() ;

			echo "<br>";
			echo "<center><input type='submit' value='Add' class='btnStyleLong'></center>";
}
?></td>
      </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
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