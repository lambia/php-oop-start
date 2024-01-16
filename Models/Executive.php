<?php

require_once __DIR__ . '/Employee.php';

class Executive extends Employee
{
    public $azioni;

    public function __construct($name, Department $department, $azioni)
    {
        parent::__construct($name, $department);
        $this->azioni = $azioni;
    }
}
