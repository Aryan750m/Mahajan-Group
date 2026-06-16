<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_desc' => 'तुमच्या कल्पना आमच्या सुधारांना आकार देतात. तुमचे अमूल्य सुझाव गौरी महाजन समूहाशी शेअर करा.',
        'section_title' => 'सुझाव सादर करा',
        'section_desc' => 'वनलाईफ फिटनेसच्या नवीन बॅचच्या वेळा असोत, आमच्या वेलनेस रिट्रीटबद्दलचा अभिप्राय असो, किंवा रिअल इस्टेट भागीदारी विस्तारासाठीच्या कल्पना असोत, आम्ही प्रत्येक शब्द काळजीपूर्वक वाचतो. तुम्ही तुमचे नाव न सांगता (Anonymously) किंवा सविस्तर माहितीसह तुमचे सुझाव मांडू शकता.',
        'suggest_label' => 'आपला अमूल्य सुझाव / संदेश *',
        'submit_btn' => 'सुझाव सादर करा',
        'urgent_contact' => 'तातडीने संपर्क करायचा आहे?',
        'urgent_desc' => 'जर तुम्हाला तातडीने निराकरण हवे असेल, तर आमच्या अधिकृत क्रमांकावर थेट संपर्क साधा.'
    ],
    'hi' => [
        'banner_desc' => 'आपके विचार हमारे सुधारों को आकार देते हैं। अपने बहुमूल्य सुझाव गौरी महाजन समूह के साथ साझा करें।',
        'section_title' => 'सुझाव प्रस्तुत करें',
        'section_desc' => 'चाहे वह वनलाइफ फिटनेस के लिए नए बैच का समय हो, हमारे वेलनेस रिट्रीट पर प्रतिक्रिया हो, या रियल एस्टेट साझेदारी विस्तार के लिए विचार हों, हम हर शब्द को पढ़ते हैं। आप गुमनाम रूप से या अपनी जानकारी के साथ सुझाव साझा करने के लिए स्वतंत्र हैं।',
        'suggest_label' => 'आपका बहुमूल्य सुझाव / संदेश *',
        'submit_btn' => 'सुझाव जमा करें',
        'urgent_contact' => 'त्वरित संपर्क?',
        'urgent_desc' => 'यदि आपको तुरंत समाधान की आवश्यकता है, तो हमारे मुख्य डेस्क पर सीधे हमारे पंजीकृत नंबर पर कॉल करें।'
    ],
    'en' => [
        'banner_desc' => 'Your ideas shape our improvements. Share your valuable suggestions with Gauri Mahajan Group.',
        'section_title' => 'Submit a Suggestion',
        'section_desc' => 'Whether it is a new batch timing for OneLife Fitness, feedback on our wellness retreat, or ideas for real estate partnership expansions, we read every word. Feel free to share your suggestions anonymously or leave details if you expect a response.',
        'suggest_label' => 'Your Suggestion / Message *',
        'submit_btn' => 'Submit Suggestion',
        'urgent_contact' => 'Urgent Contact?',
        'urgent_desc' => 'If you need a quick resolution, call our main desk directly on our registered number.'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner -->
    <div class="hero-banner" style="background: linear-gradient(135deg, var(--primary-blue), #1e293b);">
        <h2>💡 <?php echo __t('suggestion'); ?> Box</h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: var(--primary-blue); border-bottom: 2px solid var(--primary-blue); padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 20px;"><?php echo _pt('section_desc'); ?></p>
            
            <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                <input type="hidden" name="form_type" value="inquiry">
                <input type="hidden" name="service" value="General">
                
                <div class="form-group" style="display:grid; grid-template-columns:1fr 1fr; gap:15px;">
                    <div>
                        <label class="form-label"><?php echo __t('fullname'); ?> *</label>
                        <input type="text" name="name" class="form-control" placeholder="<?php echo __t('placeholder_name'); ?>" required>
                    </div>
                    <div>
                        <label class="form-label"><?php echo __t('mobile'); ?> *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="<?php echo __t('placeholder_phone'); ?>" required pattern="[0-9]{10}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label"><?php echo __t('email'); ?></label>
                    <input type="email" name="email" class="form-control" placeholder="<?php echo __t('placeholder_email'); ?>">
                </div>
                
                <div class="form-group">
                    <label class="form-label"><?php echo _pt('suggest_label'); ?></label>
                    <textarea name="message" class="form-control" rows="5" placeholder="<?php echo __t('placeholder_message'); ?>" required></textarea>
                </div>
                
                <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start;">
                    <input type="checkbox" name="privacy_agree" required id="suggest_privacy_check" style="margin-top: 4px;">
                    <label for="suggest_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                        <?php echo __t('privacy_agree_text'); ?>
                    </label>
                </div>
                
                <button type="submit" class="btn-primary" style="max-width: 200px; margin-top:10px;"><?php echo _pt('submit_btn'); ?></button>
            </form>
        </div>

        <!-- Sidebar widget -->
        <div>
            <div class="widget-card" style="border-left: 4px solid var(--gold); text-align: center;">
                <span style="font-size: 30px;">📞</span>
                <h4 style="margin: 10px 0;"><?php echo _pt('urgent_contact'); ?></h4>
                <p style="font-size: 12px; color: #666; margin-bottom: 15px;"><?php echo _pt('urgent_desc'); ?></p>
                <a href="tel:91<?php echo CONTACT_PHONE; ?>" class="btn-primary"><?php echo __t('call_now'); ?></a>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('General'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
