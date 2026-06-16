<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';
?>

<!-- Main Interactive Slide Banner (Moved outside container for proper full screen edge-to-edge layout) -->
<div class="slider-wrapper" style="border-radius: 0; margin-top: 0; margin-bottom: 30px; box-shadow: none;">
    <div class="slider-container">
        <!-- Slide 1: Yoga -->
        <div class="slide" style="background-image: url('img/yoga.png');">
            <div class="slide-content">
                <span class="slide-category"><?php echo __t('yoga'); ?></span>
                <h2 class="slide-title"><?php echo __t('yoga_subtitle'); ?></h2>
                <p class="slide-desc"><?php echo __t('sub_slogan'); ?></p>
                <a href="yoga.php" class="btn-primary" style="display: inline-block; width: auto;"><?php echo __t('learn_more'); ?></a>
            </div>
        </div>
        
        <!-- Slide 2: Real Estate -->
        <div class="slide" style="background-image: url('img/real-estate.png');">
            <div class="slide-content">
                <span class="slide-category"><?php echo __t('real_estate'); ?></span>
                <h2 class="slide-title"><?php echo __t('slide2_title'); ?></h2>
                <p class="slide-desc"><?php echo __t('slide2_desc'); ?></p>
                <a href="real-estate.php" class="btn-primary" style="display: inline-block; width: auto;"><?php echo __t('learn_more'); ?></a>
            </div>
        </div>

        <!-- Slide 3: Foods -->
        <div class="slide" style="background-image: url('img/foods.png');">
            <div class="slide-content">
                <span class="slide-category"><?php echo __t('foods'); ?></span>
                <h2 class="slide-title"><?php echo __t('slide3_title'); ?></h2>
                <p class="slide-desc"><?php echo __t('slide3_desc'); ?></p>
                <a href="foods.php" class="btn-primary" style="display: inline-block; width: auto;"><?php echo __t('learn_more'); ?></a>
            </div>
        </div>

        <!-- Slide 4: Social Work -->
        <div class="slide" style="background-image: url('img/social-work.png');">
            <div class="slide-content">
                <span class="slide-category"><?php echo __t('social_work'); ?></span>
                <h2 class="slide-title"><?php echo __t('slide4_title'); ?></h2>
                <p class="slide-desc"><?php echo __t('slide4_desc'); ?></p>
                <a href="social-work.php" class="btn-primary" style="display: inline-block; width: auto;"><?php echo __t('learn_more'); ?></a>
            </div>
        </div>

        <!-- Slide 5: NGO -->
        <div class="slide" style="background-image: url('img/ngo.png');">
            <div class="slide-content">
                <span class="slide-category"><?php echo __t('ngo'); ?></span>
                <h2 class="slide-title"><?php echo __t('slide5_title'); ?></h2>
                <p class="slide-desc"><?php echo __t('slide5_desc'); ?></p>
                <a href="ngo.php" class="btn-primary" style="display: inline-block; width: auto;"><?php echo __t('learn_more'); ?></a>
            </div>
        </div>
    </div>
    
    <!-- Slider Controls -->
    <button class="slider-btn slider-btn-prev">&#10094;</button>
    <button class="slider-btn slider-btn-next">&#10095;</button>
    
    <!-- Slider Dots -->
    <div class="slider-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>

<div class="container">
    
    <!-- Quick Navigation Cards Grid -->
    <div class="business-grid">
        <a href="yoga.php" class="business-card yoga">
            <span class="card-icon">🧘‍♀️</span>
            <h3 class="card-title"><?php echo __t('yoga'); ?></h3>
            <p style="font-size:12px; color:#666;"><?php echo __t('card_yoga_desc'); ?></p>
        </a>
        <a href="real-estate.php" class="business-card real-estate">
            <span class="card-icon">🏢</span>
            <h3 class="card-title"><?php echo __t('real_estate'); ?></h3>
            <p style="font-size:12px; color:#666;"><?php echo __t('card_re_desc'); ?></p>
        </a>
        <a href="foods.php" class="business-card foods">
            <span class="card-icon">🍏</span>
            <h3 class="card-title"><?php echo __t('foods'); ?></h3>
            <p style="font-size:12px; color:#666;"><?php echo __t('card_foods_desc'); ?></p>
        </a>
        <a href="social-work.php" class="business-card social-work">
            <span class="card-icon">🌱</span>
            <h3 class="card-title"><?php echo __t('social_work'); ?></h3>
            <p style="font-size:12px; color:#666;"><?php echo __t('card_social_desc'); ?></p>
        </a>
        <a href="ngo.php" class="business-card ngo">
            <span class="card-icon">🤝</span>
            <h3 class="card-title"><?php echo __t('ngo'); ?></h3>
            <p style="font-size:12px; color:#666;"><?php echo __t('card_ngo_desc'); ?></p>
        </a>
        <a href="channel-partner.php" class="business-card real-estate" style="border-top: 1px dashed var(--gold);">
            <span class="card-icon">🤝</span>
            <h3 class="card-title"><?php echo __t('channel_partner'); ?></h3>
            <p style="font-size:12px; color:#666;"><?php echo __t('card_cp_desc'); ?></p>
        </a>
    </div>

    <!-- Bottom widgets row: Live clock/quote on left, highlighted Interest Form on right -->
    <?php render_bottom_widgets('General'); ?>

</div>

<!-- Overlay Interest Form Modals and Action Buttons -->
<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
