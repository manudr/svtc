<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
/// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.

require_once ('./mysql_connect.php');


// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );


$query = "SELECT id, name FROM upload";
$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
	echo "Database is NOT empty <br>";

	while(list($id, $name) = mysql_fetch_array($result))
	{
		echo "<a href='download.php?id=$id'>$name</a><br>";
	}
}
mysql_close();

?>
</body>
</html>
