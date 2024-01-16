<?php
class Address
{
    public $street;
    public $city = "Torino";

    //Costruttore, viene richiamato dove scriviamo new Address(...)
    public function __construct($strada, $citta = null)
    {
        //Prendo gli argomenti passati e li assegno a QUESTA istanza che sto creando
        $this->street = $strada;
        if ($citta) {
            $this->city = $citta;
        }
    }

    public function getFullAddress()
    {
        $result = $this->street . " (" . $this->city . " )";
        return $result;
    }
}
