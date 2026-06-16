<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'section_title' => 'आमच्यासोबत तुमचा नेटवर्क वाढवा',
        'section_desc' => 'महाजन ग्रुप स्वतंत्र आर्थिक सल्लागार, रिअल इस्टेट ब्रोकर्स आणि सक्रिय प्रभावशाली व्यक्तींना आमच्या व्यावसायिक चॅनेल पार्टनर नेटवर्कमध्ये सामील होण्यासाठी स्वागत करतो. आमच्या प्रीमियम रिअल इस्टेट जेव्ही किंवा ग्रुप वेलनेस रिट्रीट्सकडे ग्राहकांना संदर्भित करून, तुम्ही आकर्षक कमिशन मिळवू शकता आणि प्रकल्पांची प्राधान्याने माहिती मिळवू शकता.',
        'payout_structure' => 'भागीदार मोबदला आणि कमिशन रचना',
        'th_service' => 'सेवा / प्रकल्प प्रकार',
        'th_category' => 'लक्ष्य ग्राहक श्रेणी',
        'th_commission' => 'कमिशन रचना',
        'row1_service' => 'निवासी विक्री / जेव्ही (JVs)',
        'row1_category' => 'बदलापूर प्रीमियम अपार्टमेंट्स',
        'row1_comm' => 'बुकिंग मूल्याच्या १.५% - २.०%',
        'row2_service' => 'वेलनेस कॅम्प / रिट्रीट',
        'row2_category' => 'ग्रुप रिट्रीट बुकिंग्ज',
        'row2_comm' => 'प्रत्येक थेट संदर्भासाठी ₹५००',
        'row3_service' => 'नियमित फिटनेस / झुम्बा क्लास',
        'row3_category' => 'महिलांच्या मासिक बॅचेस',
        'row3_comm' => 'प्रत्येक यशस्वी प्रवेशासाठी ₹३००',
        'exclusive_benefits' => 'चॅनेल पार्टनरचे विशेष फायदे',
        'benefit1' => 'प्राधान्याने साईट भेटी आणि समर्पित ब्रोकर सहाय्य.',
        'benefit2' => 'डिजिटल ब्रोशर, फ्लायर्स आणि सह-ब्रँडेड विपणन साहित्य.',
        'benefit3' => 'थेट बँक खात्यात ३०-दिवसांच्या आत जलद मोबदला वितरण.',
        'faq_q1' => 'Q: मी माझ्या संदर्भित ग्राहकांचा ट्रॅक कसा ठेवू?',
        'faq_a1' => 'तुमची नोंदणी मंजूर झाल्यावर आमचे कार्यालय एक संदर्भ कोड (Reference Code) शेअर करते. तुमच्या कोडसह आमच्या पोर्टलवर सबमिट केलेले कोणतेही लीड तुमच्या खात्यामध्ये स्वयंचलितपणे लॉग केले जाते.',
        'faq_q2' => 'Q: नोंदणी शुल्क आहे का?',
        'faq_a2' => 'नाही, चॅनेल पार्टनर म्हणून सामील होणे पूर्णपणे विनामूल्य आहे. आम्ही पडताळणीनंतर ४८ तासांच्या आत प्रोफाईल मंजूर करतो.',
        'biz_type' => 'व्यवसाय प्रकार',
        'opt_re_broker' => 'रिअल इस्टेट एजंट / ब्रोकर',
        'opt_fin_advisor' => 'एलआयसी / आर्थिक सल्लागार',
        'opt_fitness' => 'झुम्बा / जिम प्रशिक्षक',
        'opt_freelancer' => 'वैयक्तिक फ्रीलांसर',
        'exp_years' => 'व्यावसायिक अनुभव (वर्षे)',
        'exp_placeholder' => 'उदा. ३ वर्षे',
        'remarks_desc' => 'टिप्पणी / वर्णन'
    ],
    'hi' => [
        'section_title' => 'हमारे साथ अपना नेटवर्क बढ़ाएं',
        'section_desc' => 'महाजन ग्रुप स्वतंत्र वित्तीय सलाहकारों, रियल एस्टेट दलालों और सक्रिय प्रभावशाली लोगों का हमारे पेशेवर चैनल पार्टनर नेटवर्क में शामिल होने के लिए स्वागत करता है। हमारे प्रीमियम रियल एस्टेट जेवी या ग्रुप वेलनेस रिट्रीट में ग्राहकों को संदर्भित करके, आप उच्च कमीशन भुगतान अर्जित कर सकते हैं और प्राथमिकता परियोजना सूची का आनंद ले सकते हैं।',
        'payout_structure' => 'पार्टनर भुगतान और कमीशन संरचना',
        'th_service' => 'सेवा / परियोजना प्रकार',
        'th_category' => 'लक्ष्य ग्राहक श्रेणी',
        'th_commission' => 'कमिशन संरचना',
        'row1_service' => 'आवासीय बिक्री / जेवी (JVs)',
        'row1_category' => 'बदलापुर प्रीमियम अपार्टमेंट',
        'row1_comm' => 'बुकिंग मूल्य का १.५% - २.०%',
        'row2_service' => 'वेलनेस कैंप / रिट्रीट',
        'row2_category' => 'समूह रिट्रीट बुकिंग',
        'row2_comm' => 'प्रत्येक सीधे रेफ़रल के लिए ₹५००',
        'row3_service' => 'नियमित फिटनेस / ज़ुम्बा क्लास',
        'row3_category' => 'महिलाओं के मासिक बैच',
        'row3_comm' => 'प्रत्येक सफल प्रवेश के लिए ₹३००',
        'exclusive_benefits' => 'चैनल पार्टनर के विशेष लाभ',
        'benefit1' => 'प्राथमिकता साइट विज़िट और समर्पित ब्रोकर सहायता।',
        'benefit2' => 'डिजिटल ब्रोशर, फ़्लायर्स और सह-ब्रांडेड विपणन सामग्री।',
        'benefit3' => 'सीधे बैंक खातों में ३०-दिवसीय शीघ्र भुगतान चक्र।',
        'faq_q1' => 'Q: मैं अपने रेफ़र किए गए लीड को कैसे ट्रैक करूँ?',
        'faq_a1' => 'एक बार जब आपका पंजीकरण स्वीकृत हो जाता है, तो हमारा व्यवस्थापक डेस्क एक संदर्भ कोड साझा करता है। आपके कोड के साथ हमारे पोर्टल पर प्रस्तुत कोई भी लीड आपके खाते में स्वचालित रूप से दर्ज हो जाती है।',
        'faq_q2' => 'Q: क्या कोई पंजीकरण शुल्क है?',
        'faq_a2' => 'नहीं, चैनल पार्टनर के रूप में शामिल होना पूरी तरह से मुफ्त है। हम सत्यापन के ४८ घंटे के भीतर प्रोफाइल स्वीकृत करते हैं।',
        'biz_type' => 'व्यवसाय का प्रकार',
        'opt_re_broker' => 'रियल एस्टेट एजेंट / ब्रोकर',
        'opt_fin_advisor' => 'एलआईसी / वित्तीय सलाहकार',
        'opt_fitness' => 'ज़ुम्बा / जिम प्रशिक्षक',
        'opt_freelancer' => 'व्यक्तिगत फ्रीलांसर',
        'exp_years' => 'व्यावसायिक अनुभव (वर्ष)',
        'exp_placeholder' => 'उदा. ३ वर्ष',
        'remarks_desc' => 'टिप्पणी / विवरण'
    ],
    'en' => [
        'section_title' => 'Grow Your Network With Us',
        'section_desc' => 'Mahajan Group welcomes independent financial advisors, real estate brokers, and active community influencers to join our professional Channel Partner Network. By referring clients to our premier real estate JVs or group wellness retreats, you earn high commission payouts and enjoy priority project listings.',
        'payout_structure' => 'Partner Payouts & Commission Structure',
        'th_service' => 'Service / Project Type',
        'th_category' => 'Client Target Category',
        'th_commission' => 'Commission Structure',
        'row1_service' => 'Residential Sales / JVs',
        'row1_category' => 'Badlapur Premium Apartments',
        'row1_comm' => '1.5% - 2.0% of booking value',
        'row2_service' => 'Wellness Camp / Retreat',
        'row2_category' => 'Group Retaining Bookings',
        'row2_comm' => '₹500 per direct referral',
        'row3_service' => 'Regular Fitness / Zumba Class',
        'row3_category' => 'Ladies Monthly Batches',
        'row3_comm' => '₹300 per successful admission',
        'exclusive_benefits' => 'Channel Partner Exclusive Benefits',
        'benefit1' => 'Priority site visits and dedicated broker assistance.',
        'benefit2' => 'Digital brochures, flyers, and co-branded marketing assets.',
        'benefit3' => 'Prompt 30-day payout cycles directly to bank accounts.',
        'faq_q1' => 'Q: How do I track my referred leads?',
        'faq_a1' => 'Once your registration is approved, our admin desk shares a reference code. Any lead submitted on our portal with your code gets logged to your ledger automatically.',
        'faq_q2' => 'Q: Is there any registration fee?',
        'faq_a2' => 'No, joining as a channel partner is completely free. We approve profiles within 48 hours of verification.',
        'biz_type' => 'Business Type',
        'opt_re_broker' => 'Real Estate Agent / Broker',
        'opt_fin_advisor' => 'LIC / Financial Advisor',
        'opt_fitness' => 'Zumba / Gym Instructor',
        'opt_freelancer' => 'Individual Freelancer',
        'exp_years' => 'Professional Experience (Years)',
        'exp_placeholder' => 'e.g. 3 Years',
        'remarks_desc' => 'Remarks / Description'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with Gold Theme Color -->
    <div class="hero-banner" style="background: linear-gradient(135deg, var(--gold), #BCA136);">
        <h2>🤝 <?php echo __t('channel_partner'); ?> Program</h2>
        <p><?php echo __t('cp_benefits'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 15px; color: var(--gold); border-bottom: 2px solid var(--gold); padding-bottom: 8px;"><?php echo _pt('section_title'); ?></h3>
            <p style="margin-bottom: 15px;"><?php echo _pt('section_desc'); ?></p>
            
            <h4 style="margin-bottom: 15px; color: var(--primary-blue);"><?php echo _pt('payout_structure'); ?></h4>
            <table style="width:100%; border-collapse: collapse; font-size: 13px; margin-bottom: 30px; border: 1px solid #ddd;">
                <thead>
                    <tr style="background:#f8fafc; border-bottom: 2px solid #ddd;">
                        <th style="padding:10px; text-align:left;"><?php echo _pt('th_service'); ?></th>
                        <th style="padding:10px; text-align:left;"><?php echo _pt('th_category'); ?></th>
                        <th style="padding:10px; text-align:right;"><?php echo _pt('th_commission'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding:10px;"><?php echo _pt('row1_service'); ?></td>
                        <td style="padding:10px;"><?php echo _pt('row1_category'); ?></td>
                        <td style="padding:10px; text-align:right; font-weight:700; color:var(--primary-blue);"><?php echo _pt('row1_comm'); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding:10px;"><?php echo _pt('row2_service'); ?></td>
                        <td style="padding:10px;"><?php echo _pt('row2_category'); ?></td>
                        <td style="padding:10px; text-align:right; font-weight:700; color:var(--primary-blue);"><?php echo _pt('row2_comm'); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding:10px;"><?php echo _pt('row3_service'); ?></td>
                        <td style="padding:10px;"><?php echo _pt('row3_category'); ?></td>
                        <td style="padding:10px; text-align:right; font-weight:700; color:var(--primary-blue);"><?php echo _pt('row3_comm'); ?></td>
                    </tr>
                </tbody>
            </table>

            <h4 style="margin-bottom: 10px; color: var(--primary-blue);"><?php echo _pt('exclusive_benefits'); ?></h4>
            <ul style="margin-left: 20px; margin-bottom: 25px;">
                <li style="margin-bottom: 5px;"><?php echo _pt('benefit1'); ?></li>
                <li style="margin-bottom: 5px;"><?php echo _pt('benefit2'); ?></li>
                <li style="margin-bottom: 5px;"><?php echo _pt('benefit3'); ?></li>
            </ul>

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

        <!-- Sidebar Channel Partner Form -->
        <div>
            <div class="widget-card" style="border-left: 4px solid var(--gold); position: sticky; top: 90px;">
                <div class="form-title" style="color: var(--gold); border-left-color: var(--gold);"><?php echo _pt('cp_form'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="channel_partner">
                    
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
                        <label class="form-label"><?php echo __t('city'); ?></label>
                        <input type="text" name="city" class="form-control" placeholder="<?php echo __t('placeholder_city'); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo _pt('biz_type'); ?></label>
                        <select name="business_type" class="form-control">
                            <option value="Real Estate Broker"><?php echo _pt('opt_re_broker'); ?></option>
                            <option value="Financial Advisor"><?php echo _pt('opt_fin_advisor'); ?></option>
                            <option value="Fitness Influencer"><?php echo _pt('opt_fitness'); ?></option>
                            <option value="Individual Networker"><?php echo _pt('opt_freelancer'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo _pt('exp_years'); ?></label>
                        <input type="text" name="experience" class="form-control" placeholder="<?php echo _pt('exp_placeholder'); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo _pt('remarks_desc'); ?></label>
                        <textarea name="message" class="form-control" rows="2" placeholder="<?php echo __t('placeholder_message'); ?>"></textarea>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="cp_privacy_check" style="margin-top: 4px;">
                        <label for="cp_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="background: linear-gradient(135deg, var(--gold), #9b8122);"><?php echo __t('submit'); ?></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Widgets -->
    <?php render_bottom_widgets('ChannelPartner'); ?>

</div>

<?php 
render_floating_buttons();
require_once __DIR__ . '/footer.php'; 
?>
