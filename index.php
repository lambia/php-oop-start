<?php
// Importo lo "strato dati"
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utenti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="row">
            <h2>Utenti</h2>
        </div>
        <div class="row">
            <?php foreach ($utenti as $utente) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $utente->name . " " . $utente->surname ?>
                                <!-- Per la membership andrebbe usato almeno "property_exists" -->
                                <?= (isset($utente->membership)) ? "(" . $utente->membership . ")" : "" ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <!-- Stampa la città, se presente, altrimenti "Sconosciuto" -->
                                <?php /* echo isset($utente->address) ? $utente->address->city : "Sconosciuto"; */ ?>
                                <!-- Stampa la città, se presente (v. nullsafe operator slide 21) -->
                                <?php /* echo $utente->address?->city; */ ?>
                                <!-- L'address è obbligatorio, quindi ci basta stampare direttamente -->
                                <?= $utente->address->country ?>
                            </h6>
                            <p class="card-text"><?= implode(", ", $utente->permissions) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>