<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>numbers.php</title>
</head>
<body>

<?php // Script 1.8 numbers.php
// Set the variables:
$quantity = 30; // Buying 30 widgets
$price = 119.95; // price per widget
$taxrate = 0.05; // 5% sales tax

// Calculate the total:
$total = $quantity * $price;
$total = $total + ($total * $taxrate); // calculate and add sales tax

// Format the total:
$total = number_format($total,2);

// Print the results:
echo '<p>You are purchasing <strong>' . $quantity .'</strong>
widget(s) at a cost of <strong>$' . $price . '</strong>
each. With tax the total comes to: <strong>$' . $total . '</strong></p>'; // note the last strong in single parentheses.

?>
</body>
</html>