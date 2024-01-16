<?php

class Department
{
    public $name;
    public $description;

    public function __construct($name, $desc)
    {
        $this->name = $name;
        $this->description = $desc;
    }
}
