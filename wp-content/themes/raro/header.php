<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NEBE370LZK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NEBE370LZK');
</script>
<meta charset=<?php bloginfo( 'charset' ); ?>>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> - <?php the_title() ?></title>
<?php wp_head(); ?>
</head>
<body>
  
    <!-- Loader -->

    <div class="loader">
      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="loader-brand"> 
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>
    </div>

    <!-- Header -->

    <header id="top" class="<?php echo (is_page('home') || is_page('inicio')) ? 'header-home' : 'header-inner' ?>">
      <div class="brand-panel">
        <a href="<?php echo (pll_current_language() === 'en' ) ? site_url() : site_url('inicio'); ?>" class="brand js-target-scroll">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="RaRo Logo">
        </a>
        <div class="brand-name">RaRo</div>
        <?php if(is_page('home') || is_page('inicio')): ?>
        <div class="slide-number">
          <span class="current-number text-primary">0<span class="count">1</span></span>
          <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
        <?php endif;?>
      </div>
      <div class="header-phone"><a href="tel:+17863715657">+1 (786) 371-5657</a></div>
      <div class="vertical-panel"></div>
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title"><?php _e('Raro agency', 'raro') ?></div>
            <div class="line"></div>
         </div>
        <ul class="social-list">
          <li><a href="https://www.instagram.com/rarocompany/?hl=es-la" target="_blank" class="fa fa-instagram"></a></li>
          <li><a href="https://www.twitter.com/RaRoCompany" target="_blank" class="fa fa-twitter"></a></li>
          <li><a href="https://www.linkedin.com/company/rarocompany" target="_blank" class="fa fa-linkedin"></a></li>
          <li><a href="https://www.facebook.com/RaRoCompany" target="_blank" class="fa fa-facebook"></a></li>
         </ul>  
      </div> 

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="<?php echo site_url(); ?>" class="brand js-target-scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="RaRo Logo">
          </a>
          <ul class="navbar-desctop-menu">
            <?php if(is_page('home') || is_page('inicio')): ?>
            <li>
                <a href="#about" class="js-target-scroll"><?php _e('About us', 'raro') ?></a>
            </li>
            <li>
              <a href="#our-team" class="js-target-scroll"><?php _e('Our Team', 'raro') ?></a>
            </li>
            <li>
              <a href="#services" class="js-target-scroll"><?php _e('Services', 'raro') ?></a>
            </li>
            <?php else: ?>
            <li>
              <a href="<?php echo site_url() ?>"><?php _e('Home', 'raro') ?></a>
            </li>
            <?php endif ?>
            <li>
              <a href="#contact" class="js-target-scroll"><?php _e('Contact', 'raro') ?></a>
            </li>
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?>
          </ul>
        </div>
      </nav>

      <!-- Navigation Mobile -->

      <nav class="navbar-mobile">
        <a href="<?php echo site_url(); ?>" class="brand js-target-scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="RaRo Logo">
        </a>

        <!-- Navbar Collapse -->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile"> 
          <ul class="navbar-nav-mobile">
            <?php if(is_page('home') || is_page('inicio')): ?>
            <li>
                <a href="#about" class="js-target-scroll"><?php _e('About us', 'raro') ?></a>
            </li>
            <li>
              <a href="#our-team" class="js-target-scroll"><?php _e('Our Team', 'raro') ?></a>
            </li>
            <li>
              <a href="#services" class="js-target-scroll"><?php _e('Services', 'raro') ?></a>
            </li>
            <?php else: ?>
            <li>
              <a href="<?php echo site_url() ?>"><?php _e('Home', 'raro') ?></a>
            </li>
            <?php endif ?>
            <li>
              <a href="#contact" class="js-target-scroll"><?php _e('Contact', 'raro') ?></a>
            </li>
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?>
          </ul>
        </div>
      </nav> 
    </header>