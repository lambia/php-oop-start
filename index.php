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
            <?php foreach ($dipendenti as $dipendente) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $dipendente->getName() ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= get_class($dipendente) . ", " . $dipendente->department->name ?>
                                <!-- L'address è obbligatorio, quindi ci basta stampare direttamente -->
                            </h6>
                            <p class="card-text">
                                <?php
                                if ($dipendente instanceof Manager) {
                                    echo "Gestisce il team " . $dipendente->teamDaGestire;
                                } else if ($dipendente instanceof Executive) {
                                    echo "Possiede " . $dipendente->azioni . " azioni della società";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>