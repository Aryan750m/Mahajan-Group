<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'title' => 'रियल इस्टेट गुंतवणूकी',
        'subtitle' => 'प्रीमियम निवासी लिस्टिंग्स आणि धोरणात्मक मालमत्ता सल्लागार',
        'main_title' => 'प्रमुख प्रकल्प आणि संयुक्त उपक्रम (JV)',
        'main_desc' => 'महाजन ग्रुप ठाणे जिल्ह्यात, विशेषतः बदलापूर, कल्याण आणि अंबरनाथ परिसरामध्ये संयुक्त उपक्रम (JVs), भूसंपादन आणि प्रीमियम निवासी विक्री सुलभ करण्यात माहिर आहे. महिंद्रा लाईफस्पेसेस सारख्या उच्च-स्तरीय विकासकांसोबत भागीदारी करून, आम्ही अत्याधुनिक सोयी-सुविधांसह निवडक, महारेरा (RERA) मंजूर लक्झरी मालमत्ता ऑफर करतो.',
        'properties_title' => 'सुरू असलेले प्रकल्प आणि संधी',
        'card1_title' => 'महाजन रेसिडेन्सी',
        'card1_sub' => 'बदलापूर पूर्व — १ आणि २ BHK प्रीमियम अपार्टमेंट्स',
        'card1_desc' => 'अति-आधुनिक बांधकाम, सुंदर बगीचे, २४/७ सुरक्षा व्यवस्था. लवकरच ताबा मिळण्यास सुरवात.',
        'card1_price' => '₹२८ लाख पासून सुरू*',
        'card2_title' => 'ग्रीन मेडोज जेव्ही',
        'card2_sub' => 'अंबरनाथ — एनए व्हिला प्लॉट्स आणि खुली जमीन',
        'card2_desc' => 'सेकंड होम किंवा दीर्घकालीन गुंतवणुकीसाठी उत्तम स्थान, हायवेच्या जवळ.',
        'card2_price' => '₹१५ लाख पासून सुरू*',
        'brochure_title' => '📁 चॅनल पार्टनर - माहिती पुस्तिका',
        'brochure_desc' => 'व्हॉट्सॲपवर खर्चाचा तपशील कॅटलॉग स्वयंचलितपणे मिळवण्यासाठी खालील फॉर्म भरा.',
        'faq_q1' => 'Q: तुमचे प्रकल्प महारेरा (RERA) नोंदणीकृत आहेत का?',
        'faq_a1' => 'होय, आमच्या पोर्टलवर दाखवलेले सर्व निवासी आराखडे आणि जेव्ही इमारती स्पष्ट जमिनीच्या कागदपत्रांसह पूर्णपणे महारेरा (RERA) मंजूर आहेत.',
        'faq_q2' => 'Q: तुम्ही गृहकर्जासाठी मदत करू शकता का?',
        'faq_a2' => 'नक्कीच. आम्ही स्पर्धात्मक दरांवर जलद, त्रासमुक्त गृहकर्ज मंजुरी प्रदान करण्यासाठी प्रमुख राष्ट्रीय बँकांशी (SBI, HDFC, ICICI, इत्यादी) करार केला आहे.',
        'sidebar_title' => 'मालमत्ता चौकशी अर्ज',
        'req_details' => 'आवश्यकतेचा तपशील (Requirement Details)',
        'opt_visit' => 'साईट भेट बुक करा (Site Visit Request)',
        'opt_jv' => 'जेव्ही / गुंतवणूक संधी',
        'opt_buy' => 'रेडी टू मूव्ह घरे (Ready To Move)'
    ],
    'hi' => [
        'title' => 'रियल एस्टेट निवेश',
        'subtitle' => 'प्रीमियम आवासीय लिस्टिंग्स और रणनीतिक संपत्ति परामर्श',
        'main_title' => 'प्रमुख परियोजनाएं और संयुक्त उद्यम (JV)',
        'main_desc' => 'महाजन ग्रुप ठाणे जिले में, विशेष रूप से बदलापुर, कल्याण और अंबरनाथ के आसपास संयुक्त उद्यमों, भूमि अधिग्रहण और प्रीमियम आवासीय बिक्री को सुविधाजनक बनाने में माहिर है। महिंद्रा लाइफस्पेसेस जैसे शीर्ष-स्तरीय डेवलपर्स के साथ साझेदारी करके, हम अत्याधुनिक सुविधाओं के साथ चुनिंदा, रेरा (RERA) अनुमोदित लक्जरी संपत्तियों की पेशकश करते हैं।',
        'properties_title' => 'चल रही संपत्तियां और अवसर',
        'card1_title' => 'महाजन रेजीडेंसी',
        'card1_sub' => 'बदलापुर पूर्व — १ और २ BHK प्रीमियम अपार्टमेंट्स',
        'card1_desc' => 'अति-आधुनिक निर्माण, सुंदर बगीचे, २४/७ सुरक्षा व्यवस्था। जल्द ही पजेशन (ताबा) शुरू।',
        'card1_price' => '₹२८ लाख से शुरू*',
        'card2_title' => 'ग्रीन मीडोज जेवी',
        'card2_sub' => 'अंबरनाथ — एनए विला प्लॉट्स और खुली जमीन',
        'card2_desc' => 'सेकंड होम या दीर्घकालिक निवेश के लिए सबसे अच्छा स्थान, हाईवे के नजदीक।',
        'card2_price' => '₹१५ लाख से शुरू*',
        'brochure_title' => '📁 चैनल पार्टनर - विवरणिका (Brochure)',
        'brochure_desc' => 'व्हाट्सएप पर लागत का विवरण कैटलॉग स्वचालित रूप से प्राप्त करने के लिए नीचे अपना विवरण दर्ज करें।',
        'faq_q1' => 'Q: क्या आपकी परियोजनाएं रेरा (RERA) पंजीकृत हैं?',
        'faq_a1' => 'हाँ, हमारे पोर्टल पर दिखाए गए सभी आवासीय लेआउट और जेवी भवन स्पष्ट भूमि दस्तावेजों के साथ पूरी तरह से रेरा स्वीकृत हैं।',
        'faq_q2' => 'Q: क्या आप गृह ऋण में सहायता कर सकते हैं?',
        'faq_a2' => 'बिल्कुल। हमने प्रतिस्पर्धी दरों पर त्वरित, परेशानी मुक्त गृह ऋण स्वीकृति प्रदान करने के लिए प्रमुख राष्ट्रीय बैंकों (SBI, HDFC, ICICI, आदि) के साथ करार किया है।',
        'sidebar_title' => 'संपत्ति पूछताछ फॉर्म',
        'req_details' => 'आवश्यकता विवरण (Requirement Details)',
        'opt_visit' => 'साइट विज़िट बुक करें (Site Visit Request)',
        'opt_jv' => 'जेवी / निवेश के अवसर',
        'opt_buy' => 'रेडी टू मूव घर (Ready To Move)'
    ],
    'en' => [
        'title' => 'Real Estate Investments',
        'subtitle' => 'Premium Residential Listings & Strategic Property Consultation',
        'main_title' => 'Prime Projects & Joint Ventures',
        'main_desc' => 'Mahajan Group specializes in facilitating joint ventures, land acquisitions, and premium residential sales in Thane district, particularly around Badlapur, Kalyan, and Ambernath. Partnering with top-tier developers like Mahindra Lifespaces, we offer curated, RERA-approved luxury properties with state-of-the-art amenities.',
        'properties_title' => 'Ongoing Properties & Opportunities',
        'card1_title' => 'Mahajan Residency',
        'card1_sub' => 'Badlapur East — 1 & 2 BHK Premium Apartments',
        'card1_desc' => 'Ultra-modern construction, landscape gardens, 24/7 security. Ready to move soon.',
        'card1_price' => 'Starting from ₹28 Lakhs*',
        'card2_title' => 'Green Meadows JVs',
        'card2_sub' => 'Ambernath — NA Villa Plots & Open Land',
        'card2_desc' => 'Perfect location for second homes or long term appreciation, close to highways.',
        'card2_price' => 'Starting from ₹15 Lakhs*',
        'brochure_title' => '📁 Channel Partner - Brochure',
        'brochure_desc' => 'Enter your details below to receive the cost breakdown catalog automatically on WhatsApp.',
        'faq_q1' => 'Q: Are your projects RERA registered?',
        'faq_a1' => 'Yes, all residential layouts and JV buildings showcased on our portal are fully RERA approved with clear land title documentation.',
        'faq_q2' => 'Q: Can you assist with home loans?',
        'faq_a2' => 'Absolutely. We have tied up with major national banks (SBI, HDFC, ICICI, etc.) to provide quick, hassle-free home loan approvals at competitive rates.',
        'sidebar_title' => 'Property Inquiry Form',
        'req_details' => 'Requirement Details',
        'opt_visit' => 'Book a Site Visit (Site Visit Request)',
        'opt_jv' => 'JV / Investment Opportunities',
        'opt_buy' => 'Ready To Move Homes'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with Real Estate Theme Color -->
    <div class="hero-banner" style="background: linear-gradient(135deg, var(--primary-blue), #1565C0);">
        <h2>🏢 <?php echo _pt('title'); ?></h2>
        <p><?php echo _pt('subtitle'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: var(--primary-blue); border-bottom: 2px solid var(--primary-blue); padding-bottom: 8px;"><?php echo _pt('main_title'); ?></h3>
            <p style="margin-bottom: 20px;"><?php echo _pt('main_desc'); ?></p>
            
            <!-- Project Cards -->
            <h4 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('properties_title'); ?></h4>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                <div style="border: 1px solid #eee; border-radius: 8px; overflow:hidden; background: #fff;">
                    <div style="background-image:url('img/real-estate.png'); height:150px; background-size:cover; background-position:center;"></div>
                    <div style="padding: 15px;">
                        <h5 style="color:var(--primary-blue); margin-bottom:5px;"><?php echo _pt('card1_title'); ?></h5>
                        <p style="font-size:12px; color:#666; margin-bottom:10px;"><?php echo _pt('card1_sub'); ?></p>
                        <p style="font-size:11px; margin-bottom:15px;"><?php echo _pt('card1_desc'); ?></p>
                        <span style="font-size: 13px; font-weight:700; color:var(--gold);"><?php echo _pt('card1_price'); ?></span>
                    </div>
                </div>
                
                <div style="border: 1px solid #eee; border-radius: 8px; overflow:hidden; background: #fff;">
                    <div style="background-image:url('img/real-estate.png'); height:150px; background-size:cover; background-position:center;"></div>
                    <div style="padding: 15px;">
                        <h5 style="color:var(--primary-blue); margin-bottom:5px;"><?php echo _pt('card2_title'); ?></h5>
                        <p style="font-size:12px; color:#666; margin-bottom:10px;"><?php echo _pt('card2_sub'); ?></p>
                        <p style="font-size:11px; margin-bottom:15px;"><?php echo _pt('card2_desc'); ?></p>
                        <span style="font-size: 13px; font-weight:700; color:var(--gold);"><?php echo _pt('card2_price'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Brochure Download Feature -->
            <div style="background-color: #eef2f5; padding: 20px; border-radius: var(--border-radius-md); border-left: 5px solid var(--gold); margin-bottom: 30px;">
                <h4 style="margin-bottom: 8px; color: var(--primary-blue);"><?php echo _pt('brochure_title'); ?></h4>
                <p style="font-size: 13px; margin-bottom: 15px;"><?php echo _pt('brochure_desc'); ?></p>
                <form action="submit_inquiry.php" method="POST" onsubmit="return validateForm(this)" style="display:flex; gap:10px;">
                    <input type="hidden" name="form_type" value="inquiry">
                    <input type="hidden" name="service" value="RealEstate">
                    <input type="hidden" name="message" value="Requested property brochure download.">
                    <input type="text" name="name" placeholder="<?php echo __t('fullname'); ?>" class="form-control" style="flex:1;" required>
                    <input type="tel" name="phone" placeholder="<?php echo __t('mobile'); ?>" class="form-control" style="flex:1;" required pattern="[0-9]{10}">
                    <button type="submit" class="btn-primary" style="width:auto; padding: 10px 20px; white-space:nowrap;"><?php echo __t('submit'); ?></button>
                </form>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h3 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo __t('faq'); ?></h3>
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
            <div class="widget-card" style="border-left: 4px solid var(--primary-blue); position: sticky; top: 90px;">
                <div class="form-title" style="color: var(--primary-blue); border-left-color: var(--primary-blue);"><?php echo _pt('sidebar_title'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="inquiry">
                    <input type="hidden" name="service" value="RealEstate">
                    
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
                        <label class="form-label"><?php echo _pt('req_details'); ?></label>
                        <select name="message" class="form-control">
                            <option value="Schedule Site Visit Request"><?php echo _pt('opt_visit'); ?></option>
                            <option value="Investments Opportunity Inquiry"><?php echo _pt('opt_jv'); ?></option>
                            <option value="Looking to Buy 1/2 BHK"><?php echo _pt('opt_buy'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="re_privacy_check" style="margin-top: 4px;">
                        <label for="re_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="background: linear-gradient(135deg, var(--primary-blue), #0b3c8a);"><?php echo __t('submit'); ?></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('RealEstate'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
