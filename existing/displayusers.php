<?php 
require_once ('./session.php');
// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.

require_once ('./mysql_connect.php');

// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );


$query="SELECT * FROM members";


$result=mysql_query($query)or die('Error querying the DB' . mysql_error());

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Found $num Records...</center></b><br><br>";


echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {
$firstname=mysql_result($result,$i,"first_name");
$middlename=mysql_result($result,$i,"middle_name");
$lastname=mysql_result($result,$i,"last_name");
$address1=mysql_result($result,$i,"address1");
$address2=mysql_result($result,$i,"address2");
$address3=mysql_result($result,$i,"address3");
$city=mysql_result($result,$i,"city");
$state=mysql_result($result,$i,"state");
$state_id=mysql_result($result,$i,"state_id");
$zip=mysql_result($result,$i,"zip");
$country_id=mysql_result($result,$i,"country_id");
$phone=mysql_result($result,$i,"phone");
$phone2=mysql_result($result,$i,"phone2");
$email_address=mysql_result($result,$i,"email_address");
$gothram_id=mysql_result($result,$i,"gothram_id");
$nakshatram_id=mysql_result($result,$i,"nakshatram_id");

$i++;

echo "<b>Record $i of $num:<br><br>";
echo "$firstname&nbsp;&nbsp;$middlename&nbsp;&nbsp;$lastname&nbsp;&nbsp;$address1&nbsp;&nbsp;$address2&nbsp;&nbsp;$address3&nbsp;&nbsp;";
echo "$city&nbsp;&nbsp;$state&nbsp;&nbsp;$state_id&nbsp;&nbsp;$zip&nbsp;&nbsp;$country_id&nbsp;&nbsp;$phone&nbsp;&nbsp;$phone2&nbsp;&nbsp;";
echo "$email_address&nbsp;&nbsp;$gothram_id&nbsp;&nbsp;$nakshatram_id<br>";
echo "<hr>";


}

?>

