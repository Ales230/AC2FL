<link rel="stylesheet" href="Styles/form.css">
<?php
$_SESSION['form_values'] = $_POST; // Stockez toutes les valeurs POST pour les récupérer plus tard

class Form {
    private $action;
    private $method;
    private $fields = [];

    public function __construct($action = "traitement.php", $method = "post") {
        $this->action = $action;
        $this->method = $method;
    }

    public function addField($label, $type, $name, $options = []) {
        $this->fields[] = [
            'label' => $label,
            'type' => $type,
            'name' => $name,
            'options' => $options,
        ];
    }

    public function getForm() {
        $form = '<form action="' . $this->action . '" method="' . $this->method . '">';
        foreach ($this->fields as $field) {
            $form .= '<label>' . $field['label'] . ':</label><br>';
            if ($field['type'] === 'select') {
                $form .= '<select name="' . $field['name'] . '">';
                foreach ($field['options'] as $option) {
                    $form .= '<option value="' . $option . '">' . $option . '</option>';
                }
                $form .= '</select><br>';
            } elseif ($field['type'] === 'checkbox') {
                foreach ($field['options'] as $option) {
                    $form .= '<input type="checkbox" name="' . $field['name'] . '[]" value="' . $option . '">' . $option . '<br>';
                }
            } elseif ($field['type'] === 'radio') {
                foreach ($field['options'] as $option) {
                    $form .= '<input type="radio" name="' . $field['name'] . '" value="' . $option . '" required>' . $option . ' ';
                }
                $form .= '<br>';
            } else {
                $form .= '<input type="' . $field['type'] . '" name="' . $field['name'] . '"';
                if (isset($field['options']['required'])) {
                    $form .= ' required';
                }
                $form .= '><br>';
            }
        }
        $form .= '<input type="submit" value="Envoyer"></form>';
        return $form;
    }
}
?>