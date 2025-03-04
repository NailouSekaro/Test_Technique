<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_Technique</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.4.1/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    
</head>

<body>
    <div class="container text-center">
        <h1 class="display-4 mt-5">Bienvenue sur l'application de gestion de tâches</h1>
        <p class="lead">Connectez-vous ou inscrivez-vous pour commencer à gérer vos tâches.</p>
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg">S'inscrire</a>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
