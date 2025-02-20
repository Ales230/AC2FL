<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "bdl-ac2fl";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->id_adherent = uniqid(); // Génère un identifiant unique

        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
    
    public function insertAdherent(Adherent $adherent) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO bdl_adherent (id_adherent, civilite, nom, prenom, date_naissance, adresse, email, telephone, activites_demandees, role) 
            VALUES (:id_adherent, :civilite, :nom, :prenom, :date_naissance, :adresse, :email, :telephone, :activites_demandees, :role)");            
    
            $stmt->bindParam(':id_adherent', $adherent->getId());
            $stmt->bindParam(':civilite', $adherent->getCivilite());
            $stmt->bindParam(':nom', $adherent->getNom());
            $stmt->bindParam(':prenom', $adherent->getPrenom());
            $stmt->bindParam(':date_naissance', $adherent->getDateNaissance());
            $stmt->bindParam(':adresse', $adherent->getAdresse());
            $stmt->bindParam(':email', $adherent->getEmail());
            $stmt->bindParam(':telephone', $adherent->getTelephone());
            $stmt->bindParam(':activites_demandees', $adherent->getActivitesDemandees());
            $stmt->bindParam(':role', $adherent->getRole()); // Utilisation du getter pour 'role'
            $stmt->execute();
            echo "Les données ont été enregistrées avec succès !";
            $insertedId = $this->conn->lastInsertId();
            return $insertedId; // Retournez l'ID inséré
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}
?>