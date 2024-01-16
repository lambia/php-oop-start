<?php

require_once __DIR__ . '/Employee.php';

class Executive extends Employee
{
    public $azioni;

    public function __construct($name, array $permissions, Address $indirizzo, Department $department, $azioni)
    {
        parent::__construct($name, $permissions, $indirizzo, $department);
        $this->azioni = $azioni;
    }
}
