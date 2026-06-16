<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_desc' => 'महाजन कॉर्पोरेट डेटा संरक्षण आणि गोपनीयता मार्गदर्शक तत्त्वे',
        'h1' => '१. माहितीचे संकलन',
        'p1' => 'तुम्ही आमच्या नोंदणी आणि चौकशी फॉर्मद्वारे स्वेच्छेने सादर केलेली माहिती आम्ही गोळा करतो, ज्यामध्ये तुमचे पूर्ण नाव, दूरध्वनी क्रमांक, ईमेल, शहर आणि अपलोड केलेल्या फायलींचा समावेश आहे. ही माहिती तुम्हाला विनंती केलेल्या सेवांविषयी संपर्क साधण्यासाठी आमच्या स्थानिक डेटाबेस स्टोरेजमध्ये सुरक्षित ठेवली जाते.',
        'h2' => '२. माहितीचा वापर',
        'p2_intro' => 'तुमचे संपर्क तपशील केवळ खालील गोष्टींसाठी वापरले जातात:',
        'li1' => 'तुमच्या वर्गाची किंवा वेलनेस रिट्रीट नोंदणीची पडताळणी करणे.',
        'li2' => 'रिअल इस्टेट प्रकल्पांसाठी ब्रोशर लिंक्स आणि लेआउट तपशील पाठवणे.',
        'li3' => 'स्वयंसेवक नोंदणीची पुष्टी करणे आणि कार्यक्रम अद्यतने सामायिक करणे.',
        'li4' => 'नोंदणीकृत चॅनेल भागीदारांसाठी संदर्भ लेजर आणि कमिशन व्यवस्थापित करणे.',
        'h3' => '३. डेटा संरक्षण आणि सामायिकरण',
        'p3' => 'आम्ही तुमच्या विश्वासाची कदर करतो. आम्ही तुमची वैयक्तिक संपर्क माहिती कोणत्याही तृतीय-पक्षीय विपणन एजन्सीला विकत नाही, भाड्याने देत नाही किंवा लीक करत नाही. सर्व डेटाबेस स्टोरेज संकेतशब्द-संरक्षित आहे आणि केवळ सौ. गौरी महाजन यांच्या प्रशासकीय डेस्कद्वारेच पाहिले जाऊ शकते.',
        'h4' => '४. गोपनीयता धोरणातील बदल',
        'p4' => 'आम्ही वेळोवेळी या दस्तऐवजात बदल करू शकतो. आमच्या पोर्टलचा पुढील वापर हा प्रदर्शित केलेल्या अटींना तुमची संमती दर्शवतो.'
    ],
    'hi' => [
        'banner_desc' => 'महाजन कॉर्पोरेट डेटा संरक्षण और गोपनीयता दिशानिर्देश',
        'h1' => '१. सूचना संग्रह',
        'p1' => 'हम वह जानकारी एकत्र करते हैं जो आप हमारे पंजीकरण और पूछताछ फॉर्म के माध्यम से स्वेच्छा से प्रस्तुत करते हैं, जिसमें आपका पूरा नाम, टेलीफोन नंबर, ईमेल, शहर और अपलोड की गई फाइलें शामिल हैं। यह जानकारी आपको अनुरोधित सेवाओं के संबंध में संपर्क करने के लिए हमारे स्थानीय डेटाबेस स्टोरेज में सहेजी जाती है।',
        'h2' => '२. सूचना का उपयोग',
        'p2_intro' => 'आपके संपर्क विवरण का उपयोग केवल निम्न के लिए किया जाता है:',
        'li1' => 'आपकी कक्षा या वेलनेस रिट्रीट पंजीकरण को सत्यापित करना।',
        'li2' => 'रियल एस्टेट परियोजनाओं के लिए ब्रोशर लिंक और लेआउट विवरण भेजना।',
        'li3' => 'स्वयंसेवक लिस्टिंग की पुष्टि करना और कार्यक्रम अपडेट साझा करना।',
        'li4' => 'पंजीकृत चैनल भागीदारों के लिए रेफ़रल बहीखाता और कमीशन प्रबंधित करना।',
        'h3' => '३. डेटा सुरक्षा और साझाकरण',
        'p3' => 'हम आपके विश्वास को महत्व देते हैं। हम आपकी व्यक्तिगत संपर्क जानकारी को किसी भी तीसरे पक्ष की विपणन एजेंसियों को बेचते या किराए पर नहीं देते हैं। सभी डेटाबेस पासवर्ड-सुरक्षित हैं और केवल श्रीमती गौरी महाजन के प्रशासनिक डेस्क द्वारा ही एक्सेस किए जा सकते हैं।',
        'h4' => '४. नीति में अद्यतन',
        'p4' => 'हम समय-समय पर इस गोपनीयता दस्तावेज़ में बदलाव कर सकते हैं। हमारे पोर्टल का निरंतर उपयोग प्रदर्शित शर्तों के प्रति सहमति दर्शाता है।'
    ],
    'en' => [
        'banner_desc' => 'Mahajan Corporate Data Protection & Privacy Guidelines',
        'h1' => '1. Information Collection',
        'p1' => 'We collect information that you submit voluntarily via our registration and inquiry forms, including your full name, telephone number, email, city, and files uploaded. This information is saved to our local database storage to contact you regarding requested services.',
        'h2' => '2. Information Use',
        'p2_intro' => 'Your contact details are used solely to:',
        'li1' => 'Verify your class or wellness retreat registrations.',
        'li2' => 'Send brochure links and layout details for real estate projects.',
        'li3' => 'Confirm volunteer listings and share program updates.',
        'li4' => 'Manage referral ledgers and commissions for registered Channel Partners.',
        'h3' => '3. Data Protection & Sharing',
        'p3' => 'We value your trust. We do not sell, lease, or rent your personal contact information to third-party marketing agencies. All dashboard storage is password-protected and accessible only by Mrs. Gauri Mahajan\'s administrative desk.',
        'h4' => '4. Updates to Policy',
        'p4' => 'We may modify this privacy document from time to time. Continued use of our portal implies consent to terms displayed.'
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
        <h2>🔒 <?php echo __t('privacy_policy'); ?></h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Card -->
    <div class="main-content-card" style="margin-bottom: 40px;">
        <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('h1'); ?></h3>
        <p style="margin-bottom: 15px;"><?php echo _pt('p1'); ?></p>
        
        <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('h2'); ?></h3>
        <div style="margin-bottom: 15px;">
            <p style="margin-bottom: 5px;"><?php echo _pt('p2_intro'); ?></p>
            <ul style="margin-left: 20px; margin-bottom: 15px; line-height: 1.8;">
                <li><?php echo _pt('li1'); ?></li>
                <li><?php echo _pt('li2'); ?></li>
                <li><?php echo _pt('li3'); ?></li>
                <li><?php echo _pt('li4'); ?></li>
            </ul>
        </div>
        
        <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('h3'); ?></h3>
        <p style="margin-bottom: 15px;"><?php echo _pt('p3'); ?></p>

        <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('h4'); ?></h3>
        <p><?php echo _pt('p4'); ?></p>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('General'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
