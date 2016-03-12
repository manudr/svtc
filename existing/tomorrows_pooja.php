<?
require_once ('./mysql_connect.php'); // Connect to the database.
$query = "select b.service_name 'SERVICE NAME', a.pooja_is_for 'POOJA IS FOR', e.gothram_name 'GOTHRA', f.short_name 'NAKSHATRA', a.date_of_service 'DATE AND TIME', " .
          "dayname(a.date_of_service) 'DAY OF WEEK', b.duration 'DURATION\nIN MINUTES' from service_occurrence a, services_lk b, users c, members d, gothram_lk e, nakshatram_lk f where " .
          "date(a.date_of_service) = date(adddate(sysdate(), INTERVAL 1 DAY )) and a.service_id = b.service_id and a.user_name = c.user_name and c.member_id = d.member_id " .
          "and a.gothram_id = e.gothram_id and a.nakshatram_id = f.nakshatram_id order by a.date_of_service";
$result = mysql_query( $query );
if (!$result)
{
   die ("Could not query the database: <br />" . mysql_error());
}
?>
<table border="1">
<tr>
<?
while ($field=mysql_fetch_field($result)) {
echo "<th>";
echo "$field->name";
echo "</th>";
}
echo "</tr>";
while ($row = mysql_fetch_row($result)) {
echo "<tr>";
for ($i=0; $i<mysql_num_fields($result); $i++) {
echo "<td>";
echo "<center>$row[$i]</center>";
echo "</td>";
}
echo "</tr>\n";
}
echo "</table>";
?>