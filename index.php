<?php

/* Importo i modelli, cioè le "definizioni" delle classi di oggetto */
require __DIR__ . '/Models/Address.php';
require __DIR__ . '/Models/User.php';

// Creo un oggetto "indirizzo" vuoto
// $ind_lorenzo = new Address();

// Popolo gli attributi dell'oggetto vuoto
// $ind_lorenzo->street = "via roma";
// $ind_lorenzo->number = "123";
// $ind_lorenzo->postalCode = "80100";
// $ind_lorenzo->city = "salerno";
// $ind_lorenzo->country = "italia";

// Creo un oggetto "indirizzo" già popolato tramite il costruttore presente nel modello
$ind_lorenzo = new Address("via roma", 123, 80100, "Salerno", "Italy");
// Popolo/altero l'attributo città in secondo momento
$ind_lorenzo->city = "Torino";

// Un altro indirizzo
$ind_marco = new Address("via alberata", 1024, 10135, "Salerno", "Italy");

//Per stampare oggetti non basta un echo
echo "<h2>Stampo oggetti indirizzo</h2>";
var_dump($ind_lorenzo);
var_dump($ind_marco);

//Posso stampare una proprietà dell'istanza. Ognuno avrà valori propri e diversi.
echo "<h2>Stampo proprietà degli oggetti indirizzo</h2>";
echo $ind_lorenzo->street . "<br>";
echo $ind_marco->street . "<br>";

//Posso richiamare un metodo dell'istanza. Ognuno avrà valori propri e diversi.
echo "<h2>Chiamo metodi degli oggetti indirizzo</h2>";
echo $ind_lorenzo->getFullAddress() . "<br>";
echo $ind_marco->getFullAddress() . "<br>";

echo "<hr>";

//Creo un'istanza di Utente, usando un indirizzo creato in precedenza
$lorenzo = new User("Lorenzo", "Pagani", $ind_lorenzo);

//Creo un'istanza di Utente, con indirizzo definito "al volo"
$pippo = new User("Pippo", "Pagani", new Address("via italia", 123, 80100, "Salerno", "Italy"));

echo "<h2>Stampo oggetto utente</h2>";
var_dump($lorenzo) . "<br>";
echo "<h2>Stampo proprietà indirizzo dell'oggetto utente</h2>";
var_dump($lorenzo->address) . "<br>";
echo "<h2>Chiamo metodo della proprietà indirizzo dell'oggetto utente</h2>";
echo $lorenzo->address->getFullAddress() . "<br>";
