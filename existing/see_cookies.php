<?php
session_name ('YourVisitID');
session_start();
print 'Username is ' . $_SESSION['username'] . '!</h1>';
print 'First Name is ' . $_SESSION['firstname'] . '!</h1>';
print 'Last Name is ' . $_SESSION['lastname'] . '!</h1>';
print 'You have been logged in since: <br /> ' . date('g:i a', $_SESSION['loggedin']) . '</p>';
print '<p> <a href ="logout.php">Click here to log out.</a></p>';
print '</div>';
?>