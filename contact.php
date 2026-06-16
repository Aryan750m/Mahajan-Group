<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/widgets.php';

$page_translations = [
    'mr' => [
        'banner_desc' => 'चौकशी, नोंदणी किंवा संयुक्त भागीदारीसाठी गौरी महाजन समूहाशी संपर्क साधा',
        'office_details' => 'बदलापूर कार्यालय तपशील',
        'address_title' => '📍 कार्यालयाचा पत्ता',
        'contact_direct' => '📞 थेट संपर्क',
        'mobile' => 'मोबाईल:',
        'email' => 'ईमेल:',
        'map_title' => '🗺️ गुगल मॅप्स लोकेशन',
        'map_marker_title' => 'वनलाईफ फिटनेस सेंटर आणि महाजन कार्यालय',
        'open_maps' => 'गुगल मॅप्समध्ये उघडा',
        'submit_inquiry' => 'चौकशी सबमिट करा',
        'service_interest' => 'इच्छित सेवा',
        'opt_general' => 'सामान्य कॉर्पोरेट',
        'opt_yoga' => 'योग आणि झुम्बा',
        'opt_real_estate' => 'रियल इस्टेट जेव्ही',
        'opt_foods' => 'आरोग्यदायी पोषण',
        'opt_social_work' => 'सामाजिक उपक्रम',
        'opt_ngo' => 'एनजीओ देणगी'
    ],
    'hi' => [
        'banner_desc' => 'पूछताछ, पंजीकरण या संयुक्त उद्यम के लिए गौरी महाजन समूह से संपर्क करें',
        'office_details' => 'बदलापुर कार्यालय विवरण',
        'address_title' => '📍 कार्यालय का पता',
        'contact_direct' => '📞 सीधा संपर्क',
        'mobile' => 'मोबाइल:',
        'email' => 'ईमेल:',
        'map_title' => '🗺️ गूगल मैप्स स्थान',
        'map_marker_title' => 'वनलाइफ फिटनेस सेंटर और महाजन कार्यालय',
        'open_maps' => 'गूगल मैप्स में खोलें',
        'submit_inquiry' => 'पूछताछ सबमिट करें',
        'service_interest' => 'इच्छित सेवा',
        'opt_general' => 'सामान्य कॉर्पोरेट',
        'opt_yoga' => 'योग और जुम्बा',
        'opt_real_estate' => 'रियल एस्टेट जेव्ही',
        'opt_foods' => 'स्वस्थ पोषण',
        'opt_social_work' => 'सामाजिक कार्य',
        'opt_ngo' => 'एनजीओ दान'
    ],
    'en' => [
        'banner_desc' => 'Get in touch with Gauri Mahajan Group for inquiries, registrations, or JVs',
        'office_details' => 'Badlapur Office Details',
        'address_title' => '📍 Office Address',
        'contact_direct' => '📞 Contact Direct',
        'mobile' => 'Mobile:',
        'email' => 'Email:',
        'map_title' => '🗺️ Google Maps Location',
        'map_marker_title' => 'OneLife Fitness Center & Mahajan Office',
        'open_maps' => 'Open in Google Maps',
        'submit_inquiry' => 'Submit an Inquiry',
        'service_interest' => 'Service of Interest',
        'opt_general' => 'General Corporate',
        'opt_yoga' => 'Yoga & Zumba',
        'opt_real_estate' => 'Real Estate JV',
        'opt_foods' => 'Healthy Nutrition',
        'opt_social_work' => 'Social Work',
        'opt_ngo' => 'NGO Donation'
    ]
];

function _pt($key) {
    global $page_translations, $active_lang;
    return $page_translations[$active_lang][$key] ?? ($page_translations['en'][$key] ?? $key);
}
?>

