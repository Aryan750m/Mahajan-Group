<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_title' => '🤝 एनजीओ सेवा',
        'banner_desc' => 'महाजन चॅरिटेबल फाउंडेशन — काळजी घेणे, जीवन उन्नत करणे',
        'section_title' => 'आमचे धर्मादाय ध्येय',
        'section_desc' => '<strong>महाजन चॅरिटेबल ट्रस्ट</strong> ही ठाणे जिल्ह्यातील ग्रामीण समुदायांना बाल शिक्षण, वैद्यकीय पुरवठा आणि आपत्ती निवारण यासाठी काम करणारी बिगर सरकारी संस्था (NGO) आहे. आमचा असा विश्वास आहे की साधी मदत देखील समाजात मोठे परिवर्तन घडवू शकते.',
        'ongoing_ops' => 'सुरू असलेले धर्मादाय उपक्रम',
        'bullet_1' => '<strong>गौरी शिक्षण सहाय्य:</strong> ग्रामीण शाळांमधील एकल मातांच्या मुलींना शिष्यवृत्ती, शालेय दप्तर आणि स्टेशनरी संचांचे वाटप करणे.',
        'bullet_2' => '<strong>मोबाईल वैद्यकीय शिबिरे:</strong> अंबरनाथ जवळील आदिवासी पाड्यांमध्ये विनामूल्य आरोग्य तपासणी, साखर/बीपी चाचण्या आयोजित करणे आणि आवश्यक औषधांचे वाटप करणे.',
        'bullet_3' => '<strong>दैनिक पोषण योजना:</strong> अल्प उत्पन्न असलेल्या शेतकरी कुटुंबांना कोरडे शिधा कीट (धान्य, डाळी, तेल) पुरवणे.',
        'upi_donation' => '📲 सुलभ यूपीआय (UPI) देणगी पर्याय',
        'upi_desc' => 'थेट देणगी देण्यासाठी गुगल पे, फोनपे, पेटीएम किंवा भीम यूपीआय वापरून खालील क्यूआर (QR) कोड स्कॅन करा. तुमच्या देणग्या कर सवलत पावती मिळवण्यासाठी पात्र आहेत.',
        'trustee_acc' => '(सौ. गौरी शैलेश महाजन - ट्रस्टी खाते)',
        'faq_q1' => 'Q: मला देणगीची कर सवलत पावती मिळेल का?',
        'faq_a1' => 'होय, तुम्ही देणगी अर्ज भरल्यानंतर आणि व्यवहार पूर्ण केल्यानंतर, आमचे कार्यालय ३ कार्यदिवसांच्या आत तुमची कर सवलत पावती ईमेल करेल.',
        'faq_q2' => 'Q: मी कपडे किंवा शैक्षणिक पुस्तके दान करू शकतो का?',
        'faq_a2' => 'होय, आम्ही भौतिक वस्तूंची देणगी स्वीकारतो. कृपया आमच्याशी संपर्क साधा किंवा वस्तू देण्यासाठी शॉप नंबर ४, बदलापूर येथे भेट द्या.',
        'donation_form' => 'देणगी अर्ज',
        'donation_amt' => 'देणगी रक्कम (INR)',
        'payment_mode' => 'पेमेंट मोड / गेटवे',
        'opt_razorpay' => 'रेझरपे (Razorpay) ऑनलाइन पेमेंट',
        'opt_cashfree' => 'कॅशफ्री (Cashfree) / पेयू (PayU) पेमेंट',
        'opt_upi' => 'थेट यूपीआय (UPI) क्यूआर कोड स्कॅन'
    ],
    'hi' => [
        'banner_title' => '🤝 एनजीओ सेवाएं',
        'banner_desc' => 'महाजन चैरिटेबल फाउंडेशन — देखभाल और जीवन का उत्थान',
        'section_title' => 'हमारा चैरिटी मिशन',
        'section_desc' => '<strong>महाजन चैरिटेबल ट्रस्ट</strong> एक गैर-सरकारी संगठन है जो ठाणे जिले में ग्रामीण समुदायों को बाल शिक्षा, चिकित्सा आपूर्ति और आपदा राहत सहायता प्रदान करने के लिए प्रतिबद्ध है। हमारा मानना है कि देखभाल के सरल कार्य गहरे सामाजिक मूल्य पैदा करते हैं।',
        'ongoing_ops' => 'चल रहे परोपकारी कार्य',
        'bullet_1' => '<strong>गौरी शिक्षा सहायता:</strong> ग्रामीण स्कूलों में एकल माताओं की बेटियों को छात्रवृत्ति, स्कूल बैग और स्टेशनरी सेट प्रदान करना।',
        'bullet_2' => '<strong>मोबाइल मेडिकल कैंप:</strong> अंबरनाथ के पास आदिवासी समूहों में मुफ्त जांच, शुगर/बीपी परीक्षण आयोजित करना और आवश्यक दवाएं वितरित करना।',
        'bullet_3' => '<strong>दैनिक पोषण योजना:</strong> कम आय वाले किसान परिवारों को सूखा राशन किट (अनाज, दालें, तेल) प्रदान करना।',
        'upi_donation' => '📲 आसान यूपीआई (UPI) दान विकल्प',
        'upi_desc' => 'सीधे दान करने के लिए Google Pay, PhonePe, Paytm या BHIM UPI का उपयोग करके नीचे दिए गए QR कोड को स्कैन करें। आपके दान टैक्स छूट रसीद लाभों के लिए पात्र हैं।',
        'trustee_acc' => '(श्रीमती गौरी शैलेश महाजन - ट्रस्टी खाता)',
        'faq_q1' => 'Q: क्या मुझे टैक्स दान रसीद मिलती है?',
        'faq_a1' => 'हाँ, एक बार जब आप दान रुचि फॉर्म भरते हैं और लेनदेन पूरा करते हैं, तो हमारा व्यवस्थापक कार्यालय ३ कार्य दिवसों के भीतर आपकी टैक्स रसीद ईमेल कर देगा।',
        'faq_q2' => 'Q: क्या मैं कपड़े या शैक्षणिक पुस्तकें दान कर सकता हूँ?',
        'faq_a2' => 'हाँ, हम सहर्ष भौतिक दान स्वीकार करते हैं। कृपया हमसे संपर्क करें या सामान सौंपने के लिए शॉप नंबर ४, बदलापुर पर जाएँ।',
        'donation_form' => 'दान फॉर्म',
        'donation_amt' => 'दान राशि (INR)',
        'payment_mode' => 'भुगतान मोड / गेटवे',
        'opt_razorpay' => 'रेज़रपे (Razorpay) ऑनलाइन भुगतान',
        'opt_cashfree' => 'कैशफ्री (Cashfree) / पेयू (PayU) भुगतान',
        'opt_upi' => 'सीधा यूपीआई (UPI) क्यूआर कोड स्कैन'
    ],
    'en' => [
        'banner_title' => '🤝 NGO Services',
        'banner_desc' => 'Mahajan Charity Foundation — Empanelling Care, Uplifting Lives',
        'section_title' => 'Our Charity Core Mission',
        'section_desc' => 'The <strong>Mahajan Charity Trust</strong> is a non-governmental organization committed to supporting child education, distributing medical supplies, and providing disaster relief to rural communities in Thane district. We believe that simple acts of care generate deep social values.',
        'ongoing_ops' => 'Ongoing Charitable Operations',
        'bullet_1' => '<strong>Gauri Education Support:</strong> Providing scholarships, school bags, and stationery sets to daughters of single mothers in village schools.',
        'bullet_2' => '<strong>Mobile Medical Camps:</strong> Organizing free check-ups, sugar/BP tests, and distributing prescription medicines in tribal clusters near Ambernath.',
        'bullet_3' => '<strong>Daily Nourishment Scheme:</strong> Providing dry ration kits (grains, pulses, oil) to low-income farming families.',
        'upi_donation' => '📲 Easy UPI Donation Option',
        'upi_desc' => 'Scan the QR code below using Google Pay, PhonePe, Paytm, or BHIM UPI to donate directly. Your donations are eligible for tax exemption receipt benefits.',
        'trustee_acc' => '(Mrs. Gauri Shailesh Mahajan - Trustee Account)',
        'faq_q1' => 'Q: Do I get a tax donation receipt?',
        'faq_a1' => 'Yes, once you fill out the donation interest form and complete the transaction, our admin office will email your tax receipt within 3 business days.',
        'faq_q2' => 'Q: Can I donate clothes or educational books?',
        'faq_a2' => 'Yes, we gladly accept physical donations. Please contact us or visit Shop No. 4, Badlapur, to hand over items.',
        'donation_form' => 'Donation Form',
        'donation_amt' => 'Donation Amount (INR)',
        'payment_mode' => 'Payment Mode / Gateway',
        'opt_razorpay' => 'Razorpay Online Payment',
        'opt_cashfree' => 'Cashfree / PayU Payment',
        'opt_upi' => 'UPI QR Code Scan'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with NGO Theme Color -->
    <div class="hero-banner" style="background: linear-gradient(135deg, #E64A19, #FF7043);">
        <h2><?php echo _pt('banner_title'); ?></h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: #E64A19; border-bottom: 2px solid #E64A19; padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 15px;"><?php echo _pt('section_desc'); ?></p>
            
            <h4 style="margin-bottom: 15px; color: #E64A19;"><?php echo _pt('ongoing_ops'); ?></h4>
            <ul style="margin-left: 20px; margin-bottom: 25px; line-height: 1.8;">
                <li><?php echo _pt('bullet_1'); ?></li>
                <li><?php echo _pt('bullet_2'); ?></li>
                <li><?php echo _pt('bullet_3'); ?></li>
            </ul>

            <!-- QR Code Donation Information -->
            <div style="background-color: #fbe9e7; padding: 25px; border-radius: var(--border-radius-md); border-left: 5px solid #E64A19; text-align: center; margin-bottom: 30px;">
                <h4 style="color:#E64A19; margin-bottom: 10px;"><?php echo _pt('upi_donation'); ?></h4>
                <p style="font-size:13px; margin-bottom: 20px;"><?php echo _pt('upi_desc'); ?></p>
                
                <!-- Mock QR Code SVG -->
                <div style="background: white; padding: 15px; display: inline-block; border-radius: 8px; box-shadow: var(--shadow-sm); margin-bottom: 15px;">
                    <svg width="150" height="150" viewBox="0 0 100 100">
                        <!-- Simulated QR Grid -->
                        <rect x="5" y="5" width="20" height="20" fill="#333"/>
                        <rect x="9" y="9" width="12" height="12" fill="white"/>
                        <rect x="5" y="75" width="20" height="20" fill="#333"/>
                        <rect x="9" y="79" width="12" height="12" fill="white"/>
                        <rect x="75" y="5" width="20" height="20" fill="#333"/>
                        <rect x="79" y="9" width="12" height="12" fill="white"/>
                        <path d="M30,10 H60 V30 H40 V60 H30 Z M70,30 H90 V60 H70 Z M10,30 H30 V50 H10 Z M60,60 H90 V90 H60 Z M30,70 H50 V90 H30 Z" fill="#333"/>
                    </svg>
                </div>
                
                <p style="font-size:14px; font-weight:700; color:#333;">UPI ID: mahajantrust@okaxis</p>
                <p style="font-size:11px; color:#666; margin-top:5px;"><?php echo _pt('trustee_acc'); ?></p>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h3 style="margin-bottom: 15px; color: #E64A19;"><?php echo __t('faq'); ?></h3>
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

        <!-- Sidebar Donation Interest Form -->
        <div>
            <div class="widget-card" style="border-left: 4px solid #E64A19; position: sticky; top: 90px;">
                <div class="form-title" style="color: #E64A19; border-left-color: #E64A19;"><?php echo _pt('donation_form'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="volunteer">
                    <input type="hidden" name="initiative" value="Donation Interest Submission">
                    
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
                        <label class="form-label"><?php echo _pt('donation_amt'); ?></label>
                        <input type="number" name="amount" class="form-control" placeholder="1000" min="100">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo _pt('payment_mode'); ?></label>
                        <select name="message" class="form-control">
                            <option value="Donation via Razorpay Gateway"><?php echo _pt('opt_razorpay'); ?></option>
                            <option value="Donation via Cashfree / PayU"><?php echo _pt('opt_cashfree'); ?></option>
                            <option value="Donation via Direct UPI QR Code Scan"><?php echo _pt('opt_upi'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="ngo_privacy_check" style="margin-top: 4px;">
                        <label for="ngo_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="background: linear-gradient(135deg, #E64A19, #BF360C);"><?php echo __t('submit'); ?></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('NGO'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
