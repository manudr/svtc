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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Current Events</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<?php
		$activeUserId = $_SESSION['username'];

		if( $activeUserId == 'svtc_com' || $activeUserId == 'admin')
		{
		// Make the connnection and then select the database.
		$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
		mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
		$query="SELECT description FROM upcomingevents";

	$result=mysql_query($query)or die('Error querying the DB' . mysql_error());

	$num=mysql_numrows($result);

	mysql_close();

	$i=0;
	
    if( $num == 0)
	{
		echo "<font color='#ff0000'>There no events in the DB currently</font>";

		echo "<br/><br/><span class='headingmain_txt'>Add Upcoming Events</span><form action='addevents.php' method='post'>";
   	    echo "<b>Description:</b><br/>";
		
		$activeUserId = $_SESSION['username'];
		if( $activeUserId == 'svtc_com' || $activeUserId == 'admin')
		{
			$oFCKeditor = new FCKeditor('description') ;
			$oFCKeditor->BasePath	= 'fckeditor/' ;
			$oFCKeditor->Value		= '' ;
			$oFCKeditor->Height=300;
			$oFCKeditor->Width=730;
			$oFCKeditor->Create() ;

			echo "<br>";
			echo "<center><input type='submit' value='Add' class='btnStyleLong'><center></form>";
		}
	}
	else
	{
			//echo "----------------------------------------------------------------------------------------------";
			{
				$description=mysql_result($result,$i,"description");
				$descriptionAsHTML = htmlspecialchars_decode( $description ) ;
				echo "<b>Description:</b>";
				echo "$descriptionAsHTML</br>";
				
				echo "<SPAN class=redbtn>";								
				echo "<a href='delupdateevents.php?action=delete' class='button_2'>";
				echo "<span class='btn_lbg'><span class='btn_rbg'>";
				echo "Delete This Event";
				echo "</span></span></a>";
				echo "</span>";
				
				echo "<SPAN class=bluebtn style='margin-left:10px;'>";	
				echo "<a href='delupdateevents.php?action=update' class='button_2'>";
				echo "<span class='btn_lbg'><span class='btn_rbg'>";
				echo "Update This Event";
				echo "</span></span></a>";
				echo "</span>";
				
					
				//echo "&nbsp;&nbsp;&nbsp;<a href='delupdateevents.php?action=update' class='btnContentUpdate'>Update This Event</a>";
				echo "<br/><br/><br/>";	
			}
	}
}
else
{
	echo "Not authorized to add upcoming events";
	echo"<br><br><br><center><img border='0' alt='' src='./balaji/images/b2.jpg' width='712' height='55' ></img><br>";
	return;
}
?>
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