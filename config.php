<?php
// Configuration File for Mahajan Corporate Website

// Set default timezone
date_default_timezone_get();
date_default_timezone_set('Asia/Kolkata');

// Session start for language selection and admin authentication
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Database Connection Settings
define('DB_TYPE', 'sqlite'); // Set to 'mysql' to use MySQL database

// SQLite Settings
define('SQLITE_FILE', __DIR__ . '/mahajan.db');

// MySQL Settings (for Hostinger deploy)
define('DB_HOST', 'localhost');
define('DB_NAME', 'mahajan_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Contact details for pre-filled WhatsApp and direct messaging
define('CONTACT_PHONE', '9890349819');
define('CONTACT_EMAIL', 'info@gaurimahajan.com');
define('CONTACT_ADDRESS', 'Shop No. 04, Sanveg Residency, Boradpada Road, Badlapur Gaon, Taluka Ambernath, District Thane');
define('WHATSAPP_LINK', 'https://wa.me/919890349819');
?>
