<?php

require_once __DIR__ . '/Employee.php';

class Manager extends Employee
{
    public $teamDaGestire;

    public function __construct($name, array $permissions, Address $indirizzo, Department $department, $team)
    {
        $this->name = $name;
        $this->address = $indirizzo;
        $this->permissions = $permissions;
        $this->department = $department;
        $this->teamDaGestire = $team;
    }
}
