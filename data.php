<?php

// Importo i modelli, cioè le "definizioni" delle classi oggetto
// require_once __DIR__ . '/Models/Address.php';
// require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Manager.php';
require_once __DIR__ . '/Models/Executive.php';
require_once __DIR__ . '/Models/Department.php';

//Predispongo tutti i Department
$dept_it = new Department("IT", "Facciamo funzionare cose");
$dept_legal = new Department("Legal", "Ti aiutiamo a non andare in galera");
$dept_fiscale = new Department("Economic", "Ti aiutiamo ad evadere il fisco");

//Creo un array in cui ogni elemento è un'istanza Employee o derivata
$dipendenti = [
    new Employee("Pippo Pagani", $dept_legal),
    new Employee("Francesco Bonanno", $dept_fiscale),
    new Employee("Lorenzo Pagani", $dept_it),
    new Manager("Andrea Francioni", $dept_it, "Commerciale"), //Parametro aggiuntivo
    new Executive("Marco Percolla", $dept_it, 42) //Parametro aggiuntivo
];

// Non sarebbe più necessario, perchè Manager e Executive hanno i loro costruttori ridefiniti
// Lasciato per esempio
if ($dipendenti[3] instanceof Manager) {
    $dipendenti[3]->autoAziendale = "TG012XY";
}

if ($dipendenti[4] instanceof Executive) {
    $dipendenti[4]->autoAziendale = "FD013BR";
    $dipendenti[4]->telefonoAziendale = "338 45 45 465";
}
