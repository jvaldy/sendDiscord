<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier sur Discord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4">
        <?php
        session_start();
        require_once 'controller.php';

        $controller = new Controller();
        $controller->handleRequest();
        ?>
    </div>
</body>
</html>
