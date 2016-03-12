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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Announcement Update Page</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<?php

$vieworder=$_GET['vieworder'];
$action=$_GET['action'];

// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );

if($action == "delete")
{
	// Lets rearrange the data before deleting the data from the DB..
	$delquery="delete from announcements where vieworder=$vieworder";
	$delresult=mysql_query($delquery)or die('Error querying the DB' . mysql_error());
	echo "<h4>Rearranging the entries..";
	$updatequery="update announcements set vieworder=vieworder-1 where vieworder > $vieworder";
	$updateresult=mysql_query($updatequery)or die('Error querying the DB' . mysql_error());
    echo "Selected Announcement has been deleted. <br/><br/>Please click <a href='manageannouncements.php'>here</a>to go back</h4><br/>";
    mysql_close();
}    
else if($action == "update" )	
{
	$query="SELECT * FROM announcements where vieworder=$vieworder";
	$result=mysql_query($query)or die('Error querying the DB' . mysql_error());
	mysql_close();
    $announce_id=mysql_result($result,$i,"announce_id");
	$title=mysql_result($result,$i,"title");
    $description=mysql_result($result,$i,"description");
	$descriptionAsHTML = htmlspecialchars_decode( $description ) ;
	$publishdate = mysql_result($result,$i,"publishdate");
	$expirydate = mysql_result($result,$i,"expirydate");
?>	

	<form action="updateannounce.php" method="post">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="20%">Title:</td>
    <td><input name="title" class="input" value="<?php echo $title;?>"></td>
  </tr>
  <tr>
    <td>Publish Date:</td>
    <td><input id="publishdate" name="publishdate" class="input" value="<?php echo $publishdate; ?>" style="background: #fff url(resources/image/datePicker.gif) right no-repeat;"></td>
  </tr>
  <tr>
    <td>Expiry Date:</td>
    <td><input id="expirydate" name="expirydate" class="input" value="<?php echo $expirydate; ?>" style="background: #fff url(resources/image/datePicker.gif) right no-repeat;"></td>
  </tr>
  <tr>
    <td>View Order:</td>
    <td><input name="vieworder" class="input" value="<?php echo $vieworder; ?>"></td>
  </tr>
  <tr>
    <td colspan="2">Description:</td>
    </tr>
  <tr>
    <td colspan="2">
	<?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
//$sBasePath = $_SERVER['PHP_SELF'] ;
//$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

/*$ctrl_name = 'description';
$sBasePath = 'fckeditor/';
$oFCKeditor = new FCKeditor('description') ;
$oFCKeditor->Height = "300px";
$oFCKeditor->Width = "730px";
$oFCKeditor->BasePath = $sBasePath ;
$oFCKeditor->Value = "$description" ;
$oFCKeditor->Create() ;*/

$oFCKeditor = new FCKeditor('description') ;
$oFCKeditor->BasePath	= 'fckeditor/' ;
$oFCKeditor->Value		= "$description" ;
$oFCKeditor->Height = "500px";
$oFCKeditor->Width = "730px";
$oFCKeditor->Create() ;
?>
	</td>
    </tr>
  <tr>
    <td colspan="2" align="center"><input type="hidden" name="announce_id" value="<?php echo $announce_id; ?>">
			<input type="hidden" name="oldvieworder" value="<?php echo $vieworder; ?>">
			<input type="submit" value="Update" class="btnStyleLong"></td>
  </tr>
  <tr><td colspan="2" align="center"><a href='manageannouncements.php'>Back to Announcements</a></td></tr>
</table>

	</form>
	<?php
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