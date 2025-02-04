<?php
$host = 'localhost';
$db = 'mycollegeseat';
$user = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $stmt = $conn->prepare("INSERT INTO student_inquiries (field_name, field_value) VALUES (?, ?)");
        $stmt->execute([$key, $value]);
    }

    echo "Form submitted successfully!";
    echo "<a href='form.php'>Go Back</a>";
}
?>
