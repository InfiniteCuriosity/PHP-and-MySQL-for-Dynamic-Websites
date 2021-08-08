<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Predefined Variables</title>
</head>
<body>

<?php // SCript 1.5 - predefined variables

$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// print the name of the script:
echo "<p>You are running the file:<br><strong>$file</strong></p>\n";

// print the user's information:
echo "<p>You are viewing this page using:<br><strong>$user</strong></p>\n";

// print the server's information:
echo "<p>This server is running:<br><strong>$server</strong></p>\n";

?>
</body>
</html>