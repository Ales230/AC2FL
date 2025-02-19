<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdl-ac2fl";
$db = new mysqli($servername, $username, $password, $dbname);

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupère les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero_licence = $_POST['numero_licence'];

    // Vérifie la validité des données
    if (empty($nom) || empty($prenom) || empty($numero_licence)) {
        echo 'Veuillez remplir tous les champs obligatoires.';
        exit;
    }

    // Insère les données dans la base de données
    $sql = "INSERT INTO bdl_pilotes (nom, prenom, numero_licence)
    VALUES ('$nom', '$prenom', '$numero_licence');";
    $result = $db->query($sql);

    // Vérifie le résultat de l'insertion
    if ($result === TRUE) {
        echo 'Le pilote a été ajouté avec succès.';
    } else {
        echo 'Erreur lors de l\'ajout du pilote : ' . $db->error;
    }
}
?>
<?php
session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] === 'admin')) {
    header('Location: login.php');
    exit();
}

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bdl-ac2fl";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    throw new Exception("La connexion a échoué : " . $db->connect_error);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/authentification.css">
    <link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Félicitations !</title>
    <style>
        body {
            font-family: 'Saira Extra Condensed', sans-serif;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin: 0;
            padding: 0;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<header>
<a href ="index.php"class="btn-home"  ><i class="ri-home-2-line"></i></a>
        <h1>Félicitations !</h1>
    </header>
    <div class="container">
        
            <h1>Le pilote a été ajouté avec succès.</h1>
        
        
        <!-- Contenu de la page -->

        <!-- Bouton pour revenir à la page précédente -->
        <button class="submit_class" type="submit" form="login_form" onclick="goBack()">Continuer</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <style>
        body {
    background: url(Ressources/jet.jpg) no-repeat;
    background-size:cover;
    background-position-y: -150px;
}
</style>
</body>
</html>


