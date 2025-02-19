<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/formulaire_admin.css">
    <link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Formulaire administrateur</title>
</head>
<body>
<header>
<h1>Formulaire administrateur</h1>
<a href ="index.php"class="btn-home"  ><i class="ri-home-2-line"></i></a>
<a href="deconnexion.php" class="btn btn-danger"><i class="nav-item">Déconnexion</i></a>

        
    </header>
<main>
<?php
session_start(); // Démarrez la session au début du script
// Vérifier si la session existe et si l'utilisateur a le rôle admin
if (!(isset($_SESSION['role']) && $_SESSION['role'] === 'admin')) {
    // Rediriger vers une page d'erreur ou une page non autorisée
    header('Location: login.php');
    exit();
}
require_once('database.php');
require_once('adherent.php');
require_once('pilote.php');
require_once('avion.php');

// Initialisez la connexion à la base de données (vous devez déjà avoir cette partie)
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bdl-ac2fl";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    throw new Exception("La connexion a échoué : " . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $idAdherent = $_POST['id_adherent'];
    $idPilote = $_POST['id_pilote'];
    $idAvion = $_POST['id_avion'];
    $dateDebut = $_POST['date_debut'];
    $dateFin = $_POST['date_fin'];

    // Validate data
    $errors = array();

    // Create an instance of mysqli for the Adherent class
    $adherentDb = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Validate the existence of the adherent
    $adherent = new Adherent($data, $adherentDb);
    if (!$adherent->findAdherentById($idAdherent)) {
        $errors[] = "L'adhérent avec l'ID $idAdherent n'existe pas.";
    }

    // Validate the existence of the avion
    $avion = new Avion($db);
    if (!$avion->findAvionById($idAvion)) {
        $errors[] = "L'avion avec l'ID $idAvion n'existe pas.";
    }

    // Check for conflicts with existing reservations
    $conflictCheckQuery = "SELECT * FROM bdl_reservations 
                          WHERE ((id_pilote = '$idPilote' AND (debut BETWEEN '$dateDebut' AND '$dateFin' OR fin BETWEEN '$dateDebut' AND '$dateFin')) 
                          OR (id_adherent = '$idAdherent' AND (debut BETWEEN '$dateDebut' AND '$dateFin' OR fin BETWEEN '$dateDebut' AND '$dateFin')) 
                          OR (id_avion = '$idAvion' AND (debut BETWEEN '$dateDebut' AND '$dateFin' OR fin BETWEEN '$dateDebut' AND '$dateFin')))";

    $conflictCheckResult = $db->query($conflictCheckQuery);

    if ($conflictCheckResult->num_rows > 0) {
        $errors[] = "Conflits avec des reservations existantes, veuillez choisir une autre date.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Proceed with reservation creation
        $checkColumnsQuery = "SHOW COLUMNS FROM bdl_reservations WHERE Field IN ('debut', 'fin')";
        $resultColumns = $db->query($checkColumnsQuery);

        if ($resultColumns->num_rows == 2) {
            $sql = "INSERT INTO bdl_reservations (id_adherent, id_pilote, id_avion, debut, fin) 
                    VALUES ('$idAdherent', '$idPilote', '$idAvion', '$dateDebut', '$dateFin')";

            if ($db->query($sql) === TRUE) {
                echo "Reservation créée avec succès";
            } else {
                echo "Erreur lors de la création de la réservation : " . $db->error;
            }
        } else {
            echo "Les colonnes date_debut et date_fin n'existent pas dans la table bdl_reservations.";
        }
    }
}

$sqlDemandes = "SELECT * FROM bdl_demandes";
$resultDemandes = $db->query($sqlDemandes);
?>


