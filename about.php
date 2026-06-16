<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_desc' => 'सौ. गौरी शैलेश महाजन — वनलाईफ फिटनेस सेंटरच्या संचालिका आणि समाजसेविका',
        'section_title' => 'सौ. गौरी शैलेश महाजन यांच्याबद्दल',
        'section_desc1' => 'सौ. गौरी शैलेश महाजन या बदलापूर, ठाणे जिल्ह्यातील एक नामांकित फिटनेस तज्ञ, योग साधक, उद्योजक आणि समाजसेविका आहेत. त्या <strong>वनलाईफ फिटनेस सेंटर</strong>च्या संस्थापिका आणि मुख्य प्रशिक्षिका आहेत, जे केवळ महिलांच्या शारीरिक तंदुरुस्ती, झुम्बा आणि समग्र आरोग्य साधनांसाठी समर्पित आहे.',
        'section_desc2' => 'तंदुरुस्ती प्रशिक्षणाव्यतिरिक्त, गौरी महाजन रिअल इस्टेट गुंतवणूक सल्लागार, सामाजिक विकास योजना आणि महाजन चॅरिटेबल ट्रस्ट (एनजीओ) यासारख्या विविध क्षेत्रांचे नेतृत्व करतात. नैसर्गिक आरोग्य साधनांना सक्रिय सामाजिक सुधारांच्या कार्यक्रमांशी जोडणे हे त्यांचे ध्येय आहे.',
        'portfolios_title' => 'प्रमुख पोर्टफोलिओ आणि उपक्रम',
        'port1' => '<strong>वनलाईफ फिटनेस सेंटर:</strong> संवेग रेसिडेन्सी, बदलापूर येथे खास महिलांसाठी योग आणि झुम्बाचे वातानुकूलित (AC) वर्ग पुरवणे.',
        'port2' => '<strong>वेलनेस रिट्रीट्स (सोहळा):</strong> लोकांना दैनंदिन तणावापासून दूर जाऊन टवटवीत होण्यास मदत करण्यासाठी निसर्गरम्य ठिकाणी निवासी २-दिवसीय वेलनेस रिट्रीट्सचे आयोजन करणे.',
        'port3' => '<strong>रिअल इस्टेट आणि मालमत्ता गुंतवणूक:</strong> संयुक्त भागीदारी (JV) प्रकल्पांमध्ये उच्च-परतावा मिळवून देणारी भागीदारी आणि ग्राहकांना मार्गदर्शन करणे.',
        'port4' => '<strong>कल्याण आणि एनजीओ उपक्रम:</strong> ग्रामीण शाळांमधील मुलांना शिक्षित करणे आणि आवश्यक वैद्यकीय व शैक्षणिक साहित्याचे वाटप करणे.',
        'vision_title' => 'आमची दृष्टी आणि मूल्ये',
        'vision_desc' => '"विश्वास आणि अनुभव सिद्धता हिच आमची संपत्ती" (Trust and experience/proof is our wealth). आमचा असा विश्वास आहे की ग्राहकांसोबतचे दीर्घकालीन संबंध पारदर्शकता, गुणवत्ता आणि परस्पर प्रगतीवर निर्माण होतात.',
        'contact_info' => 'संपर्क माहिती',
        'phone' => 'फोन:',
        'email' => 'ईमेल:',
        'location' => 'पत्ता:',
        'partner_desc' => 'आकर्षक संदर्भ कमिशन मिळवण्यासाठी रिअल इस्टेट आणि वेलनेस कार्यक्रमांमध्ये आमच्यासोबत भागीदारी करा.',
        'partner_form_btn' => 'नोंदणी अर्ज'
    ],
    'hi' => [
        'banner_desc' => 'श्रीमती गौरी शैलेश महाजन — वनलाइफ फिटनेस सेंटर की निदेशिका और परोपकारी',
        'section_title' => 'श्रीमती गौरी शैलेश महाजन के बारे में',
        'section_desc1' => 'श्रीमती गौरी शैलेश महाजन बदलापुर, ठाणे जिले की एक प्रसिद्ध फिटनेस उत्साही, योग साधक, उद्यमी और सामाजिक कार्यकर्ता हैं। वह <strong>वनलाइफ फिटनेस सेंटर</strong> की संस्थापक और मुख्य प्रशिक्षिका हैं, जो विशेष रूप से केवल महिलाओं की शारीरिक फिटनेस, ज़ुम्बा और समग्र स्वास्थ्य प्रथाओं के लिए समर्पित है।',
        'section_desc2' => 'फिटनेस प्रशिक्षण से परे, गौरी महाजन रियल एस्टेट निवेश सलाहकार, सामाजिक विकास योजनाओं और महाजन चैरिटेबल ट्रस्ट (एनजीओ) जैसे विभिन्न क्षेत्रों का नेतृत्व करती हैं। उनका मिशन प्राकृतिक कल्याण प्रथाओं को सक्रिय सामाजिक सुधार कार्यक्रमों के साथ जोड़ना है।',
        'portfolios_title' => 'प्रमुख पोर्टफोलियो और गतिविधियाँ',
        'port1' => '<strong>वनलाइफ फिटनेस सेंटर:</strong> संवेग रेजीडेंसी, बदलापुर में विशेष रूप से महिलाओं के लिए योग और ज़ुम्बा की वातानुकूलित (AC) कक्षाएं प्रदान करना।',
        'port2' => '<strong>वेलनेस रिट्रीट्स (सोहला):</strong> लोगों को दैनिक तनाव से मुक्त होने और तरोताजा होने में मदद करने के लिए सुंदर स्थानों में आवासीय २ दिवसीय कल्याण शिविरों का आयोजन करना।',
        'port3' => '<strong>रियल एस्टेट और संपत्ति निवेश:</strong> संयुक्त उद्यम (JV) विकास में उच्च-लाभ वाली संपत्ति साझेदारी और ग्राहकों का मार्गदर्शन करना।',
        'port4' => '<strong>कल्याण और एनजीओ पहल:</strong> ग्रामीण स्कूलों में बच्चों को शिक्षित करना और आवश्यक चिकित्सा व शैक्षणिक सामग्री का वितरण करना।',
        'vision_title' => 'हमारी दृष्टि और मूल्य',
        'vision_desc' => '"विश्वास आणि अनुभव सिद्धता हिच आमची संपत्ती" (Trust and experience/proof is our wealth). हमारा मानना है कि ग्राहकों के साथ दीर्घकालिक संबंध पारदर्शिता, गुणवत्ता और पारस्परिक प्रगति की नींव पर बनते हैं।',
        'contact_info' => 'संपर्क जानकारी',
        'phone' => 'फोन:',
        'email' => 'ईमेल:',
        'location' => 'पता:',
        'partner_desc' => 'आकर्षक रेफ़रल कमीशन अर्जित करने के लिए रियल एस्टेट और वेलनेस कार्यक्रमों में हमारे साथ साझेदारी करें।',
        'partner_form_btn' => 'पंजीकरण फॉर्म'
    ],
    'en' => [
        'banner_desc' => 'Mrs. Gauri Shailesh Mahajan — Director of OneLife Fitness Center & Philanthropist',
        'section_title' => 'About Mrs. Gauri Shailesh Mahajan',
        'section_desc1' => 'Mrs. Gauri Shailesh Mahajan is a renowned fitness enthusiast, yoga practitioner, entrepreneur, and social worker based in Badlapur, Thane district. She is the founder and principal instructor at OneLife Fitness Center, which is dedicated to ladies-only physical fitness, Zumba, and holistic health practices.',
        'section_desc2' => 'Beyond fitness training, Gauri Mahajan leads a multifaceted portfolio of organizations spanning real estate investment counsel, social development schemes, and the Mahajan Charity Trust (NGO). Her mission is to combine natural wellness practices with active social improvement programs.',
        'portfolios_title' => 'Key Portfolios & Activities',
        'port1' => 'OneLife Fitness Center: Providing AC classes for Yoga and Zumba exclusively for women at Sanveg Residency, Badlapur.',
        'port2' => 'Wellness Retreats (सोहळा): Organizing residential 2-day wellness retreats in scenic spots to help individuals disconnect and rejuvenate.',
        'port3' => 'Real Estate & Property Investment: Facilitating high-yield property partnerships and customer guidance in joint venture developments.',
        'port4' => 'Welfare & NGO Initiatives: Educating children in rural schools and distributing essential medical and educational packages.',
        'vision_title' => 'Our Vision & Values',
        'vision_desc' => '"विश्वास आणि अनुभव सिद्धता हिच आमची संपत्ती" (Trust and experience/proof is our wealth). We believe that long-term client relations are forged on transparency, quality, and mutual progress.',
        'contact_info' => 'Contact Info',
        'phone' => 'Phone:',
        'email' => 'Email:',
        'location' => 'Location:',
        'partner_desc' => 'Partner with us for real estate and wellness programs to earn lucrative referral commissions.',
        'partner_form_btn' => 'Partner Form'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner -->
    <div class="hero-banner">
        <h2><?php echo __t('profile'); ?></h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; border-bottom: 2px solid var(--gold); padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 15px;"><?php echo _pt('section_desc1'); ?></p>
            
            <p style="margin-bottom: 20px;"><?php echo _pt('section_desc2'); ?></p>
            
            <h4 style="margin-bottom: 10px; color: var(--primary-blue);"><?php echo _pt('portfolios_title'); ?></h4>
            <ul style="margin-left: 20px; margin-bottom: 25px;">
                <li style="margin-bottom: 8px;"><?php echo _pt('port1'); ?></li>
                <li style="margin-bottom: 8px;"><?php echo _pt('port2'); ?></li>
                <li style="margin-bottom: 8px;"><?php echo _pt('port3'); ?></li>
                <li style="margin-bottom: 8px;"><?php echo _pt('port4'); ?></li>
            </ul>

            <h4 style="margin-bottom: 10px; color: var(--primary-blue);"><?php echo _pt('vision_title'); ?></h4>
            <blockquote style="border-left: 4px solid var(--teal); padding-left: 15px; font-style: italic; margin-bottom: 20px; color: #555;">
                <?php echo _pt('vision_desc'); ?>
            </blockquote>
        </div>

        <!-- Sidebar / Contact Quick links -->
        <div>
            <div class="widget-card" style="margin-bottom: 25px; border-left: 4px solid var(--primary-blue);">
                <h4 style="margin-bottom: 10px;"><?php echo _pt('contact_info'); ?></h4>
                <p style="font-size: 13px; margin-bottom: 8px;"><strong><?php echo _pt('phone'); ?></strong> +91 <?php echo CONTACT_PHONE; ?></p>
                <p style="font-size: 13px; margin-bottom: 8px;"><strong><?php echo _pt('email'); ?></strong> <?php echo CONTACT_EMAIL; ?></p>
                <p style="font-size: 13px; margin-bottom: 15px;"><strong><?php echo _pt('location'); ?></strong> <?php echo CONTACT_ADDRESS; ?></p>
                <a href="contact.php" class="btn-primary" style="display:block; text-align:center;"><?php echo __t('learn_more'); ?></a>
            </div>
            
            <div class="widget-card" style="border-left: 4px solid var(--gold); text-align: center;">
                <span style="font-size: 30px;">💼</span>
                <h4 style="margin: 10px 0;"><?php echo __t('channel_partner'); ?></h4>
                <p style="font-size: 12px; color: #666; margin-bottom: 15px;"><?php echo _pt('partner_desc'); ?></p>
                <a href="channel-partner.php" class="btn-primary" style="background: linear-gradient(135deg, var(--gold), #bfa12b);"><?php echo _pt('partner_form_btn'); ?></a>
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
