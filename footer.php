<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/translations.php';

$current_page = basename($_SERVER['PHP_SELF']);
?>
    <!-- Common Footer Navigation Bar (Tab-Bar Style) -->
    <nav class="bottom-navbar">
        <div class="bottom-nav-container">
            <!-- Home -->
            <a href="index.php" class="bottom-nav-item <?php echo $current_page === 'index.php' ? 'active' : ''; ?>">
                <svg viewBox="0 0 24 24">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span><?php echo __t('home'); ?></span>
            </a>
            
            <!-- PROFILE -->
            <a href="about.php" class="bottom-nav-item <?php echo $current_page === 'about.php' ? 'active' : ''; ?>">
                <svg viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span><?php echo __t('profile'); ?></span>
            </a>

            <!-- Library -->
            <a href="library.php" class="bottom-nav-item <?php echo $current_page === 'library.php' ? 'active' : ''; ?>">
                <svg viewBox="0 0 24 24">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
                <span><?php echo __t('library'); ?></span>
            </a>

            <!-- Contact -->
            <a href="contact.php" class="bottom-nav-item <?php echo $current_page === 'contact.php' ? 'active' : ''; ?>">
                <svg viewBox="0 0 24 24">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <span><?php echo __t('contact'); ?></span>
            </a>

            <!-- Suggestion -->
            <a href="suggestion.php" class="bottom-nav-item <?php echo $current_page === 'suggestion.php' ? 'active' : ''; ?>">
                <svg viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
                <span><?php echo __t('suggestion'); ?></span>
            </a>

            <!-- Feedback -->
            <a href="feedback.php" class="bottom-nav-item <?php echo $current_page === 'feedback.php' ? 'active' : ''; ?>">
                <svg viewBox="0 0 24 24">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <span><?php echo __t('feedback'); ?></span>
            </a>
        </div>
    </nav>

    <!-- Main JS Scripts -->
    <script src="script.js"></script>
</body>
</html>
