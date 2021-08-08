<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calendar</title>
</head>
<body>
<form action="calendar.php"
      method="post">
<?php
// This script makes three pull down menus for an HTML form: Months, days, and years

// Make the months arrays:

$months = [1=> 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'];
// Make the days and years:
$days = range(1,31);
$years = range(2012,2027);

// Make the months pull-down menu:
echo '<select name="month">';
foreach ($months as $key => $value) {
echo "<option value=\"$key\">
$value</option>\n";
}
echo '</select>';

// Make the days pull-down menu:
echo '<select name="day">';
    foreach ($days as $value) {
        echo "<option value=\$value=\">
$value</option>\n";
    }
echo '</select>';

// Make the years pull-down menu:
echo '<select name="year">';
foreach ($years as $value) {
    echo "<option value=\"$value\">
$value</option>\n";
}
echo '</select>';
?>

</form>
</body>
</html>
