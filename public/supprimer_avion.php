<?php
require_once("database.php");

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bdl-ac2fl";

$dbname = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
session_start();

if (!(isset($_SESSION['role']) && $_SESSION['role'] === 'admin')) {
    header('Location: login.php');
    exit();
}

require_once('database.php');



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
    <title>Modifier un avion</title>
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
<a href ="formulaire_admin.php"class="btn-home"  ><i class="ri-home-2-line"></i></a>
        <h1>Supprimer un avion</h1>
    </header>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_avion'])) {
            $id_avion = $_GET['id_avion'];
        
            // Supprimer les demandes associées à l'avion
            $sql_delete_demandes = "DELETE FROM bdl_demandes WHERE id_avion=$id_avion";
            $result_delete_demandes = $dbname->query($sql_delete_demandes);
        
            if ($result_delete_demandes === TRUE) {
                // Maintenant, vous pouvez supprimer l'avion en toute sécurité
                $sql_delete_avion = "DELETE FROM bdl_avions WHERE id_avion=$id_avion";
        
                if ($dbname->query($sql_delete_avion) === TRUE) {
                    echo 'L\'avion et les demandes associées ont été supprimés avec succès.';
                } else {
                    echo 'Erreur lors de la suppression de l\'avion : ' . $dbname->error;
                }
            } else {
                echo 'Erreur lors de la suppression des demandes : ' . $dbname->error;
            }
        } else {
            echo "Identifiant de l'avion non spécifié ou méthode non autorisée.";
        }
        ?>
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
