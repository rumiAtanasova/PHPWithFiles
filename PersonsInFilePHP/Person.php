<?php
/**
 * Created by PhpStorm.
 * User: remini
 * Date: 31.08.15
 * Time: 20:37
 */

class Person {

    public $firstName;

    public $lastName;

    public $age;

    public $address;

    function __construct($firsName = null, $lastName = null, $age = null, $address = null) {
        $this->firstName = $firsName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    function changePerson($firsName , $lastName, $age, $address) {
        $this->firstName = $firsName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->address = $address;
    }

}