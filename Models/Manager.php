<?php

require_once __DIR__ . '/Employee.php';
require_once __DIR__ . '/Benefits.php';

class Manager extends Employee
{
    public $teamDaGestire;
    use Benefits;

    public function __construct($name, Department $department, $team)
    {
        $this->name = $name;
        $this->department = $department;
        $this->teamDaGestire = $team;
    }
}
