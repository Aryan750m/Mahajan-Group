// Main JavaScript Logic for Mahajan Website

// Live Clock & Calendar Updates
function updateClock() {
    const clockEl = document.getElementById('live-clock');
    const dayEl = document.getElementById('live-day');
    const dateEl = document.getElementById('live-date');
    
    if (!clockEl) return; // Exit if clock widgets aren't loaded on this page
    
    const now = new Date();
    
    // Format Time: HH:MM:SS
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    
    clockEl.innerText = `${hours}:${minutes}:${seconds}`;
    
    // Get active language from html tag
    const lang = document.documentElement.lang || 'mr';
    
    // Days and Months Translation Arrays
    const daysDict = {
        mr: ['रविवार', 'सोमवार', 'मंगळवार', 'बुधवार', 'गुरुवार', 'शुक्रवार', 'शनिवार'],
        en: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        hi: ['रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार', 'शनिवार']
    };
    
    const monthsDict = {
        mr: ['जानेवारी', 'फेब्रुवारी', 'मार्च', 'एप्रिल', 'मे', 'जून', 'जुलै', 'ऑगस्ट', 'सप्टेंबर', 'ऑक्टोबर', 'नोव्हेंबर', 'डिसेंबर'],
        en: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        hi: ['जनवरी', 'फरवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर']
    };
    
    const dayName = daysDict[lang][now.getDay()];
    const dateNum = now.getDate();
    const monthName = monthsDict[lang][now.getMonth()];
    const year = now.getFullYear();
    
    dayEl.innerText = dayName;
    if (lang === 'en') {
        dateEl.innerText = `${monthName} ${dateNum}, ${year}`;
    } else {
        dateEl.innerText = `${dateNum} ${monthName} ${year}`;
    }
}

// Language Switching Utility
function changeLanguage(langCode) {
    // Get current URL and update/set lang parameter
    const url = new URL(window.location.href);
    url.searchParams.set('lang', langCode);
    window.location.href = url.toString();
}

// Floating Inquiry Modal Functions
function openInquiryModal() {
    const modal = document.getElementById('inquiryModal');
    if (modal) {
        modal.style.display = 'flex';
    }
}

function closeInquiryModal() {
    const modal = document.getElementById('inquiryModal');
    if (modal) {
        modal.style.display = 'none';
    }
}

// Close modal when clicking outside contents
window.addEventListener('click', function(e) {
    const modal = document.getElementById('inquiryModal');
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

// Form validation
function validateForm(form) {
    const phoneInput = form.querySelector('input[name="phone"]');
    if (phoneInput) {
        const val = phoneInput.value.trim();
        if (val.length !== 10 || isNaN(val)) {
            alert("कृपया एक वैध १०-अंकी मोबाईल नंबर प्रविष्ट करा. / Please enter a valid 10-digit mobile number.");
            phoneInput.focus();
            return false;
        }
    }
    return true;
}

// FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    // Start Clock
    setInterval(updateClock, 1000);
    updateClock();
    
    // FAQ toggles
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(q => {
        q.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const isVisible = answer.style.display === 'block';
            
            // Close all answers
            document.querySelectorAll('.faq-answer').forEach(ans => ans.style.display = 'none');
            
            // Toggle clicked
            answer.style.display = isVisible ? 'none' : 'block';
        });
    });
    
    // Home Page Slider initialization
    const sliderContainer = document.querySelector('.slider-container');
    if (sliderContainer) {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.slider-btn-prev');
        const nextBtn = document.querySelector('.slider-btn-next');
        let currentSlide = 0;
        const totalSlides = slides.length;
        let sliderInterval;
        
        function showSlide(index) {
            if (index >= totalSlides) currentSlide = 0;
            else if (index < 0) currentSlide = totalSlides - 1;
            else currentSlide = index;
            
            sliderContainer.style.transform = `translateX(-${currentSlide * 20}%)`;
            
            // Update dots
            dots.forEach((dot, idx) => {
                if (idx === currentSlide) dot.classList.add('active');
                else dot.classList.remove('active');
            });
        }
        
        function nextSlide() {
            showSlide(currentSlide + 1);
        }
        
        function prevSlide() {
            showSlide(currentSlide - 1);
        }
        
        // Auto transition
        function startAutoSlider() {
            sliderInterval = setInterval(nextSlide, 5000);
        }
        
        function stopAutoSlider() {
            clearInterval(sliderInterval);
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                stopAutoSlider();
                nextSlide();
                startAutoSlider();
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                stopAutoSlider();
                prevSlide();
                startAutoSlider();
            });
        }
        
        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                stopAutoSlider();
                showSlide(idx);
                startAutoSlider();
            });
        });
        
        startAutoSlider();
    }
});
