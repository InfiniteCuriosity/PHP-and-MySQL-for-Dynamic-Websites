<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Loops</title>
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
        echo "<option value=\"$key\">$value</option>\n";
    }
    echo '</select>';

    // Make the days pull-down menu:
    echo '<select name="day">';
        for ($day = 1; $day<=31; $day++) {
            echo "<option value=\"$day\">$day</option>\n"; // I missed one quote mark here, that made a huge difference
    }
    echo '</select>';

    // Make the years pull-down menu:
    echo '<select name="years">';
    for($years = 2012; $years<=2027; $years++) {
        echo "<option value=\"$years\">$years</option>\n"; // I missed one quote mark here, that made a huge difference
    }
    echo '</select>';
    ?>
<!-- this uses two fewer arrays than the previous version - yay! -->
<!-- this runs correctly! -->
</form>
</body>
</html>
