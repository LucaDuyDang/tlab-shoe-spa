/**
 * T'S LAB - Main JavaScript
 * Description: Xử lý tương tác cho Homepage và About Us
 */

document.addEventListener('DOMContentLoaded', () => {

    /* ==========================================
       1. HEADER NAV SCROLL EFFECT (DỰ PHÒNG)
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
       2. LANGUAGE SWITCHER (EN | VI)
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
       3. SMOOTH SCROLL CHO ANCHOR LINKS (#)
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