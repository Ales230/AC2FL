<?php
class FormValidator {
    public static function validateForm($data) {
        $errors = [];

        // Vérification des champs obligatoires
        $requiredFields = ['civilite', 'nom', 'prenom', 'email']; // Champs obligatoires
        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                $errors[] = "Le champ '$field' est obligatoire.";
            }
        }

        return $errors;
    }
}
?>