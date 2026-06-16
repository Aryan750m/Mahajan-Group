<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Authentication Check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$type = isset($_GET['type']) ? trim($_GET['type']) : '';
$status = isset($_GET['status']) ? trim($_GET['status']) : '';
$tab = isset($_GET['tab']) ? trim($_GET['tab']) : 'inquiries';

if ($id > 0 && !empty($type) && !empty($status)) {
    $db = DB::connect();
    try {
        if ($type === 'inquiry') {
            $stmt = $db->prepare("UPDATE inquiries SET status = ? WHERE id = ?");
            $stmt->execute([$status, $id]);
        }
        elseif ($type === 'yoga') {
            $stmt = $db->prepare("UPDATE yoga_registrations SET payment_status = ? WHERE id = ?");
            $stmt->execute([$status, $id]);
        }
        elseif ($type === 'partner') {
            $stmt = $db->prepare("UPDATE channel_partners SET status = ? WHERE id = ?");
            $stmt->execute([$status, $id]);
        }
    } catch (PDOException $e) {
        error_log("Status Update DB Error: " . $e->getMessage());
    }
}

// Redirect back to dashboard preserving active tab
header("Location: dashboard.php?tab=" . urlencode($tab));
exit;
?>
