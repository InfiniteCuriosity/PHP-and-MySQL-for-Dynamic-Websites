<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<title>Chapter 2 VReview</title>
</head>

<?php
echo '1. What is the significance of a form\'s attribute?<br>';
echo 'The attribute dictates the page to which the form data will be sent.<br><br>';

echo '2. Why must an HTML form that gets submitted to a PHP script be loaded through a URL?<br>';
echo 'Because the PHP script must be run through a URL.<br><br>';

echo '3. What would happen upon submitting the form if it were not loaded through a URL?<br>';
echo 'It would not run<br><br>';

echo '4. What are the differences between using single and double quotation marks to delineate strings?<br>';
echo 'The variables can be placed within the string when using double quotation marks and PHP will attempt to find variables within double quotation marks.<br><br>';

echo '5. What control structures were introduced in this chapter?<br>';
echo 'If, else, elseif, loops, arrays, multi-dimensional arrays<br><br>';

echo '6. What new variable type was introduced in this chapter?<br>';
echo 'Arrays<br><br>';

echo '7. What operator tests for equality? <br>';
echo 'The double equals sign. For example $cost==25<br><br>';

echo '8. What is the assignment operator?<br>';
echo 'The single equal sign. For example, $cost = 25<br><br>';

echo '9. Why are textual form elements validated using empty() but other form elements are validated using isset()?<br>';
echo 'The empty() function checks if <i>something</i> was typed in the form, so it can check if the entry is blank. But an empty string tests as true with isset() so isset() is not the best test for strings.<br><br>';

echo '10. What is the difference between an indexed array and an associative array?<br>';
echo 'Indexed arrays use numbers as keys, Associative arrays use strings as keys.<br><br>';

echo '11. With what value do indexed arrays begin (by default)?<br>';
echo '0, for example, $orchestras[0]. Here\'s an example:<br>';
$orchestras = array('Chicago Symphony Orchestra', 'Cleveland Orchestra', 'London Symphony Orchestra');
echo 'orchestras[0]=';echo $orchestras[0];
echo '<br><br>';

echo '12. If an indexed array has ten elements in it, what would the expected index be of the last element in the array?<br>';
echo '9. For example, $music[9] would be the last item in an array with 10 elements.<br>';
$cities = array('Chicago', 'Berwyn', 'Forest Park', 'Oak Park', 'Melrose Park', 'Plainfield', 'Springfield', 'Normal', 'Escanaba', 'Ishpiming');
echo 'The last city in the array is '; echo $cities[9];
echo '<br><br>';

echo '13. What are the superglobal arrays?<br>';
echo 'Superglobal arrays are seven pre-defined arrays.<br><br>';

echo '14. From where do the following superglobals get their values?<br>

$_GET: the GET method<br>
$_POST: The POST method<br>
$_COOKIE: The server<br>
$_REQUEST: The GET or POST method<br>
$_SESSION: The server<br>
$_SERVER: The server<br>
$_ENV: The environment<br><br>';

echo '15. How can you print an individual indexed array item?<br>';
echo 'By calling on that individual item, for example, $music[1] has three American orchestras.<br><br>';
$music = array(); // defines the array
$music = array(1=>'Chicago Symphony Orchestra', 'Cleveland Orchestra', 'New York Philharmonic'); // adds elements to the array
echo 'the first value in the array is: ';
echo $music[1]; // prints a specific item in the array
echo '<br><br>';

echo '16. How can you print an individual <i>associatitive</i> array item?<br>';
echo 'by using the key to call the item<br>';
$capitols = array('Springfield' => 'Illinois', 'Lansing' => 'Michigan');
echo 'Springfield is the capitol of: ';
echo $capitols['Springfield'];
echo '<br><br>';

echo '17. What does the <b>count()</b> function do?<br>';
echo 'The <b>count()</b> function is used to count the number of items in an array<br>';
echo 'The number of items in the $capitols array is: '; echo count($capitols);

echo '<br><br>';

echo '18. What impact does pringing <b>\n</b> have on the browser?<br>';
echo '\n prints a new blank line<br><br>';

echo '20. Generally speaking, when would you use a <b>while</b> loop?<br>';
echo 'When we don\'t know the number of items we will be iterating.<br><br>';

echo '21. When would you use a <b>for</b> loop?<br>';
echo 'When we know the number of items we will be iterating<br><br>';

echo '22. What is the syntax of each loop type?<br>';
echo 'while (condition is true) perform function.<br>';
echo 'for (specific number of items) iterate through items and perform function<br><br>';

echo '23. What is the <b>++</b> operator?<br>';
echo 'It increases count by 1 in for loops<br><br>';

?>
</html>
