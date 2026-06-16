<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_title' => '🍏 सेंद्रिय आहार आणि पोषण',
        'banner_desc' => 'आरोग्यदायी सेंद्रिय आहार, पोषण सल्ला आणि वेलनेस प्रोग्राम',
        'section_title' => 'दैनंदिन पोषणासाठी एक समग्र दृष्टिकोन',
        'section_desc' => 'शारीरिक व्यायाम आणि योग हा केवळ अर्धा लढा आहे. वनलाईफ फिटनेसमध्ये, आम्ही आधुनिक महिलांच्या व्यस्त जीवनशैलीचा विचार करून तयार केलेल्या संपूर्ण आहार कार्यक्रमावर भर देतो. सौ. गौरी शैलेश महाजन यांच्या मार्गदर्शनाखाली, आम्ही आरोग्यदायी आहार योजना, डिटॉक्स आहार आणि पोषण चार्ट देतो जे स्नायूंची पुनर्प्राप्ती, वजन कमी करणे आणि ऊर्जा नियंत्रित करण्यास मदत करतात.',
        'diet_schemes' => 'आहार आणि पोषण योजना',
        'detox_title' => 'डिटॉक्स आणि रिसेट आहार',
        'detox_desc' => 'पचनसंस्था स्वच्छ करण्यासाठी आणि वजन नियंत्रित करण्यासाठी तयार केलेली ७-दिवसांची ज्यूस आणि कच्च्या सॅलडची आहार प्रणाली.',
        'zumba_fuel_title' => 'अ‍ॅक्टिव्ह झुम्बा इंधन',
        'zumba_fuel_desc' => 'उच्च-तीव्रतेच्या झुम्बा प्रशिक्षणात सहभागी होणाऱ्या महिलांसाठी परिपूर्ण असा उच्च-प्रथिने आणि मध्यम-कर्बोदके असलेला आहार.',
        'sattvik_title' => 'योग सात्त्विक योजना',
        'sattvik_desc' => 'पारंपारिक, सहज पचणारे शाकाहारी जेवण जे योगासने करताना मानसिक शांतता आणि लवचिकता प्रदान करते.',
        'personal_consult_title' => '🍏 वैयक्तिकृत आहार सल्ला',
        'personal_consult_desc' => 'आमच्या योजनांमध्ये वैयक्तिक शरीराची मोजमापे, साप्ताहिक आहाराचा मागोवा (Meal Tracking) आणि दृश्यमान आरोग्य लाभांची खात्री करण्यासाठी व्हर्च्युअल सपोर्ट ग्रुप्सचा समावेश आहे.',
        'faq_q1' => 'Q: तुम्ही सेंद्रिय उत्पादने किंवा अन्न पाकिटे पुरवता का?',
        'faq_a1' => 'सध्या आम्ही सविस्तर आहार सल्ला मार्गदर्शिका, पाककृती (Recipes) आणि खरेदीच्या याद्या प्रदान करतो. आम्ही थेट पॅकेज्ड खाद्यपदार्थ तयार करत नाही.',
        'faq_q2' => 'Q: झुम्बा सदस्यतेमध्ये आहार नियोजनाचा समावेश आहे का?',
        'faq_a2' => 'होय, आमच्या सर्व वार्षिक आणि सहामाही सक्रिय झुम्बा सदस्यांना दरमहा विनामूल्य अद्ययावत आहार चार्ट मिळतात.',
        'nutrition_inquiry' => 'पोषण चौकशी'
    ],
    'hi' => [
        'banner_title' => '🍏 जैविक आहार और पोषण',
        'banner_desc' => 'स्वस्थ जैविक आहार, पोषण परामर्श और कल्याण कार्यक्रम',
        'section_title' => 'दैनिक पोषण के लिए एक समग्र दृष्टिकोण',
        'section_desc' => 'शारीरिक प्रशिक्षण और योग केवल आधी लड़ाई है। वनलाइफ फिटनेस में, हम विशेष रूप से आधुनिक महिलाओं की व्यस्त जीवनशैली के लिए डिज़ाइन किए गए एक संपूर्ण आहार कार्यक्रम पर जोर देते हैं। श्रीमती गौरी शैलेश महाजन के मार्गदर्शन में, हम स्वस्थ भोजन योजनाएं, डिटॉक्स आहार और पोषण चार्ट प्रदान करते हैं जो मांसपेशियों की रिकवरी, वजन घटाने और ऊर्जा नियंत्रण का समर्थन करते।',
        'diet_schemes' => 'आहार और पोषण योजनाएं',
        'detox_title' => 'डिटॉक्स और रीसेट आहार',
        'detox_desc' => 'पाचन तंत्र को साफ करने और वजन नियंत्रण शुरू करने के लिए डिज़ाइन किया गया ७ दिवसीय जूस और कच्चे सलाद का आहार।',
        'zumba_fuel_title' => 'एक्टिव ज़ुम्बा फ्यूल',
        'zumba_fuel_desc' => 'उच्च तीव्रता वाले ज़ुम्बा प्रशिक्षण में भाग लेने वाली महिलाओं के लिए बिल्कुल सही उच्च-प्रोटीन, मध्यम-कार्बोहाइड्रेट युक्त आहार।',
        'sattvik_title' => 'योग सात्त्विक योजना',
        'sattvik_desc' => 'पारंपरिक, आसानी से पचने योग्य शाकाहारी भोजन जो योग खिंचाव के दौरान मानसिक शांति और लचीलापन लाता है।',
        'personal_consult_title' => '🍏 व्यक्तिगत आहार परामर्श',
        'personal_consult_desc' => 'हमारी योजनाओं में व्यक्तिगत शारीरिक माप, साप्ताहिक भोजन ट्रैकिंग और दृश्यमान स्वास्थ्य लाभ सुनिश्चित करने के लिए वर्चुअल सहायता समूह शामिल हैं।',
        'faq_q1' => 'Q: क्या आप जैविक उत्पाद या भोजन पैकेट की आपूर्ति करते हैं?',
        'faq_a1' => 'वर्तमान में, हम विस्तृत आहार परामर्श मार्गदर्शिकाएँ, रेसिपी और खरीदारी की सूचियाँ प्रदान करते हैं। हम सीधे पैकेज्ड खाद्य पदार्थों का निर्माण नहीं करते हैं।',
        'faq_q2' => 'Q: क्या ज़ुम्बा सदस्यता में आहार योजना शामिल है?',
        'faq_a2' => 'हाँ, हमारे सभी वार्षिक और अर्ध-वार्षिक सक्रिय ज़ुम्बा सदस्यों को मासिक रूप से अद्यतन आहार चार्ट मुफ्त प्राप्त होता है।',
        'nutrition_inquiry' => 'पोषण संबंधी पूछताछ'
    ],
    'en' => [
        'banner_title' => '🍏 Foods & Nutrition',
        'banner_desc' => 'Healthy Organic Diets, Nutrition consultation & Wellness Retaining Programs',
        'section_title' => 'A Holistic Approach to Daily Nutrition',
        'section_desc' => 'Physical training and yoga are only half the battle. At OneLife Fitness, we emphasize a complete dietary program designed specifically for the busy lifestyle of modern women. Under Mrs. Gauri Shailesh Mahajan\'s curation, we offer healthy meal plans, detox diets, and nutrition charts that support muscle recovery, weight loss, and energy regulation.',
        'diet_schemes' => 'Diet and Nutrition Schemes',
        'detox_title' => 'Detox & Reset Diet',
        'detox_desc' => 'A 7-day juices and raw salad regime designed to cleanse the digestive tract and jumpstart weight control.',
        'zumba_fuel_title' => 'Active Zumba Fuel',
        'zumba_fuel_desc' => 'High-protein, moderate-carbohydrate diets perfect for ladies attending high-intensity Zumba training.',
        'sattvik_title' => 'Yoga Sattvik Plan',
        'sattvik_desc' => 'Traditional, easily digestible vegetarian meals that bring peace of mind and flexibility during yogic stretches.',
        'personal_consult_title' => '🍏 Personalized Diet Consultation',
        'personal_consult_desc' => 'Our plans include personalized body measurements, weekly meal tracking, and virtual support groups to ensure compliance and visible wellness gains.',
        'faq_q1' => 'Q: Do you supply organic products or food packets?',
        'faq_a1' => 'Currently, we offer detailed dietary consultation guides, recipes, and shopping lists. We do not manufacture packaged foods directly.',
        'faq_q2' => 'Q: Is diet planning included in the Zumba membership?',
        'faq_a2' => 'Yes, all our annual and semi-annual active Zumba members receive monthly updated diet charts free of charge.',
        'nutrition_inquiry' => 'Nutrition Inquiry'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with Foods Theme Color -->
    <div class="hero-banner" style="background: linear-gradient(135deg, #FF8F00, #FFB300);">
        <h2><?php echo _pt('banner_title'); ?></h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: #FF8F00; border-bottom: 2px solid #FF8F00; padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 15px;"><?php echo _pt('section_desc'); ?></p>
            
            <h4 style="margin-bottom: 15px; color: #FF8F00;"><?php echo _pt('diet_schemes'); ?></h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
                <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
                    <span style="font-size: 24px;">🥗</span>
                    <h5 style="margin: 8px 0; color: #FF8F00;"><?php echo _pt('detox_title'); ?></h5>
                    <p style="font-size: 12px; color: #666;"><?php echo _pt('detox_desc'); ?></p>
                </div>
                
                <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
                    <span style="font-size: 24px;">🍳</span>
                    <h5 style="margin: 8px 0; color: #FF8F00;"><?php echo _pt('zumba_fuel_title'); ?></h5>
                    <p style="font-size: 12px; color: #666;"><?php echo _pt('zumba_fuel_desc'); ?></p>
                </div>

                <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
                    <span style="font-size: 24px;">🍵</span>
                    <h5 style="margin: 8px 0; color: #FF8F00;"><?php echo _pt('sattvik_title'); ?></h5>
                    <p style="font-size: 12px; color: #666;"><?php echo _pt('sattvik_desc'); ?></p>
                </div>
            </div>

            <!-- Program Info -->
            <div style="background-color: #fff8e1; padding: 20px; border-radius: var(--border-radius-md); border-left: 5px solid #FF8F00; margin-bottom: 25px;">
                <h4 style="color:#FF8F00; margin-bottom: 8px;"><?php echo _pt('personal_consult_title'); ?></h4>
                <p style="font-size:13px;"><?php echo _pt('personal_consult_desc'); ?></p>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h3 style="margin-bottom: 15px; color: #FF8F00;"><?php echo __t('faq'); ?></h3>
                <div class="faq-item">
                    <div class="faq-question"><?php echo _pt('faq_q1'); ?> <span>+</span></div>
                    <div class="faq-answer"><?php echo _pt('faq_a1'); ?></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><?php echo _pt('faq_q2'); ?> <span>+</span></div>
                    <div class="faq-answer"><?php echo _pt('faq_a2'); ?></div>
                </div>
            </div>
        </div>

        <!-- Sidebar Inquiry Form -->
        <div>
            <div class="widget-card" style="border-left: 4px solid #FF8F00; position: sticky; top: 90px;">
                <div class="form-title" style="color: #FF8F00; border-left-color: #FF8F00;"><?php echo _pt('nutrition_inquiry'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="inquiry">
                    <input type="hidden" name="service" value="Foods">
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo __t('fullname'); ?> *</label>
                        <input type="text" name="name" class="form-control" placeholder="<?php echo __t('placeholder_name'); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo __t('mobile'); ?> *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="<?php echo __t('placeholder_phone'); ?>" required pattern="[0-9]{10}">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo __t('email'); ?></label>
                        <input type="email" name="email" class="form-control" placeholder="<?php echo __t('placeholder_email'); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo __t('message'); ?></label>
                        <textarea name="message" class="form-control" rows="3" placeholder="<?php echo __t('placeholder_message'); ?>"></textarea>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="foods_privacy_check" style="margin-top: 4px;">
                        <label for="foods_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="background: linear-gradient(135deg, #FF8F00, #E65100);"><?php echo __t('submit'); ?></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('Foods'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
