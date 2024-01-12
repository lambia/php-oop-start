<?php
class Address
{
    public $street;
    public $number;
    public $postalCode;
    public $city;
    public $country;

    //Costruttore, viene richiamato dove scriviamo new Address(...)
    public function __construct($strada, $civico, $cap, $citta, $nazione)
    {
        //Prendo gli argomenti passati e li assegno a QUESTA istanza che sto creando
        $this->street = $strada;
        $this->number = $civico;
        $this->postalCode = $cap;
        $this->city = $citta;
        $this->country = $nazione;
    }

    public function getFullAddress()
    {
        $result = $this->street . ", " . $this->number . " - " . $this->city . " (" . $this->postalCode . ")";
        return $result;
    }
}
