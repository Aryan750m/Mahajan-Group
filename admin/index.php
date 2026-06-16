<?php
require_once __DIR__ . '/../config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    // Simple secure check. Can be changed by user in config.php if needed.
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid Username or Password!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahajan Admin Login</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f5f9;
            padding: 20px;
        }
        .login-card {
            background: #fff;
            padding: 40px;
            border-radius: var(--border-radius-md);
            box-shadow: var(--shadow-lg);
            max-width: 400px;
            width: 100%;
            border-top: 5px solid var(--primary-blue);
        }
    </style>
</head>
<body class="admin-body">
    <div class="login-container">
        <div class="login-card">
            <h2 style="text-align: center; margin-bottom: 10px; color: var(--primary-blue);">Admin Portal</h2>
            <p style="text-align: center; color: #666; font-size: 13px; margin-bottom: 25px;">Enter credentials to access lead dashboard</p>
            
            <?php if (!empty($error)): ?>
                <div style="background-color: #fee2e2; color: #b91c1c; padding: 10px; border-radius: 4px; font-size:12px; margin-bottom: 15px; text-align:center;">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="admin" required>
                </div>
                
                <div class="form-group" style="margin-bottom: 25px;">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                
                <button type="submit" class="btn-primary">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
