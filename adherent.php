<?php
require_once('database.php');

$data = array(
    'civilite' => 'M.',
    'nom' => 'Doe',
    'prenom' => 'John',
    'date_naissance' => '1990-01-01',
    'numero_rue' => '123',
    'code_postal' => '12345',
    'ville' => 'Ville',
    'email' => 'john.doe@example.com',
    'telephone' => '123-456-7890',
    'activites' => array('activite1', 'activite2')
);

class Adherent {
    private $db;
    private $id_adherent;
    private $civilite;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $adresse;
    private $code_postal;
    private $ville;
    private $email;
    private $telephone;
    private $activites_demandees;
    private $role = 'membre'; // Valeur par défaut

    public function __construct($data, $db) {
        $this->db = $db;
        $this->id_adherent = uniqid(); // Génère un identifiant unique
        $this->civilite = $data['civilite'];
        $this->nom = $data['nom'];
        $this->prenom = $data['prenom'];
        $this->date_naissance = $data['date_naissance'];
        $this->adresse = $data['numero_rue'] . ', ' . $data['code_postal'] . ' ' . $data['ville'];
        $this->code_postal = $data['code_postal'];
        $this->ville = $data['ville'];
        $this->email = $data['email'];
        $this->telephone = $data['telephone'];
        $this->activites_demandees = isset($data['activites']) ? implode(', ', $data['activites']) : '';
    }

    public function findAdherentById($id) {
        $stmt = $this->db->prepare("SELECT * FROM bdl_adherent WHERE id_adherent = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function findAdherentByEmail($email) {
        $sql = "SELECT id_adherent FROM bdl_adherent WHERE email = '$email'";
        $result = $this->db->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['id_adherent'];
        } else {
            return null;
        }
    }

    public function getId() {
        return $this->id_adherent;
    }

    public function getCivilite() {
        return $this->civilite;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->date_naissance;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCodePostal() {
        return $this->code_postal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getActivitesDemandees() {
        return $this->activites_demandees;
    }

    public function getRole() {
        return $this->role;
    }
}
?>