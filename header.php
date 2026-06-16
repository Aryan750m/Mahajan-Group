<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/translations.php';

// Check which page is currently active to highlight nav items
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="<?php echo $active_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahajan Corporate | <?php echo __t('home'); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Official website representing Mahajan activities in Yoga, Real Estate, Foods, Social Work, and NGO services. Managed by Mrs. Gauri Shailesh Mahajan.">
    <meta name="keywords" content="Mahajan, Gauri Mahajan, Yoga, Real Estate, Badlapur, Wellness Retreat, Social Work, NGO, OneLife Fitness Center">
    <meta name="author" content="Mahajan Corporate">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="theme-<?php 
    if (strpos($current_page, 'yoga') !== false) echo 'yoga';
    elseif (strpos($current_page, 'real-estate') !== false) echo 'real-estate';
    elseif (strpos($current_page, 'foods') !== false) echo 'foods';
    elseif (strpos($current_page, 'social-work') !== false) echo 'social-work';
    elseif (strpos($current_page, 'ngo') !== false) echo 'ngo';
    else echo 'real-estate'; // Default corporate
?>">

    <!-- Top scrolling marquee in English & Marathi -->
    <div class="marquee-container">
        <div class="marquee-content">
            ✦ <?php echo $translations['mr']['slogan']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            ✦ <?php echo $translations['en']['slogan']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ✦ <?php echo $translations['hi']['slogan']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="brand-container">
            <!-- Use cropped/local logo representation, fallback to a clean typography/icon if file is missing -->
            <a href="index.php" style="display: flex; align-items: center; gap: 12px;">
                <svg width="45" height="45" viewBox="0 0 100 100" style="fill: var(--primary-blue)">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="var(--primary-blue)" stroke-width="5"/>
                    <path d="M30,75 L30,35 L50,55 L70,35 L70,75" fill="none" stroke="var(--primary-blue)" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="50" cy="25" r="8" fill="var(--gold)"/>
                </svg>
                <div class="brand-text">
                    <h1>Mahajan <span>Group</span></h1>
                    <p><?php echo __t('sub_title'); ?></p>
                </div>
            </a>
        </div>

        <div class="header-right">
            <!-- Language Switcher -->
            <div class="lang-picker">
                <button class="lang-btn <?php echo $active_lang === 'mr' ? 'active' : ''; ?>" onclick="changeLanguage('mr')">मराठी</button>
                <button class="lang-btn <?php echo $active_lang === 'hi' ? 'active' : ''; ?>" onclick="changeLanguage('hi')">हिंदी</button>
                <button class="lang-btn <?php echo $active_lang === 'en' ? 'active' : ''; ?>" onclick="changeLanguage('en')">English</button>
            </div>
        </div>
    </header>
