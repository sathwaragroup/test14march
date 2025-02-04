<?php
header('Content-Type: application/json');

// Database connection (example using MySQL)
$host = 'localhost';
$db = 'bug_tool';
$user = 'root';
$pass = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch events within the specified date range
    $start = $_GET['start'] ?? null;
    $end = $_GET['end'] ?? null;

    if ($start && $end) {
        $stmt = $pdo->prepare('SELECT * FROM bugs WHERE start BETWEEN :start AND :end');
        $stmt->execute(['start' => $start, 'end' => $end]);
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $events = [];
    }

    echo json_encode($events);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
