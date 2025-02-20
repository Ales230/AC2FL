<?php
class Pilote {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findPiloteById($id) {
        $stmt = $this->db->prepare("SELECT * FROM bdl_pilotes WHERE id_pilote = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
    }

    public function isAvailableForDates($idPilote, $dateDebut, $dateFin) {
        $sql = "SELECT * FROM bdl_reservations WHERE id_pilote = ? AND NOT (fin <= ? OR debut >= ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("iss", $idPilote, $dateDebut, $dateFin);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows === 0; // Si 0 lignes sont retournées, le pilote est disponible
    }
}


?>