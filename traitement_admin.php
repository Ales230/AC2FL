<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bdl-ac2fl";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['search_adherent'])) {
    $idAdherent = $_POST['id_adherent'];

    $sql = "SELECT * FROM bdl_adherent WHERE id_adherent = $idAdherent";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Get the adherent details
        $row = $result->fetch_assoc();
        $adherentDetails = new Adherent($row['id'], $row['civilite'], $row['nom'], $row['prenom'], $row['date_naissance'], $row['adresse'], $row['email'], $row['telephone'], $row['activites_demandees'], $row['role']);
    } else {
        $adherentDetails = null;
    }
}

if (isset($_POST['reserve'])) {
    $idAdherent = $_POST['id_adherent'];
    $idPilote = $_POST['id_pilote'];
    $idAvion = $_POST['id_avion'];
    $dateDebut = $_POST['date_debut'];
    $dateFin = $_POST['date_fin'];

    $sql = "INSERT INTO bdl_reservations (id_adherent, id_pilote, id_avion, date_debut, date_fin) VALUES ($idAdherent, $idPilote, $idAvion, '$dateDebut', '$dateFin')";
    if ($conn->query($sql) === TRUE) {
        echo "Reservation créée avec succès";
    } else {
        echo "Erreur lors de la création de la réservation: " . $conn->error;
    }
}

$conn->close();