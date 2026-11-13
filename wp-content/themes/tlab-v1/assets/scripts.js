/**
 * T'S LAB - Main JavaScript
 * Description: Xử lý tương tác cho toàn bộ các trang tĩnh (Homepage, About Us,...)
 */

document.addEventListener('DOMContentLoaded', () => {

    /* ==========================================
       1. HEADER NAV SCROLL EFFECT (DỰ PHÒNG)
       - Mặc định: CSS .navbar đang để position: absolute (tĩnh ở đỉnh trang)
       - Khi mở comment khối STICKY/FADE trong style.css, đoạn JS này sẽ tự kích hoạt
       ========================================== */
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }


    /* ==========================================
       2. LANGUAGE SWITCHER (CHUYỂN ĐỔI EN | VI)
       ========================================== */
    const langSwitchers = document.querySelectorAll('.lang-switch span');
    
    if (langSwitchers.length > 0) {
        langSwitchers.forEach(lang => {
            lang.addEventListener('click', function () {
                langSwitchers.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }


    /* ==========================================
       3. SMOOTH SCROLL CHO CÁC LIÊN KẾT NEO (#)
       ========================================== */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });


    /* ==========================================
       4. NEWSLETTER FORM SUBMIT HANDLER
       - Tương thích với cả class .newsletter-form (Homepage) & .newsletter-box (About)
       ========================================== */
    const newsletterForms = document.querySelectorAll('.newsletter-form, .newsletter-box');
    
    newsletterForms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = form.querySelector('input[type="email"]');
            
            if (emailInput && emailInput.value.trim() !== '') {
                alert(`Cảm ơn bạn! Email ${emailInput.value.trim()} đã được đăng ký nhận tin từ T's Lab.`);
                emailInput.value = '';
            }
        });
    });

});