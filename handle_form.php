<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
</head>
</html>

<?php
// Perform some basic validation

if (!empty($_POST['name']) &&
!empty($_POST['comments']) &&
!empty($_POST['email'])) {

// Print the message:
echo "<p>Thank you, <strong>{$_POST['name']}</strong>, for the following comments:</p>
<pre>{$_POST['comments']}</pre>
<p>We will reply to you at: <em>{$_POST['email']}</em></p>\n;";
} else {
    echo '<p>Please go back and fill out the form again.</p>';
}

// Complete the conditional begun in step 2:
// The fact that the script now uses $_POST has no effect on the results on the visible output.

?>
