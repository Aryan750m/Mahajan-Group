<?php
// Translations dictionary for English, Hindi, and Marathi

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set language based on query parameter or session; default is Marathi ('mr') as requested in the design layout
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['en', 'hi', 'mr'])) {
        $_SESSION['lang'] = $lang;
    }
}

$active_lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'mr';

$translations = [
    'mr' => [
        'slogan' => 'विश्वास आणि अनुभव सिद्धता हिच आमची संपत्ती',
        'select_lang' => 'भाषा निवडा',
        'home' => 'मुख्यपृष्ठ',
        'profile' => 'प्रोफाइल',
        'library' => 'लायब्ररी',
        'contact' => 'संपर्क',
        'suggestion' => 'सुझाव',
        'feedback' => 'अभिप्राय',
        'yoga' => 'योग',
        'real_estate' => 'रियल इस्टेट',
        'foods' => 'फूड्स',
        'social_work' => 'सामाजिक',
        'ngo' => 'NGO',
        'channel_partner' => 'चॅनल पार्टनर',
        'interest_form' => 'इंटरेस्ट फॉर्म',
        'yoga_interest_form' => 'योग इंटरेस्ट फॉर्म',
        'inquiry_form' => 'चौकशी अर्ज',
        'volunteer_form' => 'स्वयंसेवक नोंदणी',
        'cp_form' => 'चॅनल पार्टनर नोंदणी',
        'sub_title' => 'निसर्गाच्या सानिध्यात',
        'sub_slogan' => 'स्वतःसाठी नवी सुरुवात, आयुष्यासाठी नवी ऊर्जा!',
        'yoga_subtitle' => 'वनलाईफ फिटनेस परिवार तर्फे हार्दिक स्वागत - गौरी महाजन',
        'wellness_retreat' => 'वेलनेस रिट्रीट सोहळा',
        'call_now' => 'कॉल करा',
        'whatsapp' => 'व्हॉट्सॲप',
        'address' => 'पत्ता',
        'fullname' => 'पूर्ण नाव',
        'mobile' => 'मोबाईल नंबर',
        'email' => 'ईमेल पत्ता',
        'city' => 'शहर',
        'service_interest' => 'इच्छित सेवा',
        'message' => 'संदेश / चौकशी',
        'upload_doc' => 'दस्तऐवज अपलोड करा (पर्यायी)',
        'submit' => 'सादर करा',
        'suvichar' => 'शुभ संदेश / सुविचार',
        'date' => 'तारीख',
        'time' => 'वेळ',
        'classes_batches' => 'वर्ग आणि बॅचेस माहिती',
        'faq' => 'नेहमी विचारले जाणारे प्रश्न (FAQ)',
        'privacy_policy' => 'गोपनीयता धोरण',
        'terms' => 'अटी आणि शर्ती',
        'learn_more' => 'अधिक माहिती मिळवा',
        'donation' => 'देणगी आणि मदत',
        'cp_benefits' => 'भागीदार फायदे आणि कमिशन रचना',
        'success_msg' => 'तुमचा अर्ज यशस्वीरित्या सबमिट झाला आहे! आम्ही लवकरच संपर्क करू.',
        'error_msg' => 'काहीतरी चूक झाली. कृपया पुन्हा प्रयत्न करा.',
        
        // Form & Slider translations
        'privacy_agree_text' => 'मी वाचले आहे आणि गोपनीयता धोरण (Privacy Policy) मान्य करतो.',
        'placeholder_name' => 'उदा. गौरी महाजन',
        'placeholder_phone' => 'उदा. 9890349819',
        'placeholder_email' => 'उदा. name@example.com',
        'placeholder_city' => 'उदा. बदलापूर',
        'placeholder_message' => 'अधिक माहिती लिहा...',
        'opt_general' => 'चौकशी अर्ज',
        'opt_yoga' => 'योग आणि झुम्बा वर्ग',
        'opt_realestate' => 'रियल इस्टेट जेव्ही (JV)',
        'opt_foods' => 'निरोगी आहार आणि पोषण',
        'opt_socialwork' => 'सामाजिक उपक्रम',
        'opt_ngo' => 'NGO देणगी',
        'opt_cp' => 'चॅनल पार्टनर',
        'slide2_title' => 'प्रीमियम प्रॉपर्टी इन्व्हेस्टमेंट्स',
        'slide2_desc' => 'लक्झरी निवासी प्रकल्प, साइट भेटीच्या संधी आणि तुमच्या भविष्यासाठी तयार केलेल्या गुंतवणुकीचे पर्याय शोधा.',
        'slide3_title' => 'निरोगी पोषण आणि आहार',
        'slide3_desc' => 'योग्य शारीरिक तंदुरुस्ती आणि दीर्घायुष्यासाठी तुमच्या दैनंदिन व्यायामाच्या नित्यक्रमात पोषक आहाराचा समावेश करा.',
        'slide4_title' => 'सामाजिक उपक्रम आणि कल्याण',
        'slide4_desc' => 'गरजू लोकांसाठी अर्थपूर्ण समुदाय विकास मोहीम, पर्यावरण उपक्रम आणि साहाय्यता नेटवर्क तयार करणे.',
        'slide5_title' => 'महाजन चॅरिटेबल ट्रस्ट',
        'slide5_desc' => 'शैक्षणिक आणि वैद्यकीय मदतीसाठी समर्पित. तुमचे सहकार्य जीवनाला सक्षम बनवते. आजच देणगी द्या.',
        'retreat_option' => 'नेचर्स कॉलिंग वेलनेस रिट्रीट (रु. ३६००/-)',
        
        // Card subtexts
        'card_yoga_desc' => 'वनलाईफ फिटनेस सेंटर, क्लासेस आणि रिट्रीट',
        'card_re_desc' => 'गुंतवणूक आणि प्रीमियम प्रॉपर्टी लिस्टिंग्स',
        'card_foods_desc' => 'सेंद्रिय पोषण आणि निरोगी जीवन योजना',
        'card_social_desc' => 'कल्याणकारी योजना आणि स्वयंसेवक उपक्रम',
        'card_ngo_desc' => 'धर्मादाय योगदान आणि देणग्या',
        'card_cp_desc' => 'कमिशन आणि फायदे मिळवण्यासाठी नोंदणी करा'
    ],
    'en' => [
        'slogan' => 'Trust and experience/proof is our wealth',
        'select_lang' => 'Select Language',
        'home' => 'Home',
        'profile' => 'Profile',
        'library' => 'Library',
        'contact' => 'Contact',
        'suggestion' => 'Suggestion',
        'feedback' => 'Feedback',
        'yoga' => 'Yoga',
        'real_estate' => 'Real Estate',
        'foods' => 'Foods',
        'social_work' => 'Social Work',
        'ngo' => 'NGO',
        'channel_partner' => 'Channel Partner',
        'interest_form' => 'Interest Form',
        'yoga_interest_form' => 'Yoga Interest Form',
        'inquiry_form' => 'Inquiry Form',
        'volunteer_form' => 'Volunteer Registration',
        'cp_form' => 'Channel Partner Form',
        'sub_title' => 'In the Lap of Nature',
        'sub_slogan' => 'New start for oneself, new energy for life!',
        'yoga_subtitle' => 'Warm Welcome by OneLife Fitness Family - Gauri Mahajan',
        'wellness_retreat' => 'Wellness Retreat Festival',
        'call_now' => 'Call Now',
        'whatsapp' => 'WhatsApp',
        'address' => 'Address',
        'fullname' => 'Full Name',
        'mobile' => 'Mobile Number',
        'email' => 'Email Address',
        'city' => 'City',
        'service_interest' => 'Service of Interest',
        'message' => 'Message / Inquiry',
        'upload_doc' => 'Upload Document (Optional)',
        'submit' => 'Submit',
        'suvichar' => 'Auspicious Message / Quote',
        'date' => 'Date',
        'time' => 'Time',
        'classes_batches' => 'Classes and Batches Information',
        'faq' => 'Frequently Asked Questions (FAQ)',
        'privacy_policy' => 'Privacy Policy',
        'terms' => 'Terms & Conditions',
        'learn_more' => 'Learn More',
        'donation' => 'Donation & Support',
        'cp_benefits' => 'Partner Benefits & Commission Structure',
        'success_msg' => 'Your application has been successfully submitted! We will contact you soon.',
        'error_msg' => 'Something went wrong. Please try again.',
        
        // Form & Slider translations
        'privacy_agree_text' => 'I have read and agree to the Privacy Policy.',
        'placeholder_name' => 'e.g. Gauri Mahajan',
        'placeholder_phone' => 'e.g. 9890349819',
        'placeholder_email' => 'e.g. name@example.com',
        'placeholder_city' => 'e.g. Badlapur',
        'placeholder_message' => 'Write details here...',
        'opt_general' => 'General Inquiry',
        'opt_yoga' => 'Yoga & Zumba Classes',
        'opt_realestate' => 'Real Estate JV',
        'opt_foods' => 'Foods & Nutrition',
        'opt_socialwork' => 'Social Initiatives',
        'opt_ngo' => 'NGO Donation',
        'opt_cp' => 'Channel Partner',
        'slide2_title' => 'Premium Property Investments',
        'slide2_desc' => 'Explore luxury residential projects, site visit opportunities, and investment options tailored for your future.',
        'slide3_title' => 'Healthy Nutrition & Diet',
        'slide3_desc' => 'Integrate nutrient-rich diets with your daily exercise routine for perfect physical fitness and life longevity.',
        'slide4_title' => 'Social Initiatives & Welfare',
        'slide4_desc' => 'Creating meaningful community development campaigns, green initiatives, and support networks for the needy.',
        'slide5_title' => 'Mahajan Charity Trust',
        'slide5_desc' => 'Dedicated to educational and medical aid. Your support empowers lives. Donate online easily today.',
        'retreat_option' => 'Nature Calling Wellness Retreat (Rs. 3600/-)',
        
        // Card subtexts
        'card_yoga_desc' => 'OneLife Fitness Center, Classes & Retreats',
        'card_re_desc' => 'Investment & Premium Property Listings',
        'card_foods_desc' => 'Organic Nutrition & Healthy Living Plans',
        'card_social_desc' => 'Welfare Schemes & Volunteer Activities',
        'card_ngo_desc' => 'Charitable Contributions & Donations',
        'card_cp_desc' => 'Register to earn commissions and benefits'
    ],
    'hi' => [
        'slogan' => 'विश्वास और अनुभव सिद्धता ही हमारी संपत्ति है',
        'select_lang' => 'भाषा चुनें',
        'home' => 'मुख्यपृष्ठ',
        'profile' => 'प्रोफाइल',
        'library' => 'लाइब्रेरी',
        'contact' => 'संपर्क',
        'suggestion' => 'सुझाव',
        'feedback' => 'प्रतिक्रिया',
        'yoga' => 'योग',
        'real_estate' => 'रियल एस्टेट',
        'foods' => 'फूड्स',
        'social_work' => 'सामाजिक कार्य',
        'ngo' => 'NGO',
        'channel_partner' => 'चैनल पार्टनर',
        'interest_form' => 'इंटरेस्ट फॉर्म',
        'yoga_interest_form' => 'योग इंटरेस्ट फॉर्म',
        'inquiry_form' => 'पूछताछ फॉर्म',
        'volunteer_form' => 'स्वयंसेवक पंजीकरण',
        'cp_form' => 'चैनल पार्टनर पंजीकरण',
        'sub_title' => 'प्रकृति की गोद में',
        'sub_slogan' => 'स्वयं के लिए नई शुरुआत, जीवन के लिए नई ऊर्जा!',
        'yoga_subtitle' => 'वनलाइफ फिटनेस परिवार की ओर से हार्दिक स्वागत - गौरी महाजन',
        'wellness_retreat' => 'वेलनेस रिट्रीट सोहला',
        'call_now' => 'कॉल करें',
        'whatsapp' => 'व्हाट्सएप',
        'address' => 'पता',
        'fullname' => 'पूरा नाम',
        'mobile' => 'मोबाइल नंबर',
        'email' => 'ईमेल पता',
        'city' => 'शहर',
        'service_interest' => 'इच्छित सेवा',
        'message' => 'संदेश / पूछताछ',
        'upload_doc' => 'दस्तावेज़ अपलोड करें (वैकल्पिक)',
        'submit' => 'जमा करें',
        'suvichar' => 'शुभ संदेश / सुविचार',
        'date' => 'तारीख',
        'time' => 'समय',
        'classes_batches' => 'कक्षाएं और बैचों की जानकारी',
        'faq' => 'अक्सर पूछे जाने वाले प्रश्न (FAQ)',
        'privacy_policy' => 'गोपनीयता नीति',
        'terms' => 'नियम और शर्तें',
        'learn_more' => 'अधिक जानें',
        'donation' => 'दान और सहायता',
        'cp_benefits' => 'भागीदार लाभ और कमीशन संरचना',
        'success_msg' => 'आपका आवेदन सफलतापूर्वक जमा हो गया है! हम जल्द ही आपसे संपर्क करेंगे.',
        'error_msg' => 'कुछ गलत हो गया। कृपया पुन: प्रयास करें.',
        
        // Form & Slider translations
        'privacy_agree_text' => 'मैंने गोपनीयता नीति (Privacy Policy) पढ़ ली है और मैं उससे सहमत हूँ।',
        'placeholder_name' => 'उदा. गौरी महाजन',
        'placeholder_phone' => 'उदा. 9890349819',
        'placeholder_email' => 'उदा. name@example.com',
        'placeholder_city' => 'उदा. बदलापुर',
        'placeholder_message' => 'अधिक जानकारी लिखें...',
        'opt_general' => 'पूछताछ फॉर्म',
        'opt_yoga' => 'योग और जुम्बा कक्षाएं',
        'opt_realestate' => 'रियल एस्टेट जेव्ही (JV)',
        'opt_foods' => 'स्वस्त आहार और पोषण',
        'opt_socialwork' => 'सामाजिक कार्य',
        'opt_ngo' => 'NGO दान',
        'opt_cp' => 'चैनल पार्टनर',
        'slide2_title' => 'प्रीमियम प्रॉपर्टी इन्वेस्टमेंट्स',
        'slide2_desc' => 'लक्जरी आवासीय परियोजनाओं, साइट विज़िट के अवसरों और अपने भविष्य के लिए अनुकूलित निवेश विकल्पों का पता लगाएं।',
        'slide3_title' => 'स्वस्थ पोषण और आहार',
        'slide3_desc' => 'सही शारीरिक तंदुरुस्ती और दीर्घायु के लिए अपने दैनिक व्यायाम दिनचर्या में पोषक तत्वों से भरपूर आहार शामिल करें।',
        'slide4_title' => 'सामाजिक पहल और कल्याण',
        'slide4_desc' => 'जरूरतमंदों के लिए सार्थक सामुदायिक विकास अभियान, पर्यावरण पहल और सहायता नेटवर्क बनाना।',
        'slide5_title' => 'महाजन चैरिटेबल ट्रस्ट',
        'slide5_desc' => 'शैक्षणिक और चिकित्सा सहायता के लिए समर्पित। आपका समर्थन जीवन को सशक्त बनाता है। आज ही दान करें।',
        'retreat_option' => 'नेचर्स कॉलिंग वेलनेस रिट्रीट (रु. ३६००/-)',
        
        // Card subtexts
        'card_yoga_desc' => 'वनलाइफ फिटनेस सेंटर, क्लासेस और रिट्रीट',
        'card_re_desc' => 'निवेश और प्रीमियम प्रॉपर्टी लिस्टिंग्स',
        'card_foods_desc' => 'जैविक पोषण और स्वस्थ जीवन योजनाएं',
        'card_social_desc' => 'कल्याणकारी योजनाएं और स्वयंसेवक गतिविधियां',
        'card_ngo_desc' => 'चैरिटेबल योगदान और दान',
        'card_cp_desc' => 'कमीशन और लाभ अर्जित करने के लिए पंजीकरण करें'
    ]
];

function __t($key) {
    global $translations, $active_lang;
    if (isset($translations[$active_lang][$key])) {
        return $translations[$active_lang][$key];
    }
    // Fallback to English
    if (isset($translations['en'][$key])) {
        return $translations['en'][$key];
    }
    return $key;
}

// Utility to switch translation keys dynamically in JavaScript
function get_translations_json() {
    global $translations;
    return json_encode($translations);
}
?>
