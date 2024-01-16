<?php

require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/Department.php';

class Employee
{
    protected $name;
    public $address;
    public $department;

    public function __construct($name, Department $department)
    {
        $this->name = $name;
        $this->department = $department;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($nuovoNome)
    {
        $this->name = $nuovoNome;
    }
}
