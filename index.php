<?php
// recupero il file functions.php
require_once __DIR__ . '/functions.php';


// Verifica se la richiesta è di tipo GET, e se è stata fornita la lunghezza
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['length'])) {
    // Ottieni la lunghezza dalla query string
    $length = $_GET['length'];

    // Genera la password utilizzando la funzione e reindirizza a password.php con la password come parametro
    header("Location: password.php?password=" . generate_password($length));
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password Sicuro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qXvEn5lD3+9zX27R7G3y417Z7N3i6lDFZfZcBij7/F5S5N5CqH9Vsxe9" crossorigin="anonymous">
</head>
<!-- creo il form -->

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-primary">Generatore di Password Sicuro</h1>
        <p class="text-center mb-3">Scegli la lunghezza della tua password:</p>
        <form action="index.php" method="get" class="row g-3 justify-content-center">
            <div class="col-auto">
                <label for="length" class="visually-hidden">Lunghezza:</label>
                <!-- scelgo la lunghezza della password -->
                <input type="number" name="length" id="length" class="form-control" min="8" max="32" value="16">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Genera Password</button>
            </div>
        </form>
    </div>
</body>

</html>