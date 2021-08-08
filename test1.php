<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sorting Arrays</title>
</head>
<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
    <thread>
        <tr>
            <th><h2>Name</h2></th>
            <th><h2>Rating</h2></th>
        </tr>
    </thread>
    <tbody>
    <?php
    // sorting with PHP
    // Create the array:
    $friends = [
        "Fred Flintstone"=>10,
        "Barney Rubble" => 10,
        "Felix the Cat" => 7,
        "Bart Simpson" => -6,
        "Marilyn Monroe"=> 10,
        "Loni Anderson"=> 19
    ];

    // Display the friends in their original order

    echo '<tr><td colspan="2"><strong>In their original order:</strong></td></tr>';
    foreach ($friends as $name => $rating) {
        echo "<tr><td>$rating</td>
    <td>$name</td></tr>\n";
    }

    // Display the friends sorted by name:
    ksort($friends);
    echo '<tr><td colspan="2"><strong>Sorted by name:</strong></td></tr>';
    foreach ($friends as $name => $rating) {
        echo "<tr><td>$rating</td>
    <td>$name</td></tr>\n";
    }
    // Display the friends sorted by rating:
    arsort($friends);
    echo '<tr><td colspan="2"><strong>Sorted by rating:</strong></td></tr>';
    foreach ($friends as $name => $rating) {
        echo "<tr><td>$rating</td>
    <td>$name</td></tr>\n";
    }
    ?>
    </tbody>
</table>
</body>
</html>
