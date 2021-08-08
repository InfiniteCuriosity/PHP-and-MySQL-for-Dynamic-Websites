<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>quotes.php</title> // testing how single and double quotation marks affect the output in PHP
</head>
<body>

<?php // Script 1.10 quotes.php Looking at how single and double quotation marks are used in PHP
// Set the variables:
$quantity = 30; // Buying 30 widgets
$price = 119.95; // price per widget
$taxrate = 0.05; // 5% sales tax

// Calculate the total:
$total = $quantity * $price;
$total = $total + ($total * $taxrate); // calculate and add sales tax

// Format the total:
$total = number_format($total,2);

// Print the results using single quotation marks - which PHP interprets literally:
echo '<h3>Using single quotation marks:</h3>';
echo '<p>You are purchasing <strong>' . $quantity .'</strong>
widget(s) at a cost of <strong>$' . $price . '</strong>
each. With tax the total comes to: <strong>$' . $total . '</strong></p>'; // note the last strong in single parentheses.

// Print the results using double quotation marks, which will be interpreted:
echo "<h3>Using double quotation marks:</h3>";
echo "<p>You are purchasing <strong>$quantity</strong>widget(s) at a coast of <strong>\$$price</strong> each. Wtih tax, the total comes to <strong>\$$total</strong>.</p>\n";

?>
</body>
</html>