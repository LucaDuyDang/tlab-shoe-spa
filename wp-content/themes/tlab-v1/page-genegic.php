<?php
/* Template Name: Generic Template */
get_header();
?>

<div id="page-wrapper">

    <header id="header">
        <h1><a href="<?php echo home_url(); ?>">TsLab Shoes Spa</a></h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <section id="wrapper">
        <header>
            <div class="inner">
                <h2>Generic</h2>
                <p>Phasellus non pulvinar erat. Fusce tincidunt nisl eget ipsum.</p>
            </div>
        </header>

        <div class="wrapper">
            <div class="inner">
                <h3 class="major">Lorem ipsum dolor</h3>
                <p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor...</p>

                <h3 class="major">Vitae phasellus</h3>
                <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat.</p>

                <section class="features">
                    <article>
                        <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic04.jpg" alt="" /></a>
                        <h3 class="major">Sed feugiat lorem</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic05.jpg" alt="" /></a>
                        <h3 class="major">Nisl placerat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                </section>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="inner">
            <h2 class="major">Get in touch</h2>
            <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat.</p>
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
                <li class="icon solid fa-home">TsLab Inc<br />TP. Hồ Chí Minh, Việt Nam</li>
                <li class="icon solid fa-phone">(000) 000-0000</li>
                <li class="icon solid fa-envelope"><a href="#">contact@tslab.vn</a></li>
                <li class="icon brands fa-facebook-f"><a href="#">facebook.com/tslab</a></li>
                <li class="icon brands fa-instagram"><a href="#">instagram.com/tslab</a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; TsLab. All rights reserved.</li>
                <li>Design: <a href="#">Luca</a></li>
            </ul>
        </div>
    </section>

</div>

<?php get_footer(); ?>