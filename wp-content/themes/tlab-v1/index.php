<?php get_header(); ?>

<nav id="menu">
    <div class="inner">
        <h2>Menu</h2>
        <ul class="links">
            <li><a href="<?php echo home_url('#'); ?>">HomePage</a></li>
            <li><a href="<?php echo home_url('/page_generic'); ?>">About Us</a></li>
            <li><a href="<?php echo home_url('/page_elements'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('/page_contact'); ?>">Contact</a></li>
            <li><a href="<?php echo home_url('/page_for_business'); ?>">For Business</a></li>
        </ul>
        <a href="#" class="close">Close</a>
    </div>
</nav>

<section id="banner">
    <div class="inner">
        <div class="logo"><span class="icon fa-gem"></span></div>
        <h2>T's lab Shoes Spa</h2>
        <p>T’s Lab cung cấp dịch vụ chăm sóc giày chuyên nghiệp, kết hợp kỹ thuật cao và đội ngũ tận tâm. Chúng tôi mang đến trải nghiệm toàn diện từ làm sạch, sửa chữa đến bảo dưỡng chi tiết, giúp đôi giày của bạn luôn như mới, bền đẹp và thoải mái. Hãy đến T’s Lab để giữ gìn phong cách và giá trị cho đôi giày yêu thích của bạn.
            <a href="https://github.com/LucaDuyDang" target="_blank">Luca</a>
        </p>
    </div>
</section>

<section id="wrapper">

    <section id="one" class="wrapper spotlight style1">
        <div class="inner">
            <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="TsLab Service 1" /></a>
            <div class="content">
                <h2 class="major">DỊCH VỤ GIÀY</h2>
                <p>Chúng tôi cung cấp dịch vụ chăm sóc giày toàn diện, từ làm sạch, sửa chữa đến bảo dưỡng chi tiết.</p>
                <a href="#" class="special">Chi tiết</a>
            </div>
        </div>
    </section>

    <section id="two" class="wrapper alt spotlight style2">
        <div class="inner">
            <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="TsLab Service 2" /></a>
            <div class="content">
                <h2 class="major">DỊCH VỤ TÚI</h2>
                <p>Chúng tôi cung cấp dịch vụ chăm sóc túi toàn diện, từ làm sạch, sửa chữa đến bảo dưỡng chi tiết.</p>
                <a href="#" class="special">Chi tiết</a>
            </div>
        </div>
    </section>

    <section id="three" class="wrapper spotlight style3">
        <div class="inner">
            <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="TsLab Service 3" /></a>
            <div class="content">
                <h2 class="major">DỊCH VỤ NÓN</h2>
                <p>Chúng tôi cung cấp dịch vụ chăm sóc nón toàn diện, từ làm sạch, sửa chữa đến bảo dưỡng chi tiết.</p>
                <a href="#" class="special">Chi tiết</a>
            </div>
        </div>
    </section>

    <section id="four" class="wrapper alt style1">
        <div class="inner">
            <h2 class="major">Vitae phasellus</h2>
            <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci.</p>
            <section class="features">
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="" /></a>
                    <h3 class="major">Sed feugiat lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                    <a href="#" class="special">Learn more</a>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="" /></a>
                    <h3 class="major">Nisl placerat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                    <a href="#" class="special">Learn more</a>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="" /></a>
                    <h3 class="major">Ante fermentum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                    <a href="#" class="special">Learn more</a>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pic-round.jpg" alt="" /></a>
                    <h3 class="major">Fusce consequat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                    <a href="#" class="special">Learn more</a>
                </article>
            </section>
            <ul class="actions">
                <li><a href="#" class="button">Browse All</a></li>
            </ul>
        </div>
    </section>

</section>

<section id="footer">
    <div class="inner">
        <h2 class="major">Get in touch</h2>
        <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas.</p>
        <form method="post" action="#">
            <div class="fields">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message" /></li>
            </ul>
        </form>
        <ul class="contact">
            <li class="icon solid fa-home">
                T'sLab<br />
                93 Bùi Đình Tuý, Phường 14, Quận Bình Thạnh<br />
                Việt Nam, 07000
            </li>
            <li class="icon solid fa-phone">(+84) 767-010792</li>
            <li class="icon solid fa-envelope"><a href="mailto:info@tslabshoespa.com">info@tslabshoespa.com</a></li>
            <li class="icon brands fa-tiktok"><a href="#" target="_blank">tiktok.com/tslabshoespa</a></li>
            <li class="icon brands fa-facebook-f"><a href="#" target="_blank">facebook.com/tslabshoespa</a></li>
            <li class="icon brands fa-instagram"><a href="#" target="_blank">instagram.com/tslabshoespa</a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; T'sLab. All rights reserved.</li>
            <li>Design: <a href="https://github.com/LucaDuyDang" target="_blank">Luca</a></li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>