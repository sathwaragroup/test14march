<?php

class Auth {
    private static $pdo;

    // Initialize PDO connection
    public static function connect($host, $dbname, $username, $password) {
        if (!self::$pdo) {
            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
    }

    // Login user by verifying credentials
    public static function login($username, $password) {
        $stmt = self::$pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Store user ID in session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        }

        return false; // Invalid credentials
    }

    // Logout user by destroying the session
    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    // Check if a user is authenticated
    public static function check() {
        session_start();
        return isset($_SESSION['user_id']);
    }

    // Get the authenticated user's data
    public static function user() {
        session_start();
        if (isset($_SESSION['user_id'])) {
            $stmt = self::$pdo->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->execute(['id' => $_SESSION['user_id']]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return null; // No authenticated user
    }

    // Retrieve a user by ID
    public static function find($id) {
        $stmt = self::$pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
