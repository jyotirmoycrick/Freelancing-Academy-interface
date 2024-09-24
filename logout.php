<?php
// Start session
session_start();

// Destroy session data
session_destroy();

// Redirect user to the login page
header("Location: https://aiugsee.co.in");
exit;
?>
