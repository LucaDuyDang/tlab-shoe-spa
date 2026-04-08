(function($) {
    "use strict";

    // Đợi tài liệu sẵn sàng
    $(document).ready(function() {
        console.log("Miuw: jQuery đã sẵn sàng!");

        var $window = $(window),
            $body = $('body'),
            $header = $('#header'),
            $banner = $('#banner'),
            $wrapper = $('#page-wrapper');

        // 1. Khởi tạo Breakpoints (Cần file breakpoints.min.js)
        if (typeof breakpoints === 'function') {
            breakpoints({
                xlarge:  '(max-width: 1680px)',
                large:   '(max-width: 1280px)',
                medium:  '(max-width: 980px)',
                small:   '(max-width: 736px)',
                xsmall:  '(max-width: 480px)'
            });
            console.log("Breakpoints đã chạy.");
        }

        // 2. HIỆN BANNER NGAY LẬP TỨC (Xử lý is-preload)
        // Miu dùng cả 2 cách để đảm bảo Banner phải hiện lên
        $window.on('load', function() {
            window.setTimeout(function() {
                $body.removeClass('is-preload');
                console.log("Breakpoints đã chạy.");
            }, 100);
        });

        // Dự phòng nếu sự kiện 'load' bị trễ quá lâu
        window.setTimeout(function() {
            if ($body.hasClass('is-preload')) {
                $body.removeClass('is-preload');
                console.log("Xóa is-preload bằng dự phòng.");
            }
        }, 2000);

        // 3. Scrollex (Hiệu ứng Header)
        if ($banner.length > 0 && $header.hasClass('alt')) {
            $window.on('resize', function() { $window.trigger('scroll'); });

            if ($.fn.scrollex) {
                $banner.scrollex({
                    bottom:     $header.outerHeight(),
                    terminate:  function() { $header.removeClass('alt'); },
                    enter:      function() { $header.addClass('alt'); },
                    leave:      function() { $header.removeClass('alt'); }
                });
            }
        }

        // 4. Menu xử lý
        var $menu = $('#menu');

        if ($menu.length > 0) {
            $menu._locked = false;

            $menu._lock = function() {
                if ($menu._locked) return false;
                $menu._locked = true;
                window.setTimeout(function() { $menu._locked = false; }, 350);
                return true;
            };

            $menu._show = function() {
                if ($menu._lock()) $body.addClass('is-menu-visible');
            };

            $menu._hide = function() {
                if ($menu._lock()) $body.removeClass('is-menu-visible');
            };

            $menu._toggle = function() {
                if ($menu._lock()) $body.toggleClass('is-menu-visible');
            };

            $menu
                .appendTo($body)
                .on('click', function(event) {
                    event.stopPropagation();
                    $menu._hide();
                })
                .find('.inner')
                    .on('click', '.close', function(event) {
                        event.preventDefault();
                        event.stopPropagation();
                        event.stopImmediatePropagation();
                        $menu._hide();
                    })
                    .on('click', function(event) { event.stopPropagation(); })
                    .on('click', 'a', function(event) {
                        var href = $(this).attr('href');
                        event.preventDefault();
                        event.stopPropagation();
                        $menu._hide();
                        window.setTimeout(function() { window.location.href = href; }, 350);
                    });

            $body
                .on('click', 'a[href="#menu"]', function(event) {
                    event.stopPropagation();
                    event.preventDefault();
                    $menu._toggle();
                })
                .on('keydown', function(event) {
                    if (event.keyCode == 27) $menu._hide();
                });
            
            console.log("Menu đã được thiết lập.");
        }

    });

})(jQuery);