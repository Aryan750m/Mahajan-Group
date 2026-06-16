<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Authentication Check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

$type = isset($_GET['type']) ? trim($_GET['type']) : 'inquiries';
$filename = "mahajan_" . $type . "_" . date("Ymd_His") . ".csv";

// Clean output buffer to prevent stray characters
ob_clean();

// Set download headers
header("Content-Type: text/csv; charset=utf-8");
header("Content-Disposition: attachment; filename=\"" . $filename . "\"");
header("Pragma: no-cache");
header("Expires: 0");

$output = fopen("php://output", "w");

// Write BOM for Excel UTF-8 display compatibility
fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

$db = DB::connect();

if ($type === 'yoga') {
    // Write Headers
    fputcsv($output, ['ID', 'Name', 'Phone', 'Email', 'City', 'Batch Preference', 'Payment Status', 'Fees Paid Amount (INR)', 'Created At']);
    
    // Fetch and Write Rows
    $stmt = $db->query("SELECT id, name, phone, email, city, batch, payment_status, amount, created_at FROM yoga_registrations ORDER BY id ASC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, $row);
    }
}
elseif ($type === 'volunteers') {
    // Write Headers
    fputcsv($output, ['ID', 'Name', 'Phone', 'Email', 'City', 'Preferred Campaign', 'Remarks', 'Registered At']);
    
    // Fetch and Write Rows
    $stmt = $db->query("SELECT id, name, phone, email, city, initiative, remarks, created_at FROM volunteer_signups ORDER BY id ASC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, $row);
    }
}
elseif ($type === 'partners') {
    // Write Headers
    fputcsv($output, ['ID', 'Name', 'Phone', 'Email', 'City', 'Business Type', 'Experience (Years)', 'Remarks', 'Application Status', 'Registered At']);
    
    // Fetch and Write Rows
    $stmt = $db->query("SELECT id, name, phone, email, city, business_type, experience, remarks, status, created_at FROM channel_partners ORDER BY id ASC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, $row);
    }
}
else {
    // Default: Inquiries
    // Write Headers
    fputcsv($output, ['ID', 'Name', 'Phone', 'Email', 'City', 'Service of Interest', 'Inquiry Message', 'Document Upload Path', 'Status', 'Received At']);
    
    // Fetch and Write Rows
    $stmt = $db->query("SELECT id, name, phone, email, city, service, message, doc_path, status, created_at FROM inquiries ORDER BY id ASC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, $row);
    }
}

fclose($output);
exit;
?>
