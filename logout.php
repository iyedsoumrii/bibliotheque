<?php
// Clear all the session variables
session_start();
session_unset();

// Destroy the session
session_destroy();

// Clear any cookies that may have been set
setcookie(session_name(), '', time()-3600, '/');

// Redirect to the index page
$url = "./index.php";
header("Location: $url");
exit;
?>
