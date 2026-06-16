<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/translations.php';

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Retrieve form values
$form_type = isset($_POST['form_type']) ? trim($_POST['form_type']) : 'inquiry';
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$city = isset($_POST['city']) ? trim($_POST['city']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation
if (empty($name) || empty($phone)) {
    die("Name and Phone number are required.");
}

// Document Upload Logic
$uploaded_file = null;
if (isset($_FILES['document']) && $_FILES['document']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = __DIR__ . '/uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $file_tmp = $_FILES['document']['tmp_name'];
    $file_name = preg_replace('/[^a-zA-Z0-9\._-]/', '', $_FILES['document']['name']);
    // Append timestamp to prevent overwriting
    $new_file_name = time() . '_' . $file_name;
    $dest_path = $upload_dir . $new_file_name;
    
    if (move_uploaded_file($file_tmp, $dest_path)) {
        $uploaded_file = 'uploads/' . $new_file_name;
    }
}

// DB Instance
$db = DB::connect();
$success = false;

try {
    if ($form_type === 'yoga') {
        $batch = isset($_POST['batch']) ? trim($_POST['batch']) : '';
        $amount = isset($_POST['amount']) ? (float)$_POST['amount'] : 0.0;
        
        $stmt = $db->prepare("INSERT INTO yoga_registrations (name, phone, email, city, batch, amount, payment_status) VALUES (?, ?, ?, ?, ?, ?, 'Pending')");
        $success = $stmt->execute([$name, $phone, $email, $city, $batch, $amount]);
    }
    elseif ($form_type === 'volunteer') {
        $initiative = isset($_POST['initiative']) ? trim($_POST['initiative']) : '';
        
        $stmt = $db->prepare("INSERT INTO volunteer_signups (name, phone, email, city, initiative, remarks) VALUES (?, ?, ?, ?, ?, ?)");
        $success = $stmt->execute([$name, $phone, $email, $city, $initiative, $message]);
    }
    elseif ($form_type === 'channel_partner') {
        $business_type = isset($_POST['business_type']) ? trim($_POST['business_type']) : '';
        $experience = isset($_POST['experience']) ? trim($_POST['experience']) : '';
        
        $stmt = $db->prepare("INSERT INTO channel_partners (name, phone, email, city, business_type, experience, remarks) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $success = $stmt->execute([$name, $phone, $email, $city, $business_type, $experience, $message]);
    }
    else {
        // General inquiry
        $service = isset($_POST['service']) ? trim($_POST['service']) : 'General';
        
        $stmt = $db->prepare("INSERT INTO inquiries (name, phone, email, city, service, message, doc_path) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $success = $stmt->execute([$name, $phone, $email, $city, $service, $message, $uploaded_file]);
    }
} catch (PDOException $e) {
    // Log error and show failure
    error_log("Form Submission DB Error: " . $e->getMessage());
    $success = false;
}

// Redirect URL
$redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

$page_translations = [
    'mr' => [
        'title' => 'सादर करण्याची स्थिती',
        'redirect_msg' => 'तुम्हाला काही सेकंदात परत रीडायरेक्ट केले जात आहे...',
        'go_back' => 'त्वरित परत जा'
    ],
    'hi' => [
        'title' => 'जमा करने की स्थिति',
        'redirect_msg' => 'आपको कुछ ही सेकंड में वापस रीडायरेक्ट किया जा रहा है...',
        'go_back' => 'तुरंत वापस जाएं'
    ],
    'en' => [
        'title' => 'Submission Status',
        'redirect_msg' => 'Redirecting you back in a few seconds...',
        'go_back' => 'Go Back Immediately'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $active_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo _pt('title'); ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        .status-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .status-card {
            background: #fff;
            border-radius: var(--border-radius-md);
            padding: 40px;
            text-align: center;
            box-shadow: var(--shadow-lg);
            max-width: 450px;
            width: 100%;
            border-top: 5px solid <?php echo $success ? 'var(--teal)' : 'var(--accent-red)'; ?>;
        }
        .status-icon {
            font-size: 60px;
            color: <?php echo $success ? 'var(--teal)' : 'var(--accent-red)'; ?>;
            margin-bottom: 20px;
        }
        .status-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }
        .status-desc {
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="status-container">
        <div class="status-card">
            <div class="status-icon"><?php echo $success ? '✓' : '✗'; ?></div>
            <div class="status-title"><?php echo $success ? __t('success_msg') : __t('error_msg'); ?></div>
            <p class="status-desc"><?php echo _pt('redirect_msg'); ?></p>
            <a href="<?php echo htmlspecialchars($redirect_url); ?>" class="btn-primary" style="display:inline-block; max-width: 200px;"><?php echo _pt('go_back'); ?></a>
        </div>
    </div>
    
    <script>
        setTimeout(function() {
            window.location.href = "<?php echo addslashes($redirect_url); ?>";
        }, 4000);
    </script>
</body>
</html>