<div class="liste_demande">
<h2>Liste des demandes</h2>
<table>
    <tr>
        <th>ID Demande</th>
        <th>ID Adhérent</th>
        <th>Date de début</th>
        <th>Date de fin</th>
        <th>Nom de l'Avion</th>
        <th>Actions</th> <!-- Ajout de la colonne pour les actions -->
    </tr>
    <?php
    if ($resultDemandes->num_rows > 0) {
        while ($rowDemande = $resultDemandes->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $rowDemande['id_demande'] . "</td>";
            echo "<td>" . $rowDemande['id_adherent'] . "</td>";
            echo "<td>" . $rowDemande['debut'] . "</td>";
            echo "<td>" . $rowDemande['fin'] . "</td>";
            
            // Récupérer le nom de l'avion correspondant à l'ID
            $avionId = $rowDemande['id_avion'];
            $sqlNomAvion = "SELECT type FROM bdl_avions WHERE id_avion = $avionId";
            $resultNomAvion = $db->query($sqlNomAvion);
            
            if ($resultNomAvion && $resultNomAvion->num_rows > 0) {
                $rowNomAvion = $resultNomAvion->fetch_assoc();
                echo "<td>" . $rowNomAvion['type'] . "</td>";
            } else {
                echo "<td>Avion inconnu</td>";
            }
            
            // Ajout du bouton de suppression pour chaque demande
            echo "<td><form method='post' action='supprimer_demande.php'>
                  <input type='hidden' name='id_demande' value='{$rowDemande['id_demande']}'>
                  <input type='submit' value='Demande traitée'></form></td>";
            
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Aucune demande trouvée.</td></tr>";
    }
    ?>
    </div>
<div class="nouv_reserv">
</table>
<br>
<h2>Nouvelle Réservation</h2>
<form method="post" action="">
    <!-- Sélectionnez l'adhérent -->
    <label for="id_adherent">ID Adhérent :</label>
    <input type="text" id="id_adherent" name="id_adherent" required>

    <!-- Sélectionnez le pilote -->
    <label for="id_pilote">Pilote :</label>
    <select name="id_pilote" required>
        <?php
        $sqlPilotes = "SELECT * FROM bdl_pilotes";
        $resultPilotes = $db->query($sqlPilotes);

        while ($rowPilote = $resultPilotes->fetch_assoc()) {
            echo "<option value='{$rowPilote['id_pilote']}'>{$rowPilote['nom']} {$rowPilote['prenom']}</option>";
        }
        ?>
    </select>

    <!-- Sélectionnez l'avion -->
    <label for="id_avion">Avion :</label>
    <select name="id_avion" required>
        <?php
        $sqlAvions = "SELECT * FROM bdl_avions";
        $resultAvions = $db->query($sqlAvions);

        while ($rowAvion = $resultAvions->fetch_assoc()) {
            echo "<option value='{$rowAvion['id_avion']}'>{$rowAvion['type']}</option>";
        }
        ?>
    </select>

    <!-- Sélectionnez les dates -->
    <label for="date_debut">Date de début :</label>
    <input type="date" id="date_debut" name="date_debut" required>

    <label for="date_fin">Date de fin :</label>
    <input type="date" id="date_fin" name="date_fin" required>

    <!-- Bouton de soumission -->
    <input type="submit" name="reserve" value="Réserver">
</form>
<?php

// Construction du tableau de synthèse des données essentielles insérées dans la base
$sqlTableauSynthese = "SELECT * FROM bdl_reservations"; 

$resultTableauSynthese = $db->query($sqlTableauSynthese);
?>



<div class="tab_synthese">
    <h2>Tableau de synthèse des réservations</h2>
    <table>
        <tr>
            <th>ID Réservation</th>
            <th>ID Adhérent</th>
            <th>Nom du Pilote</th>
            <th>Prénom du Pilote</th>
            <th>Numéro de Licence du pilote</th>
            <th>Type d'Avion</th>
            <th>Date de début</th>
            <th>Date de fin</th>
        </tr>
        <?php
        // Votre code existant pour la connexion à la base de données...

        if ($resultTableauSynthese->num_rows > 0) {
            while ($row = $resultTableauSynthese->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id_reservation'] . "</td>";
                echo "<td>" . $row['id_adherent'] . "</td>";
                
                // Récupérer les détails du pilote
                $piloteId = $row['id_pilote'];
                $sqlPiloteDetails = "SELECT nom, prenom, numero_licence FROM bdl_pilotes WHERE id_pilote = $piloteId";
                $resultPiloteDetails = $db->query($sqlPiloteDetails);
                
                if ($resultPiloteDetails && $resultPiloteDetails->num_rows > 0) {
                    $piloteDetails = $resultPiloteDetails->fetch_assoc();
                    echo "<td>" . $piloteDetails['nom'] . "</td>";
                    echo "<td>" . $piloteDetails['prenom'] . "</td>";
                    echo "<td>" . $piloteDetails['numero_licence'] . "</td>";
                } else {
                    echo "<td colspan='3'>Détails du pilote indisponibles</td>";
                }
                
                // Récupérer le type de l'avion correspondant à l'ID
                $avionId = $row['id_avion'];
                $sqlTypeAvion = "SELECT type FROM bdl_avions WHERE id_avion = $avionId";
                $resultTypeAvion = $db->query($sqlTypeAvion);
                
                if ($resultTypeAvion && $resultTypeAvion->num_rows > 0) {
                    $rowTypeAvion = $resultTypeAvion->fetch_assoc();
                    echo "<td>" . $rowTypeAvion['type'] . "</td>";
                } else {
                    echo "<td>Type d'avion inconnu</td>";
                }
                
                echo "<td>" . $row['debut'] . "</td>";
                echo "<td>" . $row['fin'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Aucune réservation trouvée.</td></tr>";
        }
        ?>
    </table>
</div>


<div class="add_pilote">
    <h2>Ajouter un pilote</h2>
    <form action="ajouter_pilote.php" method="POST">
        <label for="nom">Nom du pilote :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom du pilote :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <label for="numero_licence">Numéro de licence :</label>
        <input type="text" id="numero_licence" name="numero_licence" required><br><br>
        
        <input type="submit" value="Ajouter le pilote">
    </form>

    <table border="1">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Numéro de licence</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Connexion à la base de données
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Récupération des pilotes
    $sql = "SELECT id_pilote, nom, prenom, numero_licence FROM bdl_pilotes";
    $result = $db->query($sql);

    // Affichage des pilotes
    while ($pilote = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>{$pilote['nom']}</td>";
      echo "<td>{$pilote['prenom']}</td>";
      echo "<td>{$pilote['numero_licence']}</td>";
      echo "<td>";
      // Lien pour modifier le pilote
      echo "<a href=\"modifier_pilote.php?id_pilote={$pilote['id_pilote']}\">Modifier</a>";
      // Lien pour supprimer le pilote
      echo "<a href=\"supprimer_pilote.php?id_pilote={$pilote['id_pilote']}\">Supprimer</a>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
<div class="add_avion">
    <h2>Ajouter un avion</h2>
    <form action="ajouter_avion.php" method="POST">
        <label for="type_avion">Type d'avion :</label>
        <input type="text" id="type_avion" name="type_avion" required><br><br>
        
        <input type="submit" value="Ajouter l'avion">
    </form>
</div>
<div class="liste_avion">
    <h2>Liste des avions</h2>
<table border="1">
  <thead>
    <tr>
      <th>Type</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Connexion à la base de données
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Récupération des avions
    $sql = "SELECT id_avion, type FROM bdl_avions";
    $result = $db->query($sql);

    // Affichage des avions
    while ($avion = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>{$avion['type']}</td>";
      echo "<td>";
      // Lien pour modifier l'avion
      echo "<a href=\"modifier_avion.php?id_avion={$avion['id_avion']}\">Modifier</a>";
      // Lien pour supprimer l'avion
      echo "<a href=\"supprimer_avion.php?id_avion={$avion['id_avion']}\">Supprimer</a>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>

</main>

</body>
</html>