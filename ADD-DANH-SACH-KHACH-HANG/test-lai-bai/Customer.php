<?php


class Customer
{
    private $name;
    private $age;
    private $birthday;
    private $address;


    public function __construct($name, $age, $birthday, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->birthday = $birthday;
        $this->address = $address;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function getAddress()
    {
        return $this->address;
    }



}