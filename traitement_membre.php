
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/authentification.css">
    <link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Reserver</title>
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
<a href ="formulaire_membre.php"class="btn-home"  ><i class="ri-home-2-line"></i></a>
        <h1>Reservation</h1>
    </header>
    <div class="container">
        
    <?php
session_start();

if (isset($_SESSION["id_adherent"])) {
    $id_adherent = $_SESSION["id_adherent"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdl-ac2fl";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_avion = $_POST["id_avion"];
        $date_debut = $_POST["date_debut"];
        $date_fin = $_POST["date_fin"];
    
        // Formater les dates dans le format Y-m-d pour la base de données
        $date_debut = date('Y-m-d', strtotime($date_debut));
        $date_fin = date('Y-m-d', strtotime($date_fin));
    
        try {
            // ... (votre traitement existant)
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    
        $conn = null; // Fermeture de la connexion à la base de données
    } else {
        echo "Erreur : Aucune donnée de formulaire reçue.";
    }

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Vérifier si les dates choisies entrent en conflit avec des réservations existantes
        $stmt_check = $conn->prepare("SELECT id_demande FROM bdl_demandes WHERE id_avion = :id_avion AND :date_debut <= fin AND :date_fin >= debut");
        $stmt_check->bindParam(':id_avion', $id_avion);
        $stmt_check->bindParam(':date_debut', $date_debut);
        $stmt_check->bindParam(':date_fin', $date_fin);
        $stmt_check->execute();

        if ($stmt_check->rowCount() > 0) {
            echo "Les dates sélectionnées entrent en conflit avec des réservations existantes.";
        } else {
            // Vérifier s'il existe déjà une demande en cours pour cet utilisateur
            $stmt_check = $conn->prepare("SELECT id_demande FROM bdl_demandes WHERE id_adherent = :id_adherent AND fin >= NOW()");
            $stmt_check->bindParam(':id_adherent', $id_adherent);
            $stmt_check->execute();

            if ($stmt_check->rowCount() > 0) {
                echo "Vous avez déjà une demande en cours. Veuillez attendre qu'elle soit traitée avant d'en soumettre une nouvelle.";
            } else {
                // Générer un identifiant unique pour la nouvelle demande
                $id_demande = uniqid();

                $stmt_insert = $conn->prepare("INSERT INTO bdl_demandes (id_adherent, id_avion, debut, fin) VALUES (:id_adherent, :id_avion, :date_debut, :date_fin)");
                $stmt_insert->bindParam(':id_adherent', $id_adherent);
                $stmt_insert->bindParam(':id_avion', $id_avion);
                $stmt_insert->bindParam(':date_debut', $date_debut);
                $stmt_insert->bindParam(':date_fin', $date_fin);
                $stmt_insert->execute();

                echo "Demande de réservation effectuée avec succès!";
            }
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $conn = null; // Fermeture de la connexion à la base de données
} else {
    // Rediriger l'utilisateur vers la page d'authentification si l'ID adhérent n'est pas défini
    header("Location: login.php");
    exit();
}
?>
<!-- Bouton pour revenir à la page précédente -->
<button class="submit_class" type="button" onclick="redirectToProfile()">Voir vos réservations</button>
    </div>

    <script>
    function redirectToProfile() {
        window.location.href = "profil.php";
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





