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
    <td width="226%" align="left" valign="top" class="headingmain_txt">Events Delete/Update</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="padding-left:10px;">
	<?php
include("./fckeditor/fckeditor.php") ;

$action=$_GET['action'];

// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );

if($action == "delete")
{
	// Lets rearrange the data before deleting the data from the DB..
	$delquery="delete from upcomingevents";
	$delresult=mysql_query($delquery)or die('Error querying the DB' . mysql_error());
    echo "<h4>Selected Events has been deleted. Please click <a href='manageevents.php'> here </a>to go back<br></h4>";
    mysql_close();
}    
else if($action == "update" )	
{
	$query="SELECT * FROM upcomingevents";
	$result=mysql_query($query)or die('Error querying the DB' . mysql_error());
	mysql_close();
    $description=mysql_result($result,$i,"description");
	$descriptionAsHTML = htmlspecialchars_decode( $description ) ;
?>	
	<form action="updateevents.php" method="post">
   	    <div class="row"><label class="col1">Description: </label><span class="col2"></span> <br><br> </div>
		
<?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
//$sBasePath = $_SERVER['PHP_SELF'] ;
//$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('description') ;
$oFCKeditor->BasePath	= 'fckeditor/' ;
$oFCKeditor->Value		= "$description" ;
$oFCKeditor->Height=300;
$oFCKeditor->Width=730;
$oFCKeditor->Create() ;
?>
			<br>
			<center><input type="submit" value="Update" class='btnStyleLong'><center>
		</form>
	    <h4><center><a href="manageevents.php">Back to Events<center></h4></a>
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