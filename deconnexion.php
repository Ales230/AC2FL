<?php

class GestionSession {
    
    public function deconnexion() {
        // Démarrez la session (si elle n'est pas déjà démarrée)
        session_start();

        // Détruisez toutes les variables de session
        $_SESSION = array();

        // Détruisez la session
        session_destroy();

        // Redirigez l'utilisateur vers la page de connexion
        header("Location: login.php");
        exit();
    }
}

// Exemple d'utilisation
$gestionSession = new GestionSession();
$gestionSession->deconnexion();

?>
