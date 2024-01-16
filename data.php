<?php

// Importo i modelli, cioè le "definizioni" delle classi oggetto
// require_once __DIR__ . '/Models/Address.php';
// require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Manager.php';
require_once __DIR__ . '/Models/Executive.php';
require_once __DIR__ . '/Models/Department.php';

$dept_it = new Department("IT", "Facciamo funzionare cose");
$dept_legal = new Department("Legal", "Ti aiutiamo a non andare in galera");
$dept_fiscale = new Department("Economic", "Ti aiutiamo ad evadere il fisco");

//Creo un array in cui ogni elemento è un'istanza User
$dipendenti = [
    new Employee(
        "Pippo Pagani",
        ["Principale", "Napoli"],
        new Address("via italia, 142", "Salerno"),
        $dept_legal
    ),
    new Employee(
        "Francesco Bonanno",
        [],
        new Address("corso unione sovietica, 21", "Napoli"),
        $dept_fiscale
    ),

    new Employee(
        "Lorenzo Pagani", //Nome e cognome
        ["Principale"], //Sedi a cui si ha accesso
        new Address("via roma, 123"), //Indirizzo
        $dept_it
    ),
    new Manager(
        "Andrea Francioni",
        ["Principale", "Roma", "Napoli"],
        new Address("viale degli ulivi, 101", "Roma"),
        $dept_it,
        "Team SysAdmin"
    ),
    new Executive(
        "Marco Percolla",
        ["Principale", "Roma", "Napoli"],
        new Address("corso san gottardo, 6", "Milano"),
        $dept_it,
        42
    )
];

// if (property_exists($dipendenti[3], "teamDaGestire")) {
//     $dipendenti[3]->teamDaGestire = "Team SysAdmin";
// }
// if (property_exists($dipendenti[4], "azioni")) {
//     $dipendenti[4]->azioni = 40;
// }