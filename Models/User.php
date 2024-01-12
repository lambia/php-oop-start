<?php
class User
{
    public $name;
    public $surname;
    public $address;

    public function __construct($name, $surname, Address $indirizzo)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $indirizzo;
    }
}
