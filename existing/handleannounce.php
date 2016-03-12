<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Announcement Addition Confirmation</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link href="../sample.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<h1>Announcement Addition Confirmation</h1>
		<hr>
		<table border="1" cellspacing="0" id="outputSample">
			<colgroup><col width="80"><col></colgroup>
			<thead>
				<tr>
					<th>Field Name</th>
					<th>Value</th>
				</tr>
			</thead>
<?php

// Set the database access information as constants.
define ('DB_USER', 'svt3194');
define ('DB_PASSWORD', 'Svtemple2009');
define ('DB_HOST', 'svt3194.db.4273447.hostedresource.com');
define ('DB_NAME', 'svt3194');

$title=$_POST['title'];
$publishdate=$_POST['publishdate'];
$expirydate=$_POST['expirydate'];
$vieworder=$_POST['vieworder'];
$description=$_POST['description'];

// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
$selectquery="select * from announcements where vieworder=$vieworder";
$selectresult=mysql_query($selectquery)or die('Error querying the DB' . mysql_error());

$selectresultrows=mysql_numrows($selectresult);

if($selectresultrows >0)
{
	echo "It exists. Rearranging the entries..";
	// Lets rearrange the data before inserting the data into DB..
	$updatequery="update announcements set vieworder=vieworder+1 where vieworder >= $vieworder";
	$selectresult=mysql_query($updatequery)or die('Error querying the DB' . mysql_error());
}

$query="insert into announcements values (null,'".$title."','".$publishdate."','".$expirydate."','".$vieworder."','".$description."')";

mysql_query($query) or die('Error updating the DB' . mysql_error());
mysql_close();

echo "Received the following Announcement Values and inserted into DB";


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
				<th><?php echo $sForm?></th>
				<td><pre><?php echo $postedValue?></pre></td>
			</tr>
<?php
}



?>
		</table>
	</body>
</html>
