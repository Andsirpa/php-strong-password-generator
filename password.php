<?php
session_start();

require_once __DIR__ . '/functions.php';


if (isset($_GET['password'])) {
    $password = $_GET['password'];
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qXvEn5lD3+9zX27R7G3y417Z7N3i6lDFZfZcBij7/F5S5N5CqH9Vsxe9" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-primary">Password Generata</h1>
        <p class="text-center mb-3">La tua password è:</p>
        <div class="text-center">
            <strong>
                <?php echo $password; ?>
            </strong>
        </div>
    </div>
</body>

</html>