<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_title' => '📄 नियम आणि अटी',
        'banner_desc' => 'महाजन ग्रुप वेब सेवांसाठी वापरकर्ता मार्गदर्शक तत्त्वे आणि सेवा अटी',
        'h1' => '१. अटींशी संमती',
        'p1' => 'या वेबसाईटवर प्रवेश करून, तुम्ही आमच्या वापरकर्त्यांच्या अटींचे आणि भारतातील सर्व लागू स्थानिक नियमांचे पालन करण्यास सहमत आहात. आपण कोणत्याही अटींशी असहमत असल्यास, आपण नेव्हिगेशन थांबवावे अशी विनंती आहे.',
        'h2' => '२. नोंदणी आणि शुल्क',
        'p2' => 'वनलाईफ फिटनेस सेंटरच्या नियमित बॅचेस आणि निवासी वेलनेस रिट्रीट्स (₹३,६००) साठी भरलेले शुल्क बुकिंग अटींच्या अधीन आहे. रिट्रीट प्रस्थानाच्या ७२ तासांपेक्षा कमी वेळेत केलेल्या रद्दबातल विनंत्या परतावा मिळण्यास पात्र नाहीत, परंतु पुढील महिन्यांच्या बॅचेसमध्ये समायोजित केल्या जाऊ शकतात.',
        'h3' => '३. रिअल इस्टेट लिस्टिंग्स',
        'p3' => 'रिअल इस्टेट टॅब अंतर्गत प्रदर्शित केलेले सर्व किमतीचे तपशील, ब्रोशर लेआउट आणि जमिनीची मूल्ये केवळ सूचक आहेत. अधिकृत किंमत पूर्णपणे RERA करारांवर आणि आमच्या कार्यालयात स्वाक्षरी केलेल्या विक्री अटींवर आधारित असेल.',
        'h4' => '४. बौद्धिक संपदा',
        'p4' => 'सर्व ब्रँड ग्राफिक्स, लोगो (वनलाईफ फिटनेस सेंटर, महाजन ग्रुप) आणि छायाचित्र मालमत्ता कॉपीराइट आहेत. साहित्याचा अनधिकृत पुनर्वापर किंवा डुप्लिकेशन सक्त मनाई आहे.'
    ],
    'hi' => [
        'banner_title' => '📄 नियम और शर्तें',
        'banner_desc' => 'महाजन ग्रुप वेब सेवाओं के लिए उपयोगकर्ता दिशानिर्देश और सेवा की शर्तें',
        'h1' => '१. शर्तों के प्रति सहमति',
        'p1' => 'इस वेबसाइट को एक्सेस करके, आप हमारी उपयोगकर्ता शर्तों और भारत में सभी लागू स्थानीय नियमों का पालन करने के लिए सहमत होते हैं। यदि आप किसी भी शर्त से असहमत हैं, तो आपसे अनुरोध है कि नेविगेशन बंद कर दें।',
        'h2' => '२. पंजीकरण और शुल्क',
        'p2' => 'वनलाइफ फिटनेस सेंटर के नियमित बैच और आवासीय वेलनेस रिट्रीट (₹३,६००) के लिए भुगतान किया गया शुल्क बुकिंग शर्तों के अधीन है। रिट्रीट प्रस्थान से ७२ घंटे से कम समय पहले किए गए रद्दीकरण अनुरोध गैर-वापसी योग्य हैं, लेकिन उन्हें अगले महीनों के बैचों में समायोजित किया जा सकता है।',
        'h3' => '३. रियल एस्टेट सूचियाँ',
        'p3' => 'रियल एस्टेट टैब के तहत प्रदर्शित सभी मूल्य विवरण, ब्रोशर लेआउट और भूमि मूल्य सांकेतिक हैं। आधिकारिक मूल्य निर्धारण पूरी तरह से रेरा (RERA) समझौतों और हमारे कार्यालय में हस्ताक्षरित बिक्री शर्तों पर आधारित है।',
        'h4' => '४. बौद्धिक संपदा',
        'p4' => 'सभी ब्रांड ग्राफिक्स, लोगो (वनलाइफ फिटनेस सेंटर, महाजन ग्रुप) और फोटोग्राफिक संपत्तियां कॉपीराइट हैं। सामग्री का अनधिकृत पुन: उपयोग या दोहराव सख्त वर्जित है।'
    ],
    'en' => [
        'banner_title' => '📄 Terms & Conditions',
        'banner_desc' => 'User Guidelines and Terms of Service for Mahajan Group Web Services',
        'h1' => '1. Agreement to Terms',
        'p1' => 'By accessing this website, you agree to comply with our user terms and all applicable local rules in India. If you disagree with any terms, you are requested to cease navigation.',
        'h2' => '2. Registrations & Fees',
        'p2' => 'Fees paid for OneLife Fitness Center regular batches and residential wellness retreats (₹3,600) are subject to booking constraints. Cancellations requested less than 72 hours before the retreat departure are non-refundable but can be adjusted to subsequent months\' batches.',
        'h3' => '3. Real Estate Listings',
        'p3' => 'All pricing details, brochure layouts, and land values displayed under the real estate tab are indicative. Official pricing is based solely on RERA agreements and sales terms signed at our office.',
        'h4' => '4. Intellectual Property',
        'p4' => 'All brand graphics, logos (OneLife Fitness Center, Mahajan Group), and photographic assets are copyrighted. Unauthorized reuse or duplication of materials is strictly prohibited.'
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
        <h2><?php echo _pt('banner_title'); ?></h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Card -->
    <div class="main-content-card" style="margin-bottom: 40px;">
        <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('h1'); ?></h3>
        <p style="margin-bottom: 15px;"><?php echo _pt('p1'); ?></p>
        
        <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('h2'); ?></h3>
        <p style="margin-bottom: 15px;"><?php echo _pt('p2'); ?></p>
        
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
