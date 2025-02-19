<?php

class Avion {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findAvionById($id) {
        $sql = "SELECT * FROM bdl_avions WHERE id_avion = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); 
        } else {
            return null; 
        }
    }

    public function isAvailabileForDates($id, $dateDebut, $dateFin) {
        $sql = "SELECT * FROM bdl_reservations WHERE id_avion = ? AND NOT (fin <= ? OR debut >= ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("iss", $id, $dateDebut, $dateFin);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows === 0; 
    }
}
?>
