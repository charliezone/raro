<?php get_header(); ?>
<!-- Layout -->

<div class="layout">
<!-- Home -->
    
    <main class="main">

    <div class="arrow-left"></div>
    <style>.arrow-left:after{content: '<?php _e('Prev', 'raro') ?>';}</style>
    <div class="arrow-right"></div>
    <style>.arrow-right:before {content: '<?php _e('Next', 'raro') ?>';}</style>

    <!-- Start revolution slider -->

    <div class="rev_slider_wrapper">
    <div id="rev_slider" class="rev_slider fullscreenbanner">
        <ul>

            <!-- Slide 1 -->

            <li  data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

                <!-- Main image-->

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <!-- Layer 1 -->

                <div class="slide-title tp-caption tp-resizeme" 
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['65']"
                data-width="['1100','700','550']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05"><?php _e('DON’T ASK PERMISSION TO FLY', 'raro') ?>
                </div>

                <!-- Layer 2 -->

                <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18','25', '25', '25']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" 
                data-transform_out="opacity:0;s:1000;s:1000;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none"><?php _e('Limiting yourself because you’re unsure<br/>of your success and fear failure is the wrong attitude.<br/>Trust us and trust yourself, lets reach higher', 'raro') ?>. 
                </div>

                <!-- Layer 3 -->

                <div class="tp-caption"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"><a href="#contact" class="btn cta js-target-scroll"><?php _e('Contact us', 'raro') ?> <i class="icon-next"></i></a>
                </div>
            </li>

            <!-- Slide 2 -->

            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

                <!-- Main image -->

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <!-- Layer 1 -->

                <div class="slide-title tp-caption tp-resizeme" 
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-55']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75','65']"
                data-width="['1100','700','500']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on"
                data-elementdelay="0.05"><?php _e('IF YOU WANT IT<br />COME AND GET IT', 'raro') ?>
                </div>


                <!-- Layer 2 -->

                <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18','25', '25', '25']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" 
                data-transform_out="opacity:0;s:1000;s:1000;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none"><?php _e('It’s all about what you want and your commitment to it.<br />There is nothing impossible. It’s all up to you.<br />And you found us', 'raro') ?>. 
                </div>

                 <!-- Layer 3 -->

                 <div class="tp-caption"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"><a href="#contact" class="btn cta js-target-scroll"><?php _e('Contact us', 'raro') ?> <i class="icon-next"></i></a>
                </div>
            </li>

            <!-- Slide 3 -->

            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

                <!-- Main image-->

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <!-- Layer 1 -->

                <div class="slide-title tp-caption tp-resizeme" 
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75', '65']"
                data-width="['1000','700','550']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on"
                data-elementdelay="0.05"><?php _e('WHAT ARE YOU AFRAID OF?', 'raro') ?>
                </div>


                <!-- Layer 2 -->

                <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18','25', '25', '25']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" 
                data-transform_out="opacity:0;s:1000;s:1000;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none"><?php _e('Use your fear to push your business forward.<br />Be know. be found and break the barriers.<br />We’re here to back you up', 'raro') ?>.
                </div>

                <!-- Layer 3 -->

                <div class="tp-caption"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"><a href="#contact" class="btn cta js-target-scroll"><?php _e('Contact us', 'raro') ?> <i class="icon-next"></i></a>
                </div>
            </li>

            <!-- Slide 4 -->

            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

                <!-- Main image-->

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <!-- Layer 1 -->

                <div class="slide-title tp-caption tp-resizeme" 
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75', '65']"
                data-width="['1000','700','550']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on"
                data-elementdelay="0.05"><?php _e('ARE YOU READY<br />TO RUMBLE?', 'raro') ?>
                </div>


                <!-- Layer 2 -->

                <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18','25', '25', '25']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" 
                data-transform_out="opacity:0;s:1000;s:1000;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none"><?php _e('Let’s do it, head over to contact us<br />and honor us with your trust!<br />We’ll grow together!', 'raro') ?> 
                </div>

                <!-- Layer 3 -->

                <div class="tp-caption"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"><a href="#contact" class="btn cta js-target-scroll"><?php _e('Contact us', 'raro') ?> <i class="icon-next"></i></a>
                </div>
            </li>
        </ul>
    </div>
    </div>
    </main>

    <div class="content">   

    <!-- About  -->

    <section id="about" class="about section">
        <div class="container">
            <header class="section-header">
            <h2 class="section-title"><?php _e('About <span class="text-primary">Us</span>', 'raro') ?></h2>
            <strong class="fade-title-left"><?php _e('About', 'raro') ?></strong>
            </header>
            <div class="section-content">
            <div class="row-base row">
                <div class="col-base col-sm-6 col-md-4">
                <h3 class="col-about-title"><?php _e('We turn ideas into works of art', 'raro') ?><span class="text-primary">.</span></h3>
                <div class="col-about-info">
                    <p><?php _e('RaRo Company is a young multimedia agency backed by a very experienced crew. With a fresh and visionary character based on a solid business model, where our team restlessly work on our clients and associates goals', 'raro') ?>.</p>
                    <p><?php _e('We know we must wear different hats to meet individual’s needs. And we are ready to accept the challenges. “No” is not a word in our vocabulary. We plan, we build, we succeed. And we do it quick', 'raro') ?>.</p>
                    <p><?php _e('The trust of our clients, is our highest pride', 'raro') ?>.</p>
                </div>
                </div>
                <div class="col-base col-about-spec col-sm-6 col-md-4">
                <h3 class="col-about-title"><?php _e('Our<br>specialization', 'raro') ?><span class="text-primary">:</span></h3>
                <div class="service-item">
                    <img alt="Music Service" width="46" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-icon/music.png">
                    <h4><?php _e('Music', 'raro') ?></h4>
                </div>
                <div class="service-item">
                    <img alt="Talent Service" width="58" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-icon/talent.png">
                    <h4><?php _e('Talent', 'raro') ?></h4>
                </div>
                <div class="service-item">
                    <img alt="Business Service" width="58" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-icon/business.png">
                    <h4><?php _e('Business', 'raro') ?></h4>
                </div>
                <div class="service-item">
                    <img alt="Marketing Service" width="58" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-icon/marketing.png">
                    <h4><?php _e('Marketing', 'raro') ?></h4>
                </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-base col-about-img col-sm-6 col-md-4">
                <img alt="RaRo Banner" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/raro-banner.jpg">
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Projects -->

    <section class="projects section" id="services">
        <div class="container">
            <h2 class="section-title"><?php _e('Our <span class="text-primary">Services</span>', 'raro') ?></h2>
        </div>
        <div class="section-content">
            <div class="projects-carousel js-projects-carousel js-projects-gallery">
            <div class="project">
                <a href="#" title="<?php _e('Music Production', 'raro') ?>" target="music-production">
                <figure>
                    <img alt="<?php _e('Music Production', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/music-production.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Music Production', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project ">
                <a href="#" title="<?php _e('Music Distribution', 'raro') ?>" target="music-distribution">
                <figure>
                    <img alt="<?php _e('Music Distribution', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/music-distribution.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Music Distribution', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Talent Development', 'raro') ?>" target="talent-development">
                <figure>
                    <img alt="<?php _e('Talent Development', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/talent-development.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Talent Development', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Music Marketing', 'raro') ?>" target="music-marketing">
                <figure>
                    <img alt="<?php _e('Music Marketing', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/music-marketing.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Music Marketing', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Talent Management', 'raro') ?>" target="talent-management">
                <figure>
                    <img alt="<?php _e('Talent Management', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/talent-management.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Talent Management', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Business Development', 'raro') ?>" target="business-development">
                <figure>
                    <img alt="<?php _e('Business Development', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/businness-development.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Business Development', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Business Restructure', 'raro') ?>" target="business-restructure">
                <figure>
                    <img alt="<?php _e('Business Restructure', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/business-restructure.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Business Restructure', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Business Marketing', 'raro') ?>" target="business-marketing">
                <figure>
                    <img alt="<?php _e('Business Marketing', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/business-marketing.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Business Marketing', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Graphic Design', 'raro') ?>" target="graphic-design">
                <figure>
                    <img alt="<?php _e('Graphic Design', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/graphic-design.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Graphic Design', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Content Distribution', 'raro') ?>" target="content-distribution">
                <figure>
                    <img alt="<?php _e('Content Distribution', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/content-distribution.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Content Distribution', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Release Strategy', 'raro') ?>" target="release-strategy">
                <figure>
                    <img alt="<?php _e('Release Strategy', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/release-strategy.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Release Strategy', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Paid Campaigns', 'raro') ?>" target="paid-campaigns">
                <figure>
                    <img alt="<?php _e('Paid Campaigns', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/paid-campaigns.jpg">
                    <figcaption>
                    <div class="project-category-container">    
                        <h4 class="project-category">
                            <?php _e('Paid Campaigns', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Branding', 'raro') ?>" target="branding">
                <figure>
                    <img alt="<?php _e('Branding', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/branding.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Branding', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Social Media Management', 'raro') ?>" target="social-media-management">
                <figure>
                    <img alt="<?php _e('Social Media Management', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/social-media.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Social Media Management', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="project">
                <a href="#" title="<?php _e('Audiovisuals', 'raro') ?>" target="audiovisuals">
                <figure>
                    <img alt="<?php _e('Audiovisuals', 'raro') ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/branding.jpg">
                    <figcaption>
                    <div class="project-category-container">
                        <h4 class="project-category">
                            <?php _e('Audiovisuals', 'raro') ?>
                        </h4>
                    </div>
                    <div class="project-zoom"></div>
                    </figcaption>
                </figure>
                </a>
            </div>
            </div>
        </div>
    </section>

    <!-- Experience -->

    <section class="experience section">
    <div class="container">
        <div class="text-parallax">
            <img alt="<?php _e('30 years of services', 'raro') ?>" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/30years.png">
        </div>
        <h4 class="experience-info wow fadeInRight"><?php _e('<span class="text-primary">Years of successful work</span><br> in the market', 'raro') ?></h4>
    </div>
    </section>

    <!-- Clients  -->

    <section class="clients section" style="display: none;">
        <div class="container">
            <header class="section-header">
            <h2 class="section-title"><?php _e('Our <span class="text-primary">clients</span>', 'raro') ?></h2>
            <strong class="fade-title-left"><?php _e('clients', 'raro') ?></strong>
            </header>
            <div class="section-content">
            <ul class="clients-list">
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/1.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/2.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/3.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/4.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/5.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/1.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/2.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/3.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/4.png"></a>
                </li>
                <li class="client">
                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/5.png"></a>
                </li>
            </ul>
            </div>
            <div class="section-content">
            <a href="#" class="btn btn-shadow-2"><?php _e('Work together', 'raro') ?> <i class="icon-next"></i></a>
            </div>
        </div>
    </section>

    <section class="our-team section" id="our-team">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title"><?php _e('Our <span class="text-primary">Team</span>', 'raro') ?></h2>
                <strong class="fade-title-left"><?php _e('Our Team', 'raro') ?></strong>
            </header>
            <div class="section-content">
                <div class="row team-container">
                    <div class="col-lg-3">
                        <div class="member">
                            <div class="imagen-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/herling.jpg" alt="<?php _e('Herling Founder & Ceo', 'raro') ?>">
                            </div>
                            <div class="member-content">
                                <h3 class="name">Herling Ana Rosell Chapelín</h3>
                                <small class="job"><?php _e('Founder & Ceo', 'raro') ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="member">
                            <div class="imagen-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/ariel.jpg" alt="<?php _e('Ariel Founder & Ceo', 'raro') ?>">
                            </div>
                            <div class="member-content">
                                <h3 class="name">Ariel Ragués</h3>
                                <small class="job"><?php _e('Founder & Ceo', 'raro') ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="member">
                            <div class="imagen-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/eduardo.jpg" alt="<?php _e('Eduardo Marketing Ceo', 'raro') ?>">
                            </div>
                            <div class="member-content">
                                <h3 class="name">Eduardo González</h3>
                                <small class="job"><?php _e('Marketing Ceo', 'raro') ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="member">
                            <div class="imagen-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/carlos.jpg" alt="<?php _e('Carlos Rafael Lead Web Developer', 'raro') ?>">
                            </div>
                            <div class="member-content">
                                <h3 class="name">Carlos Rafael</h3>
                                <small class="job"><?php _e('Lead Web Developer', 'raro') ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row team-container">
                    <div class="col-lg-3 visible-lg"></div>
                    <div class="col-lg-3">
                        <div class="member">
                            <div class="imagen-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/joshua.jpg" alt="<?php _e('Joshua Social Media Manager', 'raro') ?>">
                            </div>
                            <div class="member-content">
                                <h3 class="name">Joshua Ragués</h3>
                                <small class="job"><?php _e('Social Media Manager', 'raro') ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="member">
                            <div class="imagen-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/ricardo.jpg" alt="<?php _e('Ricardo Arranger', 'raro') ?>">
                            </div>
                            <div class="member-content">
                                <h3 class="name">Ricardo Ragues</h3>
                                <small class="job"><?php _e('Arranger', 'raro') ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Modal  -->
    <div class="modal-container" id="music-production">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/music-production.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/music-production.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Music Production', 'raro') ?></h2>
                    <p><?php _e('We oversee and manage the sound recording and production of our artists to ensure you present top quality material as well as audiovisuals. We cover instruments, beats, mixing and master, all handled with extreme care to satisfy your most demanding audience', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="music-distribution">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/music-distribution.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/music-distribution.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Music Distribution', 'raro') ?></h2>
                    <p><?php _e('It’s crucial to promoting music. Your music will be at the fingertip of your fans. As easy as it sounds, it’s not. Among all the details to address is collecting all your royalties, even those you didn’t even know about', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="talent-development">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/talent-development.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/talent-development.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Talent Development', 'raro') ?></h2>
                    <p><?php _e('Is the carterpillar to butterfly transition.  You will have personalized support to build a professional career in the entertainment industry.  You bring in your talent and dreams, we do the rest', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="music-marketing">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/music-marketing.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/music-marketing.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Music Marketing', 'raro') ?></h2>
                    <p><?php _e('Marketing and promotion are the processes of letting your audience know you’re here to stay and make history together. It’s an art that requires numerous hours of effort and planning. We’re great at it', 'raro') ?>. </p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="talent-management">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/talent-management.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/talent-management.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Talent Management', 'raro') ?></h2>
                    <p><?php _e('An artist needs a representative, an adviser to asssist in your growth and handle not only your public relations, but negotiations and coordinations as well.  We’ve got you', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="business-development">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/business-development.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/business-development.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Business Development', 'raro') ?></h2>
                    <p><?php _e('Being an entrepreneaur is a constant challenge. Walk with us in your start up process and will walk with you the path of quick growth and success', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="business-restructure">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/business-restructure.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/business-restructure.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Business Restructure', 'raro') ?></h2>
                    <p><?php _e('Businesses have many external factors that affect the growth and success process and is not always a good idea to be self sufficient. We create a rescue plan by restructuring certain or all areas of the business to put it back on track', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="business-marketing">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/business-marketing.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/business-marketing.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Business Marketing', 'raro') ?></h2>
                    <p><?php _e('You may continue to believe advertising is not needed in your business and that’s ok if you don’t want to grow, but if you’re set on reaching higher, marketing and promoting is the only way you will be known and found. Our team has many years of experience in the field', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="graphic-design">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/graphic-design.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/graphic-design.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Graphic Design', 'raro') ?></h2>
                    <p><?php _e('We love to show off our graphic designers talents. They’re an important piece in our team and they will dress you up for victory', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="content-distribution">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/content-distribution.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/content-distribution.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Content Distribution', 'raro') ?></h2>
                    <p><?php _e('Coco Chanel said; "In order to be irreplaceable one must always be different" and our content team abides by it', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="release-strategy">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/release-strategy.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/release-strategy.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Release Strategy', 'raro') ?></h2>
                    <p><?php _e('"Release" is a "big" word and that’s why it must be mafnificent. We cover all areas of the release and make sure you boom', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="paid-campaigns">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/paid-campaigns.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/paid-campaigns.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Paid Campaigns', 'raro') ?></h2>
                    <p><?php _e('There may be necessary to give it you a little push and we know exactly how to target the correct campaign', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="branding">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/branding.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/branding.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Branding', 'raro') ?></h2>
                    <p><?php _e('Your brand will be created and promoted as soon as we define it by relevance depending on the scenario and intended target audience', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="social-media-management">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/social-media-management.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/social-media-management.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Social Media Management', 'raro') ?></h2>
                    <p><?php _e('Digital era has brought us together and now, more than ever you need to engage with your audience and our social media team is passionate about it. We will develop the best strategy to approach your relationship', 'raro') ?>. </p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

    <div class="modal-container" id="audiovisuals">
        <article class="blog service-modal">
            <div class="row">
                <div class="blog-thumbnail col-md-8">
                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/audiovisuals.jpg);"></div>
                    <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/inside/audiovisuals.jpg"></div>
                </div>
                <div class="blog-info col-md-4">
                    <h2 class="blog-title"><?php _e('Audiovisuals', 'raro') ?></h2>
                    <p><?php _e('They are an essential part of promoting. They current need for visualization is at its top level and that need must be fed. Our audiovisuals team conforms of amazing artists and professionals to create music videos, business presentation videos, advertising spots from beginning to end. It doesn’t matter if you’re an artist, an influencer, a business, the need is still the same', 'raro') ?>.</p>
                </div>
            </div>
            <a href="#" class="close-btn">X</a>
        </article>
    </div>

<?php get_footer(); ?>