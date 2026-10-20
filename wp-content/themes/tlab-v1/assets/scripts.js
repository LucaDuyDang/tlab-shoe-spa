/**
 * T'S LAB - Main JavaScript
 * Author: Luca (Duy)
 * Description: Xử lý toàn bộ tương tác động cho Trang chủ T's Lab
 */

document.addEventListener('DOMContentLoaded', () => {

    /* ==========================================
       1. HEADER NAV SCROLL EFFECT
       - Mặc định: Header tĩnh ở đỉnh trang
       - Khi mở comment CSS (.navbar.scrolled): Sẽ bật hiệu ứng cuộn mờ
       ========================================== */
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        window.addEventListener('scroll', () => {
            // Khi cuộn xuống quá 50px sẽ tự thêm/bớt class 'scrolled'
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
    
    langSwitchers.forEach(lang => {
        lang.addEventListener('click', function() {
            langSwitchers.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });


    /* ==========================================
       3. SMOOTH SCROLL FOR ANCHOR LINKS
       ========================================== */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
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
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = newsletterForm.querySelector('input[type="email"]');
            
            if (emailInput && emailInput.value.trim() !== '') {
                alert(`Cảm ơn bạn! Email ${emailInput.value} đã được đăng ký nhận tin từ T's Lab.`);
                emailInput.value = '';
            }
        });
    }

});