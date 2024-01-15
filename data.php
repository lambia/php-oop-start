<?php

// Importo i modelli, cioè le "definizioni" delle classi di oggetto
// require_once __DIR__ . '/Models/Address.php';
// require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/PremiumUser.php';

//Creo un array in cui ogni elemento è un'istanza di User
$utenti = [
    new PremiumUser(
        "Lorenzo",
        "Pagani",
        ["Buy"],
        new Address("via roma", 123, 80100, "Torino")
    ),
    new PremiumUser(
        "Pippo",
        "Pagani",
        ["Buy", "Sell", "Advertise"],
        new Address("via italia", 123, 40330, "Salerno", "Italy")
    ),
    new User(
        "Andrea",
        "Francioni",
        ["Buy", "Sell"],
        new Address("viale degli ulivi", 123, 20110, "Roma", "Italy")
    ),
    new User(
        "Francesco",
        "Bonanno",
        ["Ship"],
        new Address("corso unione sovietica", 123, 10135, "Napoli", "Italy")
    )
];

// $utenti[0]->setName("Pippo");

$utenti[0]->membership = "Gold";
$utenti[1]->membership = "Platinum";
