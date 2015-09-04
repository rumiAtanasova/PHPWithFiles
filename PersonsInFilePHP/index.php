<?php
/**
 * Created by PhpStorm.
 * User: remini
 * Date: 31.08.15
 * Time: 20:37
 */

function __autoload($class_name) {
    require_once $class_name.'.php';
}

$personInstance = new Person();

$numberOfPersons = readline("How many people you would like to enter?").PHP_EOL;

for ($i = 0; $i < $numberOfPersons; $i++) {
    $firstName = readline("Enter first name: ").PHP_EOL;
    $lastName = readline("Enter last name: ").PHP_EOL;
    $age = readline("Enter age: ").PHP_EOL;
    $address = readline("Enter address: ").PHP_EOL;

    $personInstance->changePerson($firstName, $lastName, $age, $address);

    $personAsString = serialize($personInstance);

    file_put_contents('persons.dat', $personAsString.'\n', FILE_APPEND);
}