<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'title' => 'योग आणि झुम्बा फिटनेस',
        'center_title' => 'वनलाईफ फिटनेस सेंटर',
        'center_desc' => 'बदलापूरमधील महिलांचे अग्रगण्य तंदुरुस्ती केंद्र - <strong>वनलाईफ फिटनेस सेंटर</strong> मध्ये आपले स्वागत आहे. हे केंद्र खास <strong>फक्त महिलांसाठीच</strong> डिझाइन केलेले आहे. सौ. गौरी शैलेश महाजन (प्रमाणित प्रशिक्षक) यांच्या मार्गदर्शनाखाली, आम्ही महिलांना त्यांच्या आरोग्याला प्राधान्य देण्यासाठी एक सुरक्षित, ऊर्जावान आणि पूर्णपणे वातानुकूलित (AC) वातावरण देतो.',
        'retreat_title' => 'वेलनेस रिट्रीट सोहळा (Nature Calling)',
        'retreat_desc' => 'निसर्गरम्य निसर्गात आयोजित आमच्या लोकप्रिय २-दिवसीय, १-रात्रीच्या निवासी आरोग्य शिबिरात (Wellness Camp) सामील व्हा.',
        'price' => 'किंमत:',
        'price_val' => 'केवळ रु. ३६००/-',
        'includes' => 'समाविष्ट:',
        'includes_val' => 'राहणे, आरामदायी प्रवास, सर्व जेवण, सर्व सत्रे आणि मनोरंजक उपक्रम',
        'sessions' => 'सत्रे:',
        'sessions_val' => 'पॉवर योग, झुम्बा, ध्यान आणि श्वसन व्यायाम',
        'retreat_note' => '* नवीन बॅचेस दरमहा सुरू होतात. पूर्व-नोंदणी आणि तारखांची पुष्टी करण्यासाठी इंटरेस्ट फॉर्म सबमिट करा.',
        'classes_batches' => 'वर्ग आणि बॅचेस माहिती',
        'batch_a_title' => 'बॅच ए (सकाळ)',
        'batch_a_time' => 'सकाळी ०६:०० - ०७:००',
        'batch_a_desc' => 'पारंपारिक योग आणि प्राणायाम',
        'batch_b_title' => 'बॅच बी (झुम्बा)',
        'batch_b_time' => 'सकाळी ०७:३० - ०८:३०',
        'batch_b_desc' => 'झुम्बा एरोबिक्स आणि डान्स वर्कआउट',
        'batch_c_title' => 'बॅच सी (संध्याकाळ)',
        'batch_c_time' => 'संध्याकाळी ०५:३० - ०६:३०',
        'batch_c_desc' => 'स्ट्रेचिंग, योग आणि ध्यान',
        'faq_q1' => 'Q: वर्ग फक्त महिलांसाठीच आहेत का?',
        'faq_a1' => 'होय, वनलाईफ फिटनेस सेंटर आणि वेलनेस रिट्रीट्समधील सर्व बॅचेस महिलांच्या सुरक्षिततेसाठी आणि आरामासाठी खास त्यांच्यासाठीच आयोजित केल्या जातात.',
        'faq_q2' => 'Q: नियमित बॅचेससाठी फी रचना काय आहे?',
        'faq_a2' => 'नियमित मासिक वर्ग रु. १५००/- प्रति महिना पासून सुरू होतात. आम्ही त्रैमासिक आणि वार्षिक पॅकेज सवलत देखील देतो.',
        'faq_q3' => 'Q: मी योग आणि झुम्बा दोन्ही वर्ग जॉइन करू शकतो का?',
        'faq_a3' => 'होय, आमच्याकडे एकात्मिक पॅकेजेस आहेत जे सहभागींना पर्यायी दिवसांवर योग आणि झुम्बा दोन्ही सत्रांना उपस्थित राहण्याची परवानगी देतात.',
        'select_batch' => 'बॅच निवड (Select Batch)',
        'batch_a_opt' => 'बॅच ए (सकाळी ०६:०० - ०७:०० योग)',
        'batch_b_opt' => 'बॅच बी (सकाळी ०७:३० - ०८:३० झुम्बा)',
        'batch_c_opt' => 'बॅच सी (संध्याकाळी ०५:३० - ०६:३० योग)'
    ],
    'hi' => [
        'title' => 'योग और ज़ुम्बा फिटनेस',
        'center_title' => 'वनलाइफ फिटनेस सेंटर',
        'center_desc' => 'बदलापुर की महिलाओं के प्रीमियम फिटनेस डेस्टिनेशन - <strong>वनलाइफ फिटनेस सेंटर</strong> में आपका स्वागत है, जो विशेष रूप से <strong>केवल महिलाओं के लिए</strong> तैयार किया गया है। प्रमाणित प्रशिक्षिका श्रीमती गौरी शैलेश महाजन के मार्गदर्शन में, हम महिलाओं को उनके स्वास्थ्य और फिटनेस को प्राथमिकता देने के लिए एक सुरक्षित, उच्च-ऊर्जा और पूर्णतः वातानुकूलित (AC) वातावरण प्रदान करते हैं।',
        'retreat_title' => 'वेलनेस रिट्रीट सोहला (Nature Calling)',
        'retreat_desc' => 'सुंदर प्राकृतिक वातावरण में आयोजित हमारे लोकप्रिय २-दिवसीय, १-रात के आवासीय कल्याण शिविर में शामिल हों।',
        'price' => 'कीमत:',
        'price_val' => 'रु. ३६००/- केवल',
        'includes' => 'शामिल है:',
        'includes_val' => 'रहना, आरामदायक यात्रा, सभी भोजन, सभी सत्र और मनोरंजक गतिविधियां',
        'sessions' => 'सत्र:',
        'sessions_val' => 'पावर योग, ज़ुम्बा, ध्यान और प्राणायाम (Breathwork)',
        'retreat_note' => '* नए बैच हर महीने चलते हैं। प्री-रजिस्टर और तारीखों की पुष्टि के लिए पूछताछ फॉर्म सबमिट करें।',
        'classes_batches' => 'कक्षाएं और बैचों की जानकारी',
        'batch_a_title' => 'बैच ए (सुबह)',
        'batch_a_time' => 'सुबह ०६:०० - ०७:००',
        'batch_a_desc' => 'पारंपरिक योग और प्राणायाम',
        'batch_b_title' => 'बैच बी (ज़ुम्बा)',
        'batch_b_time' => 'सुबह ०७:३० - ०८:३०',
        'batch_b_desc' => 'ज़ुम्बा एरोबिक्स और डांस वर्कआउट',
        'batch_c_title' => 'बैच सी (शाम)',
        'batch_c_time' => 'शाम ०५:३० - ०६:३०',
        'batch_c_desc' => 'स्ट्रेचिंग, योग और ध्यान',
        'faq_q1' => 'Q: क्या कक्षाएं केवल महिलाओं के लिए ही हैं?',
        'faq_a1' => 'हाँ, वनलाइफ फिटनेस सेंटर और वेलनेस रिट्रीट की सभी बैच विशेष रूप से केवल महिलाओं के लिए आयोजित की जाती हैं ताकि अधिकतम सुविधा और सुरक्षा सुनिश्चित हो सके।',
        'faq_q2' => 'Q: नियमित बैचों के लिए शुल्क संरचना क्या है?',
        'faq_a2' => 'नियमित मासिक कक्षाएं रु. १५००/- प्रति माह से शुरू होती हैं। हम त्रैमासिक और वार्षिक पैकेज पर छूट भी प्रदान करते हैं।',
        'faq_q3' => 'Q: क्या मैं योग और ज़ुम्बा दोनों कक्षाओं में शामिल हो सकता हूँ?',
        'faq_a3' => 'हाँ, हमारे पास एकीकृत पैकेज हैं जो प्रतिभागियों को वैकल्पिक दिनों में योग और ज़ुम्बा दोनों सत्रों में भाग लेने की अनुमति देते हैं।',
        'select_batch' => 'बैच चयन (Select Batch)',
        'batch_a_opt' => 'बैच ए (सुबह ०६:०० - ०७:०० योग)',
        'batch_b_opt' => 'बैच बी (सुबह ०७:३० - ०८:३० ज़ुम्बा)',
        'batch_c_opt' => 'बैच सी (शाम ०५:३० - ०६:३० योग)'
    ],
    'en' => [
        'title' => 'Yoga & Zumba Fitness',
        'center_title' => 'OneLife Fitness Center',
        'center_desc' => 'Welcome to <strong>OneLife Fitness Center</strong>, badlapur\'s premium fitness destination designed <strong>Exclusively for Ladies</strong>. Under the guidance of certified instructor Mrs. Gauri Shailesh Mahajan, we provide a safe, high-energy, and fully air-conditioned (AC) environment to help women prioritize their health and fitness.',
        'retreat_title' => 'Wellness Retreat Festival (Nature Calling)',
        'retreat_desc' => 'Join our popular 2-Day, 1-Night residential wellness camp held in scenic natural surroundings.',
        'price' => 'Price:',
        'price_val' => 'Rs. 3600/- Only',
        'includes' => 'Includes:',
        'includes_val' => 'Stay, Comfort Travel, All Meals, All Sessions & Fun Activities',
        'sessions' => 'Sessions:',
        'sessions_val' => 'Power Yoga, Zumba, Meditation, and Breathwork',
        'retreat_note' => '* Next batches run monthly. Submit the interest form to pre-register and confirm dates.',
        'classes_batches' => 'Classes & Batches Information',
        'batch_a_title' => 'Batch A (Morning)',
        'batch_a_time' => '06:00 AM - 07:00 AM',
        'batch_a_desc' => 'Traditional Yoga & Pranayam',
        'batch_b_title' => 'Batch B (Zumba)',
        'batch_b_time' => '07:30 AM - 08:30 AM',
        'batch_b_desc' => 'Zumba Aerobics & Dance Workout',
        'batch_c_title' => 'Batch C (Evening)',
        'batch_c_time' => '05:30 PM - 06:30 PM',
        'batch_c_desc' => 'Stretching, Yoga & Meditation',
        'faq_q1' => 'Q: Are the classes strictly for ladies?',
        'faq_a1' => 'Yes, all batches at OneLife Fitness Center and the Wellness Retreats are organized exclusively for ladies to ensure maximum comfort and focus.',
        'faq_q2' => 'Q: What is the fee structure for regular batches?',
        'faq_a2' => 'Regular monthly batches start at Rs. 1500/- per month. We offer quarterly and yearly package discounts as well.',
        'faq_q3' => 'Q: Can I join both Yoga and Zumba classes?',
        'faq_a3' => 'Yes, we have integrated packages that allow participants to attend both Yoga and Zumba sessions on alternate days.',
        'select_batch' => 'Select Batch',
        'batch_a_opt' => 'Batch A (06:00 AM - 07:00 AM Yoga)',
        'batch_b_opt' => 'Batch B (07:30 AM - 08:30 AM Zumba)',
        'batch_c_opt' => 'Batch C (05:30 PM - 06:30 PM Yoga)'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with Yoga Theme Color -->
    <div class="hero-banner" style="background: linear-gradient(135deg, var(--teal), #00BFA5);">
        <h2>🧘‍♀️ <?php echo _pt('title'); ?></h2>
        <p><?php echo __t('yoga_subtitle'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: var(--teal); border-bottom: 2px solid var(--teal); padding-bottom: 8px;"><?php echo _pt('center_title'); ?></h3>
            <p style="margin-bottom: 15px;"><?php echo _pt('center_desc'); ?></p>
            
            <!-- Retreat Section -->
            <div style="background-color: #e0f2f1; padding: 20px; border-radius: var(--border-radius-md); border-left: 5px solid var(--teal); margin: 25px 0;">
                <h4 style="color: var(--teal); margin-bottom: 10px; font-weight:700;">🏕️ <?php echo _pt('retreat_title'); ?></h4>
                <p style="font-size:14px; margin-bottom: 12px;"><?php echo _pt('retreat_desc'); ?></p>
                <table style="width:100%; font-size:13px; margin-bottom: 15px; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid rgba(0,0,0,0.05);"><td style="padding: 6px 0;"><strong><?php echo _pt('price'); ?></strong></td><td style="color:var(--teal); font-weight:700; text-align:right;"><?php echo _pt('price_val'); ?></td></tr>
                    <tr style="border-bottom: 1px solid rgba(0,0,0,0.05);"><td style="padding: 6px 0;"><strong><?php echo _pt('includes'); ?></strong></td><td style="text-align:right;"><?php echo _pt('includes_val'); ?></td></tr>
                    <tr style="border-bottom: 1px solid rgba(0,0,0,0.05);"><td style="padding: 6px 0;"><strong><?php echo _pt('sessions'); ?></strong></td><td style="text-align:right;"><?php echo _pt('sessions_val'); ?></td></tr>
                </table>
                <p style="font-size:11px; font-style:italic; color:#555;"><?php echo _pt('retreat_note'); ?></p>
            </div>

            <!-- Class Batches -->
            <h3 style="margin-bottom: 15px; color: var(--teal);"><?php echo _pt('classes_batches'); ?></h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin-bottom: 30px;">
                <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; text-align: center;">
                    <h5 style="color: var(--teal);"><?php echo _pt('batch_a_title'); ?></h5>
                    <p style="font-size:13px; font-weight:700; margin: 8px 0;"><?php echo _pt('batch_a_time'); ?></p>
                    <p style="font-size:11px; color:#666;"><?php echo _pt('batch_a_desc'); ?></p>
                </div>
                <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; text-align: center;">
                    <h5 style="color: var(--teal);"><?php echo _pt('batch_b_title'); ?></h5>
                    <p style="font-size:13px; font-weight:700; margin: 8px 0;"><?php echo _pt('batch_b_time'); ?></p>
                    <p style="font-size:11px; color:#666;"><?php echo _pt('batch_b_desc'); ?></p>
                </div>
                <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; text-align: center;">
                    <h5 style="color: var(--teal);"><?php echo _pt('batch_c_title'); ?></h5>
                    <p style="font-size:13px; font-weight:700; margin: 8px 0;"><?php echo _pt('batch_c_time'); ?></p>
                    <p style="font-size:11px; color:#666;"><?php echo _pt('batch_c_desc'); ?></p>
                </div>
            </div>

            <!-- FAQ Accordion -->
            <div class="faq-section">
                <h3 style="margin-bottom: 15px; color: var(--teal);"><?php echo __t('faq'); ?></h3>
                <div class="faq-item">
                    <div class="faq-question"><?php echo _pt('faq_q1'); ?> <span>+</span></div>
                    <div class="faq-answer"><?php echo _pt('faq_a1'); ?></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><?php echo _pt('faq_q2'); ?> <span>+</span></div>
                    <div class="faq-answer"><?php echo _pt('faq_a2'); ?></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><?php echo _pt('faq_q3'); ?> <span>+</span></div>
                    <div class="faq-answer"><?php echo _pt('faq_a3'); ?></div>
                </div>
            </div>
        </div>

        <!-- Sidebar Registration Form -->
        <div>
            <div class="widget-card" style="border-left: 4px solid var(--teal); position: sticky; top: 90px;">
                <div class="form-title" style="color: var(--teal); border-left-color: var(--teal);"><?php echo __t('yoga_interest_form'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="yoga">
                    <input type="hidden" name="amount" value="3600">
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
                        <label class="form-label"><?php echo _pt('select_batch'); ?></label>
                        <select name="batch" class="form-control">
                            <option value="Batch A"><?php echo _pt('batch_a_opt'); ?></option>
                            <option value="Batch B"><?php echo _pt('batch_b_opt'); ?></option>
                            <option value="Batch C"><?php echo _pt('batch_c_opt'); ?></option>
                            <option value="Retreat"><?php echo __t('retreat_option'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="yoga_privacy_check" style="margin-top: 4px;">
                        <label for="yoga_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="background: linear-gradient(135deg, var(--teal), #00796B);"><?php echo __t('submit'); ?></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('Yoga'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
