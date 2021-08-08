<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Notes and Review for Chapter 1</title>
</head>
<body>

<?php

echo 'What tags are used to surround PHP code?';
# <?php and ? >

# What extension should a PHP file have?
#.php extention

# What does a page’s encoding refer to?
#Which characters can be represented. The one I'm using is UTF-8, which is 8-bit unicode transformation format.

# What impact does the encoding have on the page?
#The encoding qualifies which characters can - and cannot - be represented.

# What PHP functions, or language constructs, can you use to send data to the browser?
# Echo and Print

# Images How does using single versus double quotation marks differ in creating or printing strings?
# Single quotes are produced literally, double quotes are interpreted. (I'm having a little trouble keeping that straight!)

# What does it mean to escape a character in a string?
# that the character has already been used, and it needs to be escaped to work correctly in PHP

# What are the three comment syntaxes in PHP? Which one can be used over multiple lines?
# one is the hash tag: #, the second is two dashes: //, and the third is /* */, but I'm not fond of the third one.

#What character do all variable names begin with?
# a $, such as $name, or $street

# What characters can come next?
# A character or an underscore, it cannot be a number

# What other characters can be used in a variable’s name?
# an underscore, for example $employee_1

# Are variable names case-sensitive or case-insensitive?
# Variable names in PHP are case sensitive

# What is the assignment operator?
# a single = sign, as in $name = 'Russ'

# How do you create a string variable?
$String_Variable = 'example';

# What is the concatenation operator?
# it is a period (.) for example, $address = $city . ',' . $state.

# What is the concatenation assignment operator?
# when I am merely (?) concatenating on evalue to another. The symbol is .= and here is an example:
$title .= $subtitle;

# How are constants defined and used?
# it starts with define (in lower case), and then the name of the constant and a value:
# define ('Street', 'Main Street');
?>
</body>
</html>