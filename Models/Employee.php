<?php

require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/Department.php';

class Employee
{
    protected $name;
    public $address;
    public $permissions;
    public $department;

    public function __construct($name, array $permissions, Address $indirizzo, Department $department)
    {
        $this->name = $name;
        $this->address = $indirizzo;
        $this->permissions = $permissions;
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
