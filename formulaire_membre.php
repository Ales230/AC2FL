<?php
session_start(); // Démarrer la session
if (!(isset($_SESSION['role']) && $_SESSION['role'] === 'membre')) {
    // Rediriger vers une page d'erreur ou une page non autorisée
    header('Location: login.php');
    exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdl-ac2fl";

// Connexion à la base de données
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id_adherent = $_SESSION['id_adherent'];


// Récupération des données de la table bdl_avions
$stmt = $conn->query("SELECT id_avion, type FROM bdl_avions");
$avions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupération des dates déjà demandées
$stmt_dates = $conn->prepare("SELECT debut, fin FROM bdl_demandes WHERE id_avion = :id_avion");
$stmt_dates->bindParam(':id_avion', $id_avion);
$stmt_dates->execute();
$dates_demandees = $stmt_dates->fetchAll(PDO::FETCH_ASSOC);


$dates_indisponibles = [];

// Récupération des dates indisponibles depuis la base de données
foreach ($dates_demandees as $dates) {
    $date_debut = new DateTime($dates['debut']);
    $date_fin = new DateTime($dates['fin']);

    while ($date_debut <= $date_fin) {
        $dates_indisponibles[] = $date_debut->format('d-m-y');
        $date_debut->modify('+1 day');
    }
}

$dates_indisponibles = array_unique($dates_indisponibles);
$dates_indisponibles_formatted = [];

foreach ($dates_indisponibles as $date) {
    $date_obj = DateTime::createFromFormat('d-m-y', $date);
    $formatted_date = $date_obj->format('Y-m-d');
    $dates_indisponibles_formatted[] = $formatted_date;
}

$dates_indisponibles_formatted = array_unique($dates_indisponibles_formatted);
sort($dates_indisponibles_formatted);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="Styles/formulaire_membre.css">
    <link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
<header>

        <h1>Formulaire de réservation</h1>
        <a href ="index.php"class="btn-home"  ><i class="ri-home-2-line"></i></a>         
        <a href="deconnexion.php" class="btn btn-danger"><i class="nav-item">Déconnexion</i></a>
   

    </header>

    

    <form method="post" action="traitement_membre.php">
        <label class="label_date"for="id_avion">Type d'appareil :</label>
        <select id="id_avion" name="id_avion" required>
            <?php foreach ($avions as $avion) : ?>
                <option value="<?php echo $avion['id_avion']; ?>">
                    <?php echo $avion['type']; ?> 
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="date_debut">Date de début :</label>
        <input type="text" id="date_debut" name="date_debut" autocomplete="off"  required placeholder="Choisissez une date de début"><br><br>

        <label for="date_fin">Date de fin :</label>
        <input type="text" id="date_fin" name="date_fin"  autocomplete="off" required placeholder="Choisissez une date de fin"><br><br>

        <input type="submit" value="Valider la réservation">
    </form>
    
    <script>
        // Récupérer les dates indisponibles depuis PHP
        let datesIndisponibles = <?php echo json_encode($dates_indisponibles); ?>;

        // Convertir les dates en format compréhensible par DatePicker
        datesIndisponibles = datesIndisponibles.map(date => new Date(date).toISOString().split('T')[0]);

        // Activer DatePicker pour les champs de date
        $("#date_debut").datepicker({
    minDate: 0,
    maxDate: datesIndisponibles[0],
    dateFormat: 'dd-mm-yy', // Format des dates du datepicker
    beforeShowDay: function(date) {
        const formattedDate = $.datepicker.formatDate('yy-mm-dd', date); // Format 'Y-m-d' pour la comparaison
        return [!datesIndisponibles.includes(formattedDate)];
    }
});

$("#date_fin").datepicker({
    minDate: 0,
    maxDate: datesIndisponibles[datesIndisponibles.length - 1],
    dateFormat: 'dd-mm-yy', // Format des dates du datepicker
    beforeShowDay: function(date) {
        const formattedDate = $.datepicker.formatDate('yy-mm-dd', date); // Format 'Y-m-d' pour la comparaison
        return [!datesIndisponibles.includes(formattedDate)];
    }
});


    </script>

<style>
        body {
    background: url(Ressources/fond_login.jpg) no-repeat;
    background-size:cover;
}
</style>
</body>
</html>

<?php
// Fermer la connexion à la base de données
$conn = null;
?>
