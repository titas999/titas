<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>
<div class="page-cover">
    <div class="cover-bg bg-img"
         data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/titas.webp"></div>
    <div id="particles-js" class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(2, 3, 10, 0.4)"></div>
</div>

<main class="page-main page-fullpage main-anim" id="mainpage">

<div class="section section-contact fp-auto-height-responsive no-slide-arrows ">
    <div class="section-wrapper center-vh dir-col anim">
        <div class="section-title text-center">
            <h2 class="display-4 display-title"><?php _e('Contact', 'titas'); ?></h2>
            <p><?php _e('Need Help? Don\'t Forget to Contact With Me', 'titas'); ?></p>
        </div>
        <div class="section-content reduced">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-7 text-left contact-left">
                    <form class="send_message_form message form" method="post" action="#" id="message_form">
                        <?php echo do_shortcode(' [ninja_form id=1] ');?>
                    </form>
                </div>
                <div class="col-12 col-md-12 col-lg-5 text-left contact-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.png" alt="contact">
                    <div>
                        <h4>Address</h4>
                        <p>House# 14, Road# 4, Block# H</p>
                        <p>Eastern Housing, Mirpur-12, Dhaka</p>
                    </div>
                    <div>
                        <h4>Phone</h4>
                        <p>+ 88 01723 987 605</p>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p class="email-add"><a href="mailto:support@anisuzzaman.me">support@anisuzzaman.me</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>



<?php get_footer(); ?>
