<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Constants.php</title>
</head>
<body>

<?php // Script 1.9 Constants.php

// Set today's date as a constant:
define('TODAY','October 6, 2019'); // this is a test of comments

// Print a message using predefined constants and the TODAY constant:
echo '<p>Today is ' . TODAY . '.<br><br>This server is running version 
<strong>' . PHP_VERSION . '</strong>of PHP on the <strong>' . PHP_OS . '</strong> operating system</p>';

?>
</body>
</html>