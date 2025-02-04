<?php
$host = 'localhost';
$db = 'mycollegeseat';
$user = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$fields = $conn->query("SELECT * FROM form_fields")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Inquiry Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">College Inquiry Form</h1>
    <form id="inquiry-form" action="submit_inquiry.php" method="post">
        <?php foreach ($fields as $field): ?>
            <div class="mb-3">
                <label for="<?= $field['field_name'] ?>" class="form-label"><?= ucfirst($field['field_name']) ?></label>
                <input type="<?= $field['field_type'] ?>" 
                       name="<?= $field['field_name'] ?>" 
                       id="<?= $field['field_name'] ?>" 
                       placeholder="<?= $field['field_placeholder'] ?>" 
                       class="form-control">
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
