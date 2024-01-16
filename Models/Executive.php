<?php

require_once __DIR__ . '/Employee.php';
require_once __DIR__ . '/Benefits.php';

class Executive extends Employee
{
    public $azioni;
    use Benefits;

    public function __construct($name, Department $department, $azioni)
    {
        parent::__construct($name, $department);
        $this->azioni = $azioni;
    }
}
