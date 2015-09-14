<?php
include_once("./../lib/input.php");

echo '$_GET is empty<br />';
var_dump( inputGet('page', 'int', 0) );
echo "<br >-----------------<br />";


$_GET = [
    "page" => 1
];
echo 'Has page in $_GET array and its int<br />';
echo inputGet('page', 'int', 0);
echo "<br >-----------------<br />";


$_GET = [
    "page" => 'str'
];

echo 'Has page in $_GET array and its str<br />';
var_dump( inputGet('page', 'int', 0) );
echo "<br >-----------------<br />";


$_GET = [
    "section" => 'home'
];

echo 'Has page in $_GET array and its str<br />';
var_dump( inputGet('section', 'str', '404') );
echo "<br >-----------------<br />";


$_GET = [
    "section" => 1000
];
echo 'Has page in $_GET array and its str<br />';
var_dump( inputGet('section', 'str', '404') );
echo "<br >-----------------<br />";



$_POST = [
    "page" => 1
];
echo 'Has page in $_GET array and its int<br />';
echo inputPOST('page', 'int', 0);
echo "<br >-----------------<br />";
