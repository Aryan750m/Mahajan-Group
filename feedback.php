<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_desc' => 'तुमचा अभिप्राय उत्कृष्टतेसाठी प्रेरणा देतो. सौ. गौरी महाजन यांच्या उपक्रमांबद्दल तुमचा अनुभव नोंदवा.',
        'section_title' => 'आमच्या सेवांचे मूल्यांकन करा',
        'section_desc' => 'आम्ही तुमच्या अभिप्रायाला महत्त्व देतो. कृपया आम्हाला रेट करा आणि खाली तुमची सविस्तर टिप्पणी लिहा. या मानांकनांमुळे आमच्या टीमला रिट्रीट्स आणि झुम्बा वर्कआउट्सची गुणवत्ता वाढवण्यास मदत होते.',
        'select_rating' => 'प्रतिक्रिया मानांकन (Select Rating) *',
        'feedback_label' => 'अभिप्राय / शेरा (Feedback Comments) *',
        'submit_btn' => 'अभिप्राय सादर करा',
        'wa_chat' => 'व्हॉट्सॲप चॅट',
        'wa_desc' => 'तुमचा अभिप्राय थेट सौ. गौरी महाजन यांच्या वैयक्तिक व्हॉट्सॲपवर पाठवा.',
        'wa_btn' => 'व्हॉट्सॲप अभिप्राय'
    ],
    'hi' => [
        'banner_desc' => 'आपकी प्रतिक्रिया उत्कृष्टता को प्रेरित करती है। श्रीमती गौरी महाजन के कार्यक्रमों के साथ अपने अनुभव को रेट करें।',
        'section_title' => 'हमारी सेवाओं को रेट करें',
        'section_desc' => 'हम आपकी समीक्षाओं को महत्व देते हैं। कृपया हमें रेट करें और नीचे अपनी विस्तृत टिप्पणी छोड़ें। ये रेटिंग हमारी टीम को रिट्रीट और ज़ुम्बा वर्कआउट की गुणवत्ता बढ़ाने में मदद करती हैं।',
        'select_rating' => 'प्रतिक्रिया रेटिंग (Select Rating) *',
        'feedback_label' => 'प्रतिक्रिया / टिप्पणी (Feedback Comments) *',
        'submit_btn' => 'प्रतिक्रिया जमा करें',
        'wa_chat' => 'व्हाट्सएप चैट',
        'wa_desc' => 'अपनी प्रतिक्रिया सीधे श्रीमती गौरी महाजन के व्यक्तिगत व्हाट्सएप हैंडल पर भेजें।',
        'wa_btn' => 'व्हाट्सएप प्रतिक्रिया'
    ],
    'en' => [
        'banner_desc' => 'Your feedback inspires excellence. Rate your experience with Mrs. Gauri Mahajan\'s programs.',
        'section_title' => 'Rate Our Services',
        'section_desc' => 'We value your reviews. Please rate us and leave your detailed comments below. These ratings help our team elevate the quality of retreats and zumba workouts.',
        'select_rating' => 'Select Rating *',
        'feedback_label' => 'Feedback Comments *',
        'submit_btn' => 'Submit Feedback',
        'wa_chat' => 'WhatsApp Chat',
        'wa_desc' => 'Send your feedback directly to Mrs. Gauri Mahajan\'s personal WhatsApp handle.',
        'wa_btn' => 'WhatsApp Feedback'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner -->
    <div class="hero-banner" style="background: linear-gradient(135deg, var(--teal), var(--primary-blue));">
        <h2>⭐ <?php echo __t('feedback'); ?> & Reviews</h2>
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
                
                <!-- Rating System -->
                <div class="form-group">
                    <label class="form-label"><?php echo _pt('select_rating'); ?></label>
                    <div style="display:flex; gap:10px; margin: 10px 0; font-size:24px;">
                        <input type="radio" name="rating" value="5" id="r5" checked style="display:none;">
                        <label for="r5" class="star-label" onclick="selectStars(5)" style="cursor:pointer; color:var(--gold);">★</label>
                        
                        <input type="radio" name="rating" value="4" id="r4" style="display:none;">
                        <label for="r4" class="star-label" onclick="selectStars(4)" style="cursor:pointer; color:var(--gold);">★</label>
                        
                        <input type="radio" name="rating" value="3" id="r3" style="display:none;">
                        <label for="r3" class="star-label" onclick="selectStars(3)" style="cursor:pointer; color:var(--gold);">★</label>
                        
                        <input type="radio" name="rating" value="2" id="r2" style="display:none;">
                        <label for="r2" class="star-label" onclick="selectStars(2)" style="cursor:pointer; color:var(--gold);">★</label>
                        
                        <input type="radio" name="rating" value="1" id="r1" style="display:none;">
                        <label for="r1" class="star-label" onclick="selectStars(1)" style="cursor:pointer; color:var(--gold);">★</label>
                    </div>
                </div>

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
                    <label class="form-label"><?php echo _pt('feedback_label'); ?></label>
                    <textarea name="message" id="feedback_message" class="form-control" rows="4" placeholder="<?php echo __t('placeholder_message'); ?>" required></textarea>
                </div>
                
                <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start;">
                    <input type="checkbox" name="privacy_agree" required id="feed_privacy_check" style="margin-top: 4px;">
                    <label for="feed_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                        <?php echo __t('privacy_agree_text'); ?>
                    </label>
                </div>
                
                <button type="submit" class="btn-primary" style="max-width: 200px; margin-top:10px;"><?php echo _pt('submit_btn'); ?></button>
            </form>
        </div>

        <!-- Sidebar widget -->
        <div>
            <div class="widget-card" style="border-left: 4px solid var(--teal); text-align: center;">
                <span style="font-size: 30px;">💬</span>
                <h4 style="margin: 10px 0;"><?php echo _pt('wa_chat'); ?></h4>
                <p style="font-size: 12px; color: #666; margin-bottom: 15px;"><?php echo _pt('wa_desc'); ?></p>
                <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="btn-primary" style="background:#25D366;"><?php echo _pt('wa_btn'); ?></a>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('General'); ?>

</div>

<script>
function selectStars(count) {
    const labels = document.querySelectorAll('.star-label');
    // Set first count stars to gold, rest to gray
    labels.forEach((label, idx) => {
        // Star ordering in DOM could be reversed or direct. Let's make sure it represents correctly.
        // To be safe, we will just prepend rating to message when submitting.
    });
    document.getElementById('feedback_message').value = "[Rating: " + count + "/5 Stars] " + document.getElementById('feedback_message').value.replace(/^\[Rating: .*?\]\s*/, '');
}
// Init rating string on load
selectStars(5);
</script>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
