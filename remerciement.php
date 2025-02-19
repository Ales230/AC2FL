<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="Styles/remerciement.css">
<link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Confirmation d'adhésion</title>
</head>
<body>
<header>
<h1>Confirmation d'adhésion</h1>
    </header>
    <main>
    <div class="txt">
    <p>Merci pour votre adhésion. <br>Voici les informations que vous avez saisies :</p>
</div>
    <div class="txt2">
    <?php
    // Vérifiez si les valeurs du formulaire sont présentes dans la session
    if (isset($_SESSION['form_values'])) {
        $formValues = $_SESSION['form_values'];

        // Vérifie chaque valeur avant de l'afficher
        $hasData = false;
        foreach ($formValues as $key => $value) {
            if (!empty($value)) {
                if ($key !== 'activites') {
                    echo "<p><strong>$key:</strong> " . (is_array($value) ? implode(', ', $value) : htmlspecialchars($value)) . "</p>";
                    $hasData = true;
                }
            }
        }

        // Affiche "Aucune information saisie" si aucun champ n'est rempli
        if (!$hasData) {
            echo "Aucune information saisie.";
        }

        // Affichage des activités demandées si elles ont été sélectionnées
        if (isset($formValues['activites']) && is_array($formValues['activites']) && count($formValues['activites']) > 0) {
            echo "<p><strong>Activités demandées :</strong> " . implode(', ', $formValues['activites']) . "</p>";
        } else {
            echo "<p><strong>Activités demandées :</strong> Aucune activité sélectionnée.</p>";
        }

        // Nettoyer les valeurs stockées dans la session une fois affichées
        unset($_SESSION['form_values']);
    } else {
        echo "Aucune information de formulaire n'est disponible.";
    }

    // Vérifier s'il y a un ID d'adhérent passé dans l'URL
    if(isset($_GET['id_adherent'])) {
        $insertedId = $_GET['id_adherent'];
        // Afficher l'identifiant de l'adhérent
        echo "<p>Votre numéro d'adhérent est : " . htmlspecialchars($insertedId) . "</p>";
    }
    ?>
    </div>
    <div class="button">
    <a href="index.php">Retourner vers l'accueil</a>
</div>
<div class="button2">
    <a href="profil.php">Voir votre profil</a>
</div>
</main>
</body>
</html>
