<?php
require_once __DIR__ . '/config.php';

class DB {
    private static $pdo = null;

    public static function connect() {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            if (DB_TYPE === 'sqlite') {
                self::$pdo = new PDO('sqlite:' . SQLITE_FILE);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } else {
                self::$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            self::initialize();
        } catch (PDOException $e) {
            die("Database Connection Error: " . $e->getMessage());
        }

        return self::$pdo;
    }

    private static function initialize() {
        $db = self::$pdo;
        $isSqlite = (DB_TYPE === 'sqlite');

        // Table 1: Inquiries
        $sqlInquiries = $isSqlite ? 
            "CREATE TABLE IF NOT EXISTS inquiries (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                email TEXT,
                city TEXT,
                service TEXT,
                message TEXT,
                doc_path TEXT,
                status TEXT DEFAULT 'New',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )" :
            "CREATE TABLE IF NOT EXISTS inquiries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                phone VARCHAR(50) NOT NULL,
                email VARCHAR(255),
                city VARCHAR(100),
                service VARCHAR(100),
                message TEXT,
                doc_path VARCHAR(255),
                status VARCHAR(50) DEFAULT 'New',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        $db->exec($sqlInquiries);

        // Table 2: Yoga Registrations
        $sqlYoga = $isSqlite ?
            "CREATE TABLE IF NOT EXISTS yoga_registrations (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                email TEXT,
                city TEXT,
                batch TEXT,
                payment_status TEXT DEFAULT 'Pending',
                amount REAL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )" :
            "CREATE TABLE IF NOT EXISTS yoga_registrations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                phone VARCHAR(50) NOT NULL,
                email VARCHAR(255),
                city VARCHAR(100),
                batch VARCHAR(100),
                payment_status VARCHAR(50) DEFAULT 'Pending',
                amount DECIMAL(10,2),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        $db->exec($sqlYoga);

        // Table 3: Volunteer Signups
        $sqlVolunteer = $isSqlite ?
            "CREATE TABLE IF NOT EXISTS volunteer_signups (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                email TEXT,
                city TEXT,
                initiative TEXT,
                remarks TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )" :
            "CREATE TABLE IF NOT EXISTS volunteer_signups (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                phone VARCHAR(50) NOT NULL,
                email VARCHAR(255),
                city VARCHAR(100),
                initiative VARCHAR(255),
                remarks TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        $db->exec($sqlVolunteer);

        // Table 4: Channel Partners
        $sqlPartners = $isSqlite ?
            "CREATE TABLE IF NOT EXISTS channel_partners (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                email TEXT,
                city TEXT,
                business_type TEXT,
                experience TEXT,
                remarks TEXT,
                status TEXT DEFAULT 'Pending',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )" :
            "CREATE TABLE IF NOT EXISTS channel_partners (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                phone VARCHAR(50) NOT NULL,
                email VARCHAR(255),
                city VARCHAR(100),
                business_type VARCHAR(100),
                experience VARCHAR(100),
                remarks TEXT,
                status VARCHAR(50) DEFAULT 'Pending',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        $db->exec($sqlPartners);
    }
}

// Perform connection to self-initialize database on import
DB::connect();
?>
