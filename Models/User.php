<?php

require_once __DIR__ . '/Address.php';

class User
{
    public $name;
    public $surname;
    public $permissions;
    public $address;

    public function __construct($name, $surname, array $permissions, Address $indirizzo)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->permissions = $permissions;
        $this->address = $indirizzo;
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
