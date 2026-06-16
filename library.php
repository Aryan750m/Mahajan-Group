<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_desc' => 'ब्रोशर, वेलनेस मार्गदर्शक तत्त्वे, निरोगी पाककृती आणि व्हिडिओ संदर्भ',
        'section_title' => 'वेलनेस डिजिटल लायब्ररी',
        'section_desc' => 'आमच्या रिसोर्स हबमध्ये आपले स्वागत आहे. येथे तुम्ही अधिकृत प्रकल्प दस्तऐवज डाउनलोड करू शकता, गौरी महाजन यांनी संकलित केलेली तंदुरुस्तीची मार्गदर्शक तत्त्वे वाचू शकता आणि तुमच्या दैनंदिन योगाभ्यासाला पूरक असणाऱ्या पौष्टिक शाकाहारी पाककृती पाहू शकता.',
        'downloads_title' => '१. उपलब्ध डाउनलोड्स',
        'pdf1_title' => 'वनलाईफ वेलनेस रिट्रीट फ्लायर',
        'pdf1_desc' => 'पीडीएफ (PDF) स्वरूप (75 KB) — तपशील आणि वेळापत्रक',
        'pdf2_title' => 'महाजन कॉर्पोरेट तपशील',
        'pdf2_desc' => 'पीडीएफ (PDF) स्वरूप (55 KB) — सेवा आवश्यकता',
        'download_btn' => 'डाउनलोड',
        'videos_title' => '२. शिफारस केलेले व्हिडिओ आणि मीडिया',
        'video1_title' => 'दैनंदिन ऊर्जेसाठी प्राथमिक योग',
        'video1_desc' => 'कालावधी: १५ मिनिटे — नवशिक्यांसाठी उपयुक्त',
        'video2_title' => 'झटपट निरोगी सॅलड पाककृती',
        'video2_desc' => 'कालावधी: ८ मिनिटे — वजन कमी करण्यासाठी ३ चवदार आहार',
        'sidebar_text' => 'काही विशिष्ट शोधत आहात? आम्हाला एक चौकशी पाठवा आणि आम्ही तुम्हाला आवश्यक दस्तऐवज उपलब्ध करून देऊ.',
        'contact_desk_btn' => 'संपर्क कक्ष'
    ],
    'hi' => [
        'banner_desc' => 'ब्रोशर, वेलनेस दिशानिर्देश, स्वस्थ रेसिपी और वीडियो संदर्भ',
        'section_title' => 'वेलनेस डिजिटल लाइब्रेरी',
        'section_desc' => 'हमारे संसाधन केंद्र (Resource Hub) में आपका स्वागत है। यहाँ आप आधिकारिक परियोजना दस्तावेज डाउनलोड कर सकते हैं, गौरी महाजन द्वारा संकलित फिटनेस दिशानिर्देश पढ़ सकते हैं, और पौष्टिक शाकाहारी व्यंजनों की जांच कर सकते हैं जो आपकी दैनिक योग दिनचर्या के पूरक हैं।',
        'downloads_title' => '१. उपलब्ध डाउनलोड',
        'pdf1_title' => 'वनलाइफ वेलनेस रिट्रीट फ्लायर',
        'pdf1_desc' => 'पीडीएफ (PDF) प्रारूप (75 KB) — विवरण और समय रेखा',
        'pdf2_title' => 'महाजन कॉर्पोरेट विशिष्टताएँ',
        'pdf2_desc' => 'पीडीएफ (PDF) प्रारूप (55 KB) — सेवा आवश्यकताएँ',
        'download_btn' => 'डाउनलोड',
        'videos_title' => '२. अनुशंसित वीडियो और मीडिया',
        'video1_title' => 'दैनिक ऊर्जा के लिए बुनियादी योग',
        'video1_desc' => 'अवधि: १५ मिनट — शुरुआती लोगों का स्वागत है',
        'video2_title' => 'झटपट स्वस्थ सलाद रेसिपी',
        'video2_desc' => 'अवधि: ८ मिनट — वजन घटाने के लिए ३ स्वादिष्ट भोजन',
        'sidebar_text' => 'कुछ विशिष्ट खोज रहे हैं? हमें एक पूछताछ भेजें और हम आपको कस्टम संसाधन फाइलों के साथ वापस संपर्क करेंगे।',
        'contact_desk_btn' => 'संपर्क डेस्क'
    ],
    'en' => [
        'banner_desc' => 'Brochures, Wellness Guidelines, Healthy Recipes, and Video References',
        'section_title' => 'Wellness Digital Library',
        'section_desc' => 'Welcome to our resource hub. Here you can download official project documents, read fitness guidelines compiled by Gauri Mahajan, and check nutritious vegetarian recipes that complement your daily yoga routines.',
        'downloads_title' => '1. Available Downloads',
        'pdf1_title' => 'OneLife Wellness Retreat Flyer',
        'pdf1_desc' => 'PDF format (75 KB) — Details & Timelines',
        'pdf2_title' => 'Mahajan Corporate Specifications',
        'pdf2_desc' => 'PDF format (55 KB) — Service Requirements',
        'download_btn' => 'Download',
        'videos_title' => '2. Recommended Videos & Media',
        'video1_title' => 'Basic Yoga for Daily Energy',
        'video1_desc' => 'Duration: 15 Mins — Beginners welcome',
        'video2_title' => 'Quick Healthy Salads recipes',
        'video2_desc' => 'Duration: 8 Mins — 3 tasty weight-loss meals',
        'sidebar_text' => 'Looking for something specific? Drop us a query and we will get back to you with the custom resource files.',
        'contact_desk_btn' => 'Contact Desk'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner -->
    <div class="hero-banner" style="background: linear-gradient(135deg, var(--primary-blue), var(--teal));">
        <h2>📚 <?php echo __t('library'); ?> & Resources</h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: var(--primary-blue); border-bottom: 2px solid var(--primary-blue); padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 25px;"><?php echo _pt('section_desc'); ?></p>
            
            <!-- Downloadable items list -->
            <h4 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('downloads_title'); ?></h4>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:15px; margin-bottom: 30px;">
                <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <h5 style="color:var(--primary-blue);"><?php echo _pt('pdf1_title'); ?></h5>
                        <p style="font-size:11px; color:#666;"><?php echo _pt('pdf1_desc'); ?></p>
                    </div>
                    <a href="HOW TO web DISPLY 01.pdf" download class="btn-primary" style="width:auto; padding: 6px 12px; font-size:11px;"><?php echo _pt('download_btn'); ?></a>
                </div>
                
                <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <h5 style="color:var(--primary-blue);"><?php echo _pt('pdf2_title'); ?></h5>
                        <p style="font-size:11px; color:#666;"><?php echo _pt('pdf2_desc'); ?></p>
                    </div>
                    <a href="Mahajan Website Requirement Specification.pdf" download class="btn-primary" style="width:auto; padding: 6px 12px; font-size:11px;"><?php echo _pt('download_btn'); ?></a>
                </div>
            </div>

            <!-- Health Articles / Videos references -->
            <h4 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('videos_title'); ?></h4>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom: 20px;">
                <div style="border:1px solid #eee; border-radius:8px; overflow:hidden;">
                    <div style="background:#000; height:150px; display:flex; justify-content:center; align-items:center; position:relative; background-image:url('img/yoga.png'); background-size:cover;">
                        <div style="background:rgba(0,0,0,0.5); width:100%; height:100%; display:flex; justify-content:center; align-items:center; position:absolute;">
                            <span style="font-size:45px; color:white; cursor:pointer;">▶</span>
                        </div>
                    </div>
                    <div style="padding:12px;">
                        <h5 style="color:var(--teal);"><?php echo _pt('video1_title'); ?></h5>
                        <p style="font-size:11px; color:#666;"><?php echo _pt('video1_desc'); ?></p>
                    </div>
                </div>
                
                <div style="border:1px solid #eee; border-radius:8px; overflow:hidden;">
                    <div style="background:#000; height:150px; display:flex; justify-content:center; align-items:center; position:relative; background-image:url('img/foods.png'); background-size:cover;">
                        <div style="background:rgba(0,0,0,0.5); width:100%; height:100%; display:flex; justify-content:center; align-items:center; position:absolute;">
                            <span style="font-size:45px; color:white; cursor:pointer;">▶</span>
                        </div>
                    </div>
                    <div style="padding:12px;">
                        <h5 style="color:#FF8F00;"><?php echo _pt('video2_title'); ?></h5>
                        <p style="font-size:11px; color:#666;"><?php echo _pt('video2_desc'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar inquiry info -->
        <div>
            <div class="widget-card" style="border-left: 4px solid var(--primary-blue); position: sticky; top: 90px;">
                <div class="form-title" style="color: var(--primary-blue); border-left-color: var(--primary-blue);"><?php echo __t('inquiry_form'); ?></div>
                <p style="font-size: 13px; color:#666; margin-bottom: 15px;"><?php echo _pt('sidebar_text'); ?></p>
                <a href="contact.php" class="btn-primary" style="display:block; text-align:center;"><?php echo _pt('contact_desk_btn'); ?></a>
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
