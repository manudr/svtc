<?php # Script 12.8 - add_file.php
require_once ('./session.php');
		require_once ('./mysql_connect.php');


// This page allows users to upload files to the server.

// Set the page title and include the HTML header.
$page_title = 'Upload a File';

$counter = 2; // Number of files to allow for.

if (isset($_POST['submitted'])) { // Handle the form.


	function escape_data ($data) {
		global $dbc; // Need the connection.
		if (ini_get('magic_quotes_gpc')) {
			$data = stripslashes($data);
		}
		return mysql_real_escape_string(trim($data), $dbc);
	} // End of function.



// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.


// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );

	for ($i = 0; $i < $counter; $i++) { // Handle each uploaded file.

		// Create index names to refer to the proper upload and description.
		$filename = 'upload' . $i;
		$description = 'description' . $i;

		// Check for a file.
		if (isset($_FILES[$filename]) && ($_FILES[$filename]['error'] != 4)) {

			// Check for a description (not required).
			if (!empty($_POST[$description])) {
				$d = "'" . escape_data($_POST[$description]) . "'";
			} else {
				$d = 'NULL';
			}

			// Add the record to the database.
			$query = "INSERT INTO uploads (file_name, file_size, file_type, description) VALUES ('{$_FILES[$filename]['name']}', {$_FILES[$filename]['size']}, '{$_FILES[$filename]['type']}', $d)";
			$result = mysql_query ($query);

			if ($result) {

				// Return the upload_id from the database.
				$upload_id = mysql_insert_id();

				// Move the file over.
				if (move_uploaded_file($_FILES[$filename]['tmp_name'], "./uploads/" . $_FILES[$filename]['name'])) {

					echo '<p>File number ' . ($i + 1) . ' has been uploaded!</p>';
					echo "The filename was " . $_FILES[$filename]['name'];

				} else { // File could not be moved.

					echo '<p><font color="red">File number ' . ($i + 1) . ' could not be moved.</font></p>';

					// Remove the record from the database.
					$query = "DELETE FROM uploads WHERE upload_id = $upload_id";
					$result = mysql_query ($query);

					// Add more detailed error reporting, if desired.

				}

			} else { // If the query did not run OK.
				echo '<p><font color="red">Your submission could not be processed due to a system error. We apologize for any inconvenience.</font></p>';
				// Print the query and invoke the mysql_error() function to debug.
			}

		} // End of if (isset($the_file)...

	} // End of FOR loop.

	mysql_close(); // Close the database connection.

} // End of the main Submit conditional.
?>
<form enctype="multipart/form-data" action="add_file.php" method="post">

	<fieldset><legend>Fill out the form to upload a file:</legend>
	<input type="hidden" name="MAX_FILE_SIZE" value="524288">

	<?php // Create the inputs.
	for ($i = 0; $i < $counter; $i++) {
		echo '<p><b>File:</b> <input type="file" name="upload' . $i . '" /></p>
	<p><b>Description:</b> <textarea name="description' . $i . '" cols="40" rows="5"></textarea></p><br />
	';
	}
	?>

	</fieldset>
	<input type="hidden" name="submitted" value="TRUE" />
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>

</form>
