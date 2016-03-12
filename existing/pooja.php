<?php # Script 11.4 - mysql_connect.php

// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.
require_once ('./mysql_connect.php'); // Connect to the database.
$message = NULL; // Create an empty new variable.

// Function for escaping and trimming form data.
function escape_data ($data) {
	global $dbc;
	if (ini_get('magic_quotes_gpc')) {
		$data = stripslashes($data);
	}
	return mysql_real_escape_string (trim ($data), $dbc);
} // End of escape_data() function.

$pooja_is_for_self = '';
$pooja_is_for_self = $_POST['pooja_is_for_self'];

// Check for a firstname.

if ($pooja_is_for_self == "N") {

     if (empty($_POST['firstname'])) {
  	     $u = FALSE;
	     $message .= '<p>You forgot to enter first name!</p>';
     } else {
	    $firstname=$_POST['firstname'];
	 }

	 if (empty($_POST['lastname'])) {
	 	$u = FALSE;
	 	$message .= '<p>You forgot to enter last name!</p>';
	 } else {
	 	$lastname=$_POST['lastname'];
     }

     if (isset($message)) {
	 	echo '<font color="red">', $message, '</font>';
	 	exit();
     }
}

// Check for type of pooja
if (empty($_POST['service_id'])) {
	$p = FALSE;
	$message .= '<p>You forgot to enter the type of pooja!</p>';
} else {
	$service_id=$_POST['service_id'];
}

if (isset($message)) {
	echo '<font color="red">', $message, '</font>';
	exit();
}

// Check for date of pooja
if (empty($_POST['date'])) {
	$p = FALSE;
	$message .= '<p>You forgot to enter the date of pooja!</p>';
} else {
	$date=$_POST['date'];
}

if (isset($message)) {
	echo '<font color="red">', $message, '</font>';
	exit();
}

// Check for time of pooja
if (empty($_POST['time'])) {
	$p = FALSE;
	$message .= '<p>You forgot to enter the time of pooja!</p>';
} else {
	$time=$_POST['time'];
}

if (isset($message)) {
	echo '<font color="red">', $message, '</font>';
	exit();
}

// Check for form of payment
if (empty($_POST['payment_id'])) {
	$p = FALSE;
	$message .= '<p>You forgot to enter the form of payment!</p>';
} else {
	$payment_method=$_POST['payment_id'];
}

if (isset($message)) {
	echo '<font color="red">', $message, '</font>';
}
else {
     $username = '';
     $middlename = '';
     $gothram_id = 0;
     $nakshatram_id = 0;
     $payment_id = '';
     $date_of_service = '';
     $username=$_POST['username'];
     $middlename=$_POST['middlename'];
     $gothram_id=$_POST['gothram'];
     $nakshatram_id=$_POST['nakshatram'];
     $payment_id=$_POST['payment_id'];

     $query = "select b.gothram_id, b.nakshatram_id,b.first_name, b.last_name from users a, members b where a.user_name = '$username' and " .
              "b.member_id = a.member_id";
     $result = @mysql_query ($query); // Run the query.

     if ( $result == null ) {
		$np = FALSE;
		$message .= '<p>Username does not exist!</p>';
		echo '<font color="red">', $message, '</font>';
    	exit();
     }

     $num = mysql_num_rows ($result);

     if ( $num == 0 ) {
		$np = FALSE;
		$message .= '<p>Username does not exist!</p>';
		echo '<font color="red">', $message, '</font>';
    	exit();
     }

     $row = mysql_fetch_array($result, MYSQL_NUM);
     $gothram_in_db=$row[0];
     $nakshatram_in_db=$row[1];
     $firstname_in_db=$row[2];
     $lastname_in_db=$row[3];

     if ($pooja_is_for_self == "Y") {

         $firstname= $firstname_in_db;
         $lastname = $lastname_in_db;

         if ( $gothram_id  == 0 ) {
             $gothram_id = $gothram_in_db;
         }

         if ($nakshatram_id  == 0 ) {
          $nakshatram_id = $nakshatram_in_db;
         }
     }

     $date_of_service = $date . ' ' . $time . ':00';


     if ( $middlename == '' ) {
         $pooja_is_for = $firstname . ' ' . $lastname;
     }
     else {
         $pooja_is_for = $firstname . ' ' . $middlename . ' ' . $lastname;
     }

     $query="insert into service_occurrence (service_id, user_name, pooja_is_for, gothram_id, nakshatram_id, date_of_service, payment_id)
     values ('".$service_id."','".$username."','".$pooja_is_for."','".$gothram_id."','".$nakshatram_id."','".$date_of_service."','".$payment_id."')";

     mysql_query($query) or die('Error updating the DB' . mysql_error());

     mysql_close();

     echo "Pooja request successfully registered";

}

?>