<div class="container">
    
    <!-- Hero Banner with Corporate Color -->
    <div class="hero-banner">
        <h2>📞 <?php echo __t('contact'); ?> Us</h2>
        <p><?php echo _pt('banner_desc'); ?></p>
    </div>

    <!-- Main Content Layout -->
    <div class="page-content-wrapper" style="margin-bottom: 40px;">
        <div class="main-content-card">
            <h3 style="margin-bottom: 20px; color: var(--primary-blue); border-bottom: 2px solid var(--primary-blue); padding-bottom: 8px;"><?php echo _pt('office_details'); ?></h3>
            
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom: 30px;">
                <div style="background: #f8fafc; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary-blue);">
                    <h5 style="color:var(--primary-blue); margin-bottom: 8px;"><?php echo _pt('address_title'); ?></h5>
                    <p style="font-size:13px; line-height:1.6; color:#555;"><?php echo CONTACT_ADDRESS; ?></p>
                </div>
                
                <div style="background: #f8fafc; padding: 20px; border-radius: 8px; border-left: 4px solid var(--gold);">
                    <h5 style="color:var(--gold); margin-bottom: 8px;"><?php echo _pt('contact_direct'); ?></h5>
                    <p style="font-size:13px; margin-bottom: 5px;"><strong><?php echo _pt('mobile'); ?></strong> +91 <?php echo CONTACT_PHONE; ?></p>
                    <p style="font-size:13px; margin-bottom: 12px;"><strong><?php echo _pt('email'); ?></strong> <?php echo CONTACT_EMAIL; ?></p>
                    <div style="display:flex; gap:10px;">
                        <a href="tel:91<?php echo CONTACT_PHONE; ?>" class="btn-primary" style="padding: 6px 12px; font-size:12px; display:inline-block; text-align:center; width:auto;"><?php echo __t('call_now'); ?></a>
                        <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="btn-primary" style="padding: 6px 12px; font-size:12px; display:inline-block; text-align:center; width:auto; background:#25D366;"><?php echo __t('whatsapp'); ?></a>
                    </div>
                </div>
            </div>

            <!-- Map Iframe Embed -->
            <h4 style="margin-bottom:15px; color:var(--primary-blue);"><?php echo _pt('map_title'); ?></h4>
            <div style="border:1px solid #ddd; border-radius: 8px; overflow:hidden; height:250px; background:#e5e3df; margin-bottom: 20px; position:relative;">
                <!-- Modern clean Map simulation for local development, fallback to normal map -->
                <div style="position:absolute; width:100%; height:100%; display:flex; justify-content:center; align-items:center; flex-direction:column; text-align:center; padding:20px; background:rgba(255,255,255,0.9);">
                    <span style="font-size:35px; margin-bottom:8px;">📍</span>
                    <h5 style="color:var(--primary-blue); margin-bottom:5px;"><?php echo _pt('map_marker_title'); ?></h5>
                    <p style="font-size:12px; color:#555; margin-bottom:12px;"><?php echo CONTACT_ADDRESS; ?></p>
                    <a href="https://maps.google.com/?q=Sanveg+Residency+Badlapur" target="_blank" class="btn-primary" style="width:auto; padding:6px 15px; font-size:12px;"><?php echo _pt('open_maps'); ?></a>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.423023023023!2d73.2302!3d19.1302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDA3JzQ4LjciTiA3M8KwMTMnNDguNyJF!5e0!3m2!1sen!2sin!4v1781600000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Sidebar General Inquiry Form -->
        <div>
            <div class="widget-card" style="border-left: 4px solid var(--primary-blue); position: sticky; top: 90px;">
                <div class="form-title" style="color: var(--primary-blue); border-left-color: var(--primary-blue);"><?php echo _pt('submit_inquiry'); ?></div>
                <form action="submit_inquiry.php" method="POST" class="lead-form" onsubmit="return validateForm(this)">
                    <input type="hidden" name="form_type" value="inquiry">
                    
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
                        <label class="form-label"><?php echo _pt('service_interest'); ?></label>
                        <select name="service" class="form-control">
                            <option value="General"><?php echo _pt('opt_general'); ?></option>
                            <option value="Yoga"><?php echo _pt('opt_yoga'); ?></option>
                            <option value="RealEstate"><?php echo _pt('opt_real_estate'); ?></option>
                            <option value="Foods"><?php echo _pt('opt_foods'); ?></option>
                            <option value="SocialWork"><?php echo _pt('opt_social_work'); ?></option>
                            <option value="NGO"><?php echo _pt('opt_ngo'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo __t('message'); ?></label>
                        <textarea name="message" class="form-control" rows="3" placeholder="<?php echo __t('placeholder_message'); ?>" required></textarea>
                    </div>
                    
                    <div class="form-group" style="display:flex; gap: 10px; align-items: flex-start; margin-top: 10px;">
                        <input type="checkbox" name="privacy_agree" required id="contact_privacy_check" style="margin-top: 4px;">
                        <label for="contact_privacy_check" style="font-size: 11px; color: #666; cursor:pointer;">
                            <?php echo __t('privacy_agree_text'); ?>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary"><?php echo __t('submit'); ?></button>
                </form>
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
