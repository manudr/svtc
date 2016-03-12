<?php
		require_once ('./mysql_connect.php');
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);
$fpwrite = fopen($_FILES['userfile']['name'],'w+');
if($fpwrite)
{
	if(!fwrite($fpwrite, $content))
		die("couldn't write to file.");

	echo "success writing to file" . $_FILES['userfile']['name'];
	fclose($fpwrite);
}


if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.


// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );


$query = "INSERT INTO upload (name, size, type, content ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

mysql_query($query) or die('Error, query failed'); 
mysql_close();

echo "<br>File $fileName uploaded<br>";
} 
?>

