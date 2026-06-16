<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_title' => '🌱 सामाजिक उपक्रम',
        'banner_desc' => 'महिलांचे सबलीकरण आणि सामाजिक कल्याण उपक्रमांना पाठबळ',
        'section_title' => 'आमचे सामाजिक योगदान',
        'section_desc' => 'सौ. गौरी शैलेश महाजन स्थानिक स्वयंसहाय्यता गट, पर्यावरण संवर्धन आणि स्वच्छ पाणी मोहिमांच्या माध्यमातून सामाजिक परिवर्तनासाठी सक्रियपणे कार्यरत आहेत. आम्ही गरजू घटकांसाठी नियमितपणे आरोग्य शिबिरे आणि ग्रामीण मुलींना स्वावलंबी बनवण्यासाठी शैक्षणिक प्रशिक्षण कार्यशाळा आयोजित करतो.',
        'initiatives_title' => 'प्रमुख उपक्रम आणि मोहिमा',
        'yoga_day_title' => '२१ जून योग दिन सोहळा',
        'yoga_day_desc' => 'बदलापूरमधील एक जाहीर समुदाय योग मेळावा, ज्यामध्ये शेकडो स्थानिक महिलांसाठी मानसिक आरोग्य प्रशिक्षण आणि सक्रिय आरोग्य तपासणीची सुविधा दिली जाते.',
        'tree_plantation_title' => 'हरित बदलापूर वृक्षारोपण मोहीम',
        'tree_plantation_desc' => 'बोराडपाडा वन रस्त्यावर स्थानिक फळांची रोपे लावण्यासाठी आणि शालेय मुलांना परिसंस्था संवर्धनाबाबत शिक्षित करण्यासाठी आयोजित केलेली मासिक मोहीम.',
        'join_vol_title' => '🤝 आमच्या स्वयंसेवक कुटुंबात सामील व्हा',
        'join_vol_desc' => 'तुम्हाला पर्यावरण संवर्धन किंवा महिलांच्या प्रशिक्षणाची आवड असल्यास, स्वयंसेवक म्हणून नोंदणी करा. आमच्या सदस्यांना प्रशंसापत्रे दिली जातात आणि उत्तम नेतृत्व अनुभव मिळतो.',
        'faq_q1' => 'Q: स्वयंसेवक म्हणून नोंदणी करण्यासाठी काही शुल्क आहे का?',
        'faq_a1' => 'नाही, स्वयंसेवक नोंदणी पूर्णपणे विनामूल्य आहे. आम्हाला फक्त तुमचा वेळ आणि सकारात्मक ऊर्जा हवी आहे.',
        'faq_q2' => 'Q: सामाजिक मोहिमा किती वेळा आयोजित केल्या जातात?',
        'faq_a2' => 'आम्ही महिन्यातून दोनदा वृक्षारोपण आणि जनजागृती मोहिमा राबवतो, सहसा शनिवारी सकाळी. नोंदणीकृत स्वयंसेवकांना तपशीलवार वेळापत्रक ईमेलद्वारे पाठवले जाते.',
        'select_initiative' => 'इच्छित उपक्रम (Select Initiative)',
        'opt_tree' => 'वृक्षारोपण मोहीम (Tree Plantation Drives)',
        'opt_wellness' => 'महिला आरोग्य शिबिर (Women Wellness Camps)',
        'opt_education' => 'ग्रामीण मुलांना शिकवणे (Teaching Rural Kids)',
        'remarks_exp' => 'टिप्पणी / कामाचा अनुभव (Remarks / Experience)'
    ],
    'hi' => [
        'banner_title' => '🌱 सामाजिक पहल',
        'banner_desc' => 'महिला सशक्तिकरण और सामुदायिक कल्याण गतिविधियों का समर्थन',
        'section_title' => 'हमारा सामाजिक योगदान',
        'section_desc' => 'श्रीमती गौरी शैलेश महाजन स्थानीय स्वयं सहायता समूहों, पर्यावरण संरक्षण और स्वच्छ जल अभियानों के माध्यम से सामाजिक परिवर्तन का सक्रिय रूप से नेतृत्व करती हैं। हम नियमित रूप से वंचित वर्गों के लिए कल्याण शिविर और ग्रामीण लड़कियों को आत्मनिर्भर बनाने के लिए शैक्षिक प्रशिक्षण कार्यशालाएं आयोजित करते हैं।',
        'initiatives_title' => 'प्रमुख पहल और अभियान',
        'yoga_day_title' => '२१ जून योग दिवस कार्यक्रम',
        'yoga_day_desc' => 'बदलापुर में एक खुला सामुदायिक योग समागम, जिसमें सैकड़ों स्थानीय महिलाओं के लिए मानसिक स्वास्थ्य प्रशिक्षण और स्वास्थ्य जांच की सुविधा दी जाती है।',
        'tree_plantation_title' => 'हरित बदलापुर वृक्षारोपण',
        'tree_plantation_desc' => 'बोराडपाडा वन मार्ग पर फलदार पौधे लगाने और स्कूली बच्चों को पारिस्थितिकी तंत्र संरक्षण पर शिक्षित करने के उद्देश्य से मासिक अभियान।',
        'join_vol_title' => '🤝 हमारे स्वयंसेवक परिवार में शामिल हों',
        'join_vol_desc' => 'यदि आप पर्यावरण बहाली या महिलाओं के प्रशिक्षण के प्रति जुनूनी हैं, तो स्वयंसेवक के रूप में साइन अप करें। हमारे सदस्यों को प्रशंसा पत्र मिलते हैं और नेतृत्व का अपार अनुभव प्राप्त होता है।',
        'faq_q1' => 'Q: क्या स्वयंसेवक के रूप में पंजीकरण करने के लिए कोई शुल्क है?',
        'faq_a1' => 'नहीं, स्वयंसेवक पंजीकरण पूरी तरह से निःशुल्क है। हमें बस आपका समर्पित समय और सकारात्मक ऊर्जा चाहिए।',
        'faq_q2' => 'Q: सामाजिक अभियान कितनी बार आयोजित किए जाते हैं?',
        'faq_a2' => 'हम महीने में दो बार वृक्षारोपण और जागरूकता अभियान चलाते हैं, आमतौर पर शनिवार की सुबह। विस्तृत कार्यक्रम पंजीकृत स्वयंसेवकों को ईमेल कर दिया जाता है।',
        'select_initiative' => 'इच्छित पहल (Select Initiative)',
        'opt_tree' => 'वृक्षारोपण अभियान (Tree Plantation Drives)',
        'opt_wellness' => 'महिला कल्याण शिविर (Women Wellness Camps)',
        'opt_education' => 'ग्रामीण बच्चों को पढ़ाना (Teaching Rural Kids)',
        'remarks_exp' => 'टिप्पणी / कार्य अनुभव (Remarks / Experience)'
    ],
    'en' => [
        'banner_title' => '🌱 Social Work Initiatives',
        'banner_desc' => 'Empowering Women & Supporting Community Welfare Activities',
        'section_title' => 'Our Social Footprint',
        'section_desc' => 'Mrs. Gauri Shailesh Mahajan actively champions social transformation through local self-help groups, environment conservation, and clean water drives. We regularly host wellness camps for underprivileged sections and educational training workshops for rural girls to encourage self-reliance.',
        'initiatives_title' => 'Key Initiatives & Campaigns',
        'yoga_day_title' => '21st June Yoga Day Event',
        'yoga_day_desc' => 'An open community yoga gathering in Badlapur, facilitating mental wellness training and dynamic health screening for hundreds of local ladies.',
        'tree_plantation_title' => 'Green Badlapur Tree Plantation',
        'tree_plantation_desc' => 'Monthly drives aimed at planting native fruit saplings along the Boradpada forest road and educating school kids on ecosystem conservation.',
        'join_vol_title' => '🤝 Join Our Volunteer Family',
        'join_vol_desc' => 'If you share a passion for environmental restoration or ladies\' training, sign up as a volunteer. Our members receive certificates of appreciation and gain immense leadership experience.',
        'faq_q1' => 'Q: Are there any fees to register as a volunteer?',
        'faq_a1' => 'No, volunteer registration is entirely free. All we seek is your dedicated time and positive energy.',
        'faq_q2' => 'Q: How often are social campaigns organized?',
        'faq_a2' => 'We run tree plantation and awareness campaigns twice a month, usually on Saturday mornings. Detailed schedules are emailed to registered volunteers.',
        'select_initiative' => 'Select Initiative',
        'opt_tree' => 'Tree Plantation Drives',
        'opt_wellness' => 'Women Wellness Camps',
        'opt_education' => 'Teaching Rural Kids',
        'remarks_exp' => 'Remarks / Experience'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with Social Work Theme Color -->
    <div class="hero-banner" style="background: linear-gradient(135deg, #8E24AA, #AB47BC);">
        <h2><?php echo _pt('banner_title'); ?></h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: #8E24AA; border-bottom: 2px solid #8E24AA; padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 15px;"><?php echo _pt('section_desc'); ?></p>
            
            <!-- Events Gallery representation -->
            <h4 style="margin-bottom: 15px; color: #8E24AA;"><?php echo _pt('initiatives_title'); ?></h4>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                <div style="border: 1px solid #eee; border-radius: 8px; overflow:hidden; background: #fff;">
                    <div style="background-image:url('img/social-work.png'); height:150px; background-size:cover; background-position:center;"></div>
                    <div style="padding: 15px;">
                        <h5 style="color:#8E24AA; margin-bottom:5px;"><?php echo _pt('yoga_day_title'); ?></h5>
                        <p style="font-size:11px; color:#555;"><?php echo _pt('yoga_day_desc'); ?></p>
                    </div>
                </div>
                
                <div style="border: 1px solid #eee; border-radius: 8px; overflow:hidden; background: #fff;">
                    <div style="background-image:url('img/social-work.png'); height:150px; background-size:cover; background-position:center;"></div>
                    <div style="padding: 15px;">
                        <h5 style="color:#8E24AA; margin-bottom:5px;"><?php echo _pt('tree_plantation_title'); ?></h5>
                        <p style="font-size:11px; color:#555;"><?php echo _pt('tree_plantation_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Volunteer Details -->
            <div style="background-color: #f3e5f5; padding: 20px; border-radius: var(--border-radius-md); border-left: 5px solid #8E24AA; margin-bottom: 25px;">
                <h4 style="color:#8E24AA; margin-bottom: 8px;"><?php echo _pt('join_vol_title'); ?></h4>
                <p style="font-size:13px;"><?php echo _pt('join_vol_desc'); ?></p>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h3 style="margin-bottom: 15px; color: #8E24AA;"><?php echo __t('faq'); ?></h3>
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

        <!-- Sidebar Volunteer Registration Form -->
        <div>
            <div class="widget-card" style="border-left: 4px solid #8E24AA; position: sticky; top: 90px;">
                <div class="form-title" style="color: #8E24AA; border-left-color: #8E24AA;"><?php echo __t('volunteer_form'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="volunteer">
                    
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
                        <label class="form-label"><?php echo _pt('select_initiative'); ?></label>
                        <select name="initiative" class="form-control">
                            <option value="Tree Plantation Campaign"><?php echo _pt('opt_tree'); ?></option>
                            <option value="Women Health Awareness"><?php echo _pt('opt_wellness'); ?></option>
                            <option value="Rural Education Support"><?php echo _pt('opt_education'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo _pt('remarks_exp'); ?></label>
                        <textarea name="message" class="form-control" rows="3" placeholder="<?php echo __t('placeholder_message'); ?>"></textarea>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="vol_privacy_check" style="margin-top: 4px;">
                        <label for="vol_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="background: linear-gradient(135deg, #8E24AA, #6A1B9A);"><?php echo __t('submit'); ?></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('SocialWork'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
