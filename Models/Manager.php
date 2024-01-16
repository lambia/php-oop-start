<?php

require_once __DIR__ . '/Employee.php';

class Manager extends Employee
{
    public $teamDaGestire;

    public function __construct($name, Department $department, $team)
    {
        $this->name = $name;
        $this->department = $department;
        $this->teamDaGestire = $team;
    }
}
