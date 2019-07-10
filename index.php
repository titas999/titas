<?php get_header(); ?>


    <div class="page-cover">
        <div class="cover-bg bg-img"
             data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/titas_twp.jpeg"></div>
        <div id="particles-js" class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(2, 3, 10, 0.4)"></div>
    </div>


    <main class="page-main page-fullpage main-anim" id="mainpage">

        <div class="section section-home fullscreen-md fp-auto-height-responsive main-home" data-section="home">
            <div class="section-wrapper center-vh dir-col anim">
                <div class="section-content reduced text-center">
                    <div class="row">
                        <div class="col-12 col-md-12 text-center">
                            <div class="title-desc">
                                <h2 class="display-4 display-title home-title anim-1"><?php _e('Anisuzzaman','titas') ?></h2>
                                <h4 class="anim-2 opacity-75"><?php _e('Professional WordPress Expert, build your website with .
                                    Today’s
                                    progress was yesterday’s plan.','titas') ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">About Me</span>
                    </a>
                </footer>
            </div>
        </div>


        <div class="section section-description fp-auto-height-responsive about-section" data-section="about">
            <div class="section-wrapper center-vh dir-col anim">
                <div class="section-title text-center">
                    <h2 class="display-4 display-title anim-2 mb-32">About Me</h2>
                </div>
                <div class="section-content reduced">
                    <div class="row">
                        <div class="col-12 col-md-4 text-left">
                            <div class="title-desc pr-4">
                                <h2 class="display-5 anim-2">Our mission gives solution</h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 text-left mission-border anim-2">
                            <div class="title-desc anim-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada
                                    feugiat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada
                                    feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque
                                    convallis pharetra tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">Features</span>
                    </a>
                </footer>
            </div>
        </div>


        <div class="section services section-list-feature fp-auto-height-responsive " data-section="services">
            <div class="section-wrapper twoside center-vh dir-col anim">
                <div class="anim-2 text-center mb-3">
                    <h2 class="display-4 display-title">Features</h2>
                    <p>Our awesome services which we provide for your needs</p>
                </div>
                <div class="item row justify-content-between fade-1">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="section-content reduced">
                            <div class="media">
                                <div class="media-body">
                                    <i class="icon icon ion-code-working"></i>
                                    <h4>Development</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada
                                        feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h4>Marketing</h4>
                                    <i class="icon ion-ios-pie-outline"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada
                                        feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="section-content reduced">
                            <div class="media">
                                <div class="media-body">
                                    <i class="icon ion-paintbrush"></i>
                                    <h4>Design</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada
                                        feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <i class="icon ion-android-globe"></i>
                                    <h4>SEO</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada
                                        feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">Services</span>
                    </a>
                </footer>
            </div>
        </div>

        <div class="section section-team fp-auto-height-responsive " data-section="team">
            <div class="section-wrapper center-vh dir-col anim">
                <div class="section-title text-center">
                    <h2 class="display-4 display-title anim-2 mb-32">Services</h2>
                </div>
                <div class="section-content anim text-center">
                    <div class="item row justify-content-between">
                        <?php
                        $titas_args = array(
                            'post_type' => 'service',
                        );
                        $query = new WP_Query($titas_args);
                        if (have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                $titas_current_page_id = get_the_ID();
                                $titas_page_meta = get_post_meta($titas_current_page_id, 'titas_service_type', true);
                                $titas_service_link = $titas_page_meta['service_link'];
                                ?>

                                <a href="<?php echo esc_url($titas_service_link); ?>" target="_blank">
                                    <div class="col-12 col-sm-6 col-md-4 center-vh">
                                        <div class="section-content anim translateUp">
                                            <div class="images text-center">
                                                <div class="img-avatar-alpha">
                                                    <div class="img-1 shadow">
                                                        <?php if (has_post_thumbnail()) {
                                                            the_post_thumbnail('img');
                                                        } ?>

                                                        <div class="legend pos-abs">
                                                            <div class="text-left">
                                                                <h5><?php the_title(); ?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php

                            endwhile;
                        endif;
                        ?>


                    </div>
                </div>
                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">Portfolio</span>
                    </a>
                </footer>
            </div>
        </div>


        <div class="section section-twoside fp-auto-height-responsive " data-section="portfolio">
            <div class="section-wrapper twoside dir-col anim">
                <div class="section-title center-vh  dir-col text-center">
                    <h2 class="display-4 display-title anim-2 mb-32"><?php _e('Portfolio', 'titas'); ?></h2>
                </div>
                <div class="slider-wrapper carousel-swiper-beta fade-1 carousel-smalls carousel-swiper-beta-demo">
                    <div class="slider-container swiper-container">
                        <ul class="item-list swiper-wrapper">
                            <?php
                            $titas_portfolio_args = array(
                                'post_type' => 'portfolio',
                            );
                            $query = new WP_Query($titas_portfolio_args);
                            if (have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                                    $titas_current_page_id = get_the_ID();
                                    $titas_page_meta = get_post_meta($titas_current_page_id, 'titas_portfolio', true);
                                    $titas_portfolio_link = $titas_page_meta['portfolio_link'];
                                    $titas_portfolio_desc = $titas_page_meta['portfolio_excerpt'];
                                    ?>
                                    <li class="slide-item swiper-slide">
                                        <div class="item-wrapper">
                                            <div class="illustr">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('img');
                                                } ?>
                                            </div>
                                            <a class="legend" href="<?php echo esc_url($titas_portfolio_link); ?>">
                                                <h2 class="display-4"><?php the_title(); ?></h2>
                                                <p><?php echo esc_html($titas_portfolio_desc); ?></p>
                                            </a>
                                        </div>
                                    </li>
                                <?php

                                endwhile;
                            endif;
                            ?>

                        </ul>
                    </div>
                    <div class="items-pagination bar"></div>
                </div>
                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">Testimonials</span>
                    </a>
                </footer>
            </div>
        </div>


        <div class="section testimonials section-twoside fp-auto-height-responsive " data-section="testimonials">
            <div class="section-wrapper twoside center-vh dir-col anim">
                <div class="anim-2 text-center mb-3">
                    <h2 class="display-4 display-title anim-2">Testimonials</h2>
                    <p>Our customers from worldwide & trusted us many years</p>
                </div>
                <div class="swiper-container carousel-swiper-beta slider-container fade-2 swiper-container-horizontal">
                    <div class="item-list swiper-wrapper">
                        <?php
                        $titas_testimonial_args = array(
                            'post_type' => 'testimonial',
                        );
                        $query = new WP_Query($titas_testimonial_args);
                        if (have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                ?>

                                <div class="swiper-slide swiper-slide-active">
                                    <div class="media-slide-item-gamma">
                                        <div class="media-content text-anim">
                                            <div class="row">
                                                <div class="col col-12">
                                                    <div class="media-image mb-3">
                                                        <?php if (has_post_thumbnail()) {
                                                            the_post_thumbnail('logo');
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="col col-12 m-auto">
                                                    <div class="media-body">
                                                        <p><?php the_content(); ?></p>
                                                        <h4 class=""><?php the_title(); ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            endwhile;
                        endif;
                        ?>

                    </div>
                    <nav class="items-navigation">
                        <div class="items-pagination bar swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet"></span>
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                            <span class="swiper-pagination-bullet"></span>
                        </div>
                    </nav>
                </div>
                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt"><?php _e('Contact Us', 'titas'); ?></span>
                    </a>
                </footer>
            </div>
        </div>
        <div class="section section-contact fp-auto-height-responsive no-slide-arrows " data-section="contact">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.png" alt="">
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
                                <p class="email-add"><a href="mailto:info@anisuzzaman.me">info@anisuzzaman.me</a></p>
                                <p class="email-add"><a href="mailto:support@anisuzzaman.me">support@anisuzzaman.me</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php get_footer(); ?>