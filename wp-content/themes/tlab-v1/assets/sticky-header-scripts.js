/**
 * T'S LAB - Optional Sticky / Fade Header Effect
 * File bổ trợ: Dùng khi muốn Header cố định hoặc mờ nhẹ khi cuộn
 */

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    
    if (!navbar) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            // Khi cuộn xuống quá 80px: Đổi sang cố định và làm mờ nền
            navbar.style.position = 'fixed';
            navbar.style.backgroundColor = 'rgba(13, 13, 13, 0.85)';
            navbar.style.backdropFilter = 'blur(8px)';
            navbar.style.padding = '18px 60px';
            navbar.style.transition = 'all 0.3s ease';
            navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.4)';
        } else {
            // Khi ở trên cùng: Trả về trạng thái ban đầu
            navbar.style.position = 'absolute';
            navbar.style.backgroundColor = 'transparent';
            navbar.style.backdropFilter = 'none';
            navbar.style.padding = '30px 60px';
            navbar.style.boxShadow = 'none';
        }
    });
});