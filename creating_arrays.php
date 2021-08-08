<?php
$state = array('IA' => 'Iowa',
    'MD' => 'Maryland');

echo $state['IA']."<br>"; // prints a blank line in an echo statement

// output = 'Iowa'<br>
$artists = array ('Clem Snide', 'The Shins', 'Eels');
echo $artists[1]."<br>";

// The <strong>array()</strong> function is also used to initialize an array prior to referencing it:

$tv = array();
$tv='Flight of the Conchords';
echo $tv."<br>";

// To create an array of sequential numbers:
$ten = range(1,10);

// Accessing the entire array:
// To access all elements of an array, use a foreach loop:



