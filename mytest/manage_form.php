<?php
$host = 'localhost';
$db = 'mycollegeseat';
$user = 'root';
$pass = '';

// Connect to the database
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'add_field') {
        $fieldName = $_POST['field_name'];
        $fieldType = $_POST['field_type'];
        $placeholder = $_POST['field_placeholder'];

        $stmt = $conn->prepare("INSERT INTO form_fields (field_name, field_type, field_placeholder) VALUES (?, ?, ?)");
        $stmt->execute([$fieldName, $fieldType, $placeholder]);

        echo "Field added successfully!";
        exit;
    }
}

$fields = $conn->query("SELECT * FROM form_fields")->fetchAll(PDO::FETCH_ASSOC);
?>
