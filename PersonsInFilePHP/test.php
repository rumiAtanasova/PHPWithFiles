<?php
/**
 * Created by PhpStorm.
 * User: remini
 * Date: 31.08.15
 * Time: 21:12
 **/
require_once('Person.php');

$personStr = file_get_contents('persons.dat');
$find = '\n';
$personsCount = substr_count($personStr, $find).PHP_EOL;
//echo $pos.PHP_EOL;
//echo substr($personStr, $pos+1).PHP_EOL;
//echo $personStr.PHP_EOL;


$myPerson = new Person();


for($i = 0; $i < $personsCount; $i++ ) {
    $myPerson =unserialize($personStr);
    $pos = strpos($personStr, $find);
    $personStr = substr($personStr, $pos+2).PHP_EOL;
    print_r($myPerson);

}

