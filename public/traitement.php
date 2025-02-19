
<?php
session_start();
require_once("adherent.php");
require_once("formvalidator.php");
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Créer une instance de la classe Database
    $db = new Database();

    // Créer une instance de la classe Adherent avec les données du formulaire et l'instance de Database
    $adherentData = $_POST;
    $adherent = new Adherent($adherentData, $db);

    // Créer une instance de la classe Database et insérer les données
    $db = new Database();
    $insertedId = $db->insertAdherent($adherent); // Obtenez l'ID inséré

    // Stocker les valeurs du formulaire dans la session
    $_SESSION['form_values'] = $_POST;

    // Redirection vers la page de remerciement avec l'identifiant de l'adhérent
    header("Location: remerciement.php?id_adherent=" . $insertedId);
    exit();
}

?>
