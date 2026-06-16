<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/translations.php';

// Quotes dictionary for Suvichar widget
$quotes = [
    'mr' => [
        "आरोग्य हीच खरी संपत्ती आहे, योग हा त्याचा मार्ग आहे.",
        "यश मिळवण्यासाठी आधी स्वतःवर विश्वास ठेवा.",
        "परिवर्तन हा निसर्गाचा नियम आहे, त्याला आनंदाने स्वीकारा.",
        "दुसऱ्यांना मदत करणे हेच मानवी जीवनाचे खरे सार्थक आहे.",
        "निसर्गाच्या सानिध्यात मन आणि शरीर दोन्ही ताजेतवाने होतात."
    ],
    'en' => [
        "Health is the real wealth, yoga is the path to it.",
        "To succeed, we must first believe that we can.",
        "Change is the law of nature, accept it with joy.",
        "Helping others is the true purpose of human life.",
        "In the lap of nature, both mind and body are rejuvenated."
    ],
    'hi' => [
        "स्वास्थ्य ही असली संपत्ति है, योग इसका मार्ग है।",
        "सफलता पाने के लिए पहले खुद पर विश्वास करना होगा।",
        "परिवर्तन प्रकृति का नियम है, इसे खुशी-खुशी स्वीकार करें।",
        "दूसरों की मदद करना ही मानव जीवन का सच्चा उद्देश्य है।",
        "प्रकृति की गोद में मन और शरीर दोनों तरोताजा हो जाते हैं।"
    ]
];

function render_suvichar_widget() {
    global $quotes, $active_lang;
    $lang_quotes = $quotes[$active_lang];
    // Pick a quote based on day of the month so it is consistent daily
    $day_index = (int)date('d') % count($lang_quotes);
    $quote_text = $lang_quotes[$day_index];
    
    echo '
    <div class="widget-card suvichar-widget">
        <div>
            <div class="suvichar-title">' . __t('suvichar') . '</div>
            <div class="suvichar-text">“' . $quote_text . '”</div>
        </div>
        <div class="clock-info">
            <div>
                <span id="live-day">...</span>, 
                <span id="live-date">...</span>
            </div>
            <div class="clock-time" id="live-clock">00:00:00</div>
        </div>
    </div>';
}

function render_interest_form($default_service = 'General') {
    $services = [
        'General' => __t('opt_general'),
        'Yoga' => __t('opt_yoga'),
        'RealEstate' => __t('opt_realestate'),
        'Foods' => __t('opt_foods'),
        'SocialWork' => __t('opt_socialwork'),
        'NGO' => __t('opt_ngo'),
        'ChannelPartner' => __t('opt_cp')
    ];
    
    echo '
    <div class="widget-card interest-widget">
        <div class="form-title">' . __t('interest_form') . '</div>
        <form action="submit_inquiry.php" method="POST" enctype="multipart/form-data" class="lead-form" onsubmit="return validateForm(this)">
            <input type="hidden" name="form_type" value="inquiry">
            
            <div class="form-group">
                <label class="form-label">' . __t('fullname') . ' *</label>
                <input type="text" name="name" class="form-control" placeholder="' . __t('placeholder_name') . '" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">' . __t('mobile') . ' *</label>
                <input type="tel" name="phone" class="form-control" placeholder="' . __t('placeholder_phone') . '" required pattern="[0-9]{10}">
            </div>
            
            <div class="form-group">
                <label class="form-label">' . __t('email') . '</label>
                <input type="email" name="email" class="form-control" placeholder="' . __t('placeholder_email') . '">
            </div>
            
            <div class="form-group">
                <label class="form-label">' . __t('city') . '</label>
                <input type="text" name="city" class="form-control" placeholder="' . __t('placeholder_city') . '">
            </div>
            
            <div class="form-group">
                <label class="form-label">' . __t('service_interest') . '</label>
                <select name="service" class="form-control">';
                foreach ($services as $val => $lbl) {
                    $selected = ($val === $default_service) ? 'selected' : '';
                    echo '<option value="' . $val . '" ' . $selected . '>' . $lbl . '</option>';
                }
    echo '      </select>
            </div>
            
            <div class="form-group">
                <label class="form-label">' . __t('message') . '</label>
                <textarea name="message" class="form-control" rows="3" placeholder="' . __t('placeholder_message') . '"></textarea>
            </div>
            
            <div class="form-group">
                <label class="form-label">' . __t('upload_doc') . '</label>
                <input type="file" name="document" class="form-control">
            </div>
            
            <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                <input type="checkbox" name="privacy_agree" required id="privacy_agree_check" style="margin-top: 4px;">
                <label for="privacy_agree_check" style="font-size: 11px; color: #666; cursor:pointer;">
                    ' . __t('privacy_agree_text') . '
                </label>
            </div>
            
            <button type="submit" class="btn-primary">' . __t('submit') . '</button>
        </form>
    </div>';
}

function render_bottom_widgets($default_service = 'General') {
    echo '<div class="bottom-widgets-row">';
    render_suvichar_widget();
    render_interest_form($default_service);
    echo '</div>';
}

function render_floating_buttons() {
    echo '
    <div class="floating-actions">
        <!-- Persistent Highlighted Quick Inquiry Modal Button -->
        <div class="float-btn float-inquiry" title="' . __t('interest_form') . '" onclick="openInquiryModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
        </div>
        
        <!-- Direct Phone Calling -->
        <a href="tel:91' . CONTACT_PHONE . '" class="float-btn float-call" title="' . __t('call_now') . '">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
        </a>
        
        <!-- Direct WhatsApp Pre-filled link -->
        <a href="' . WHATSAPP_LINK . '?text=Hello%20Gauri%20Mahajan%2C%20I%20am%20interested%20in%20your%20services." target="_blank" class="float-btn float-whatsapp" title="' . __t('whatsapp') . '">
            <svg viewBox="0 0 24 24" style="width:28px; height:28px; fill:currentColor;">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.458 5.705 1.459h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" fill="currentColor"/>
            </svg>
        </a>
    </div>
    
    <!-- Floating Modal Structure -->
    <div class="modal-overlay" id="inquiryModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeInquiryModal()">&times;</button>
            ';
            render_interest_form();
            echo '
        </div>
    </div>';
}
?>
