<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
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

    <header id="top" class="<?php echo (is_page('home')) ? 'header-home' : 'header-inner' ?>">
      <div class="brand-panel">
        <a href="<?php echo site_url(); ?>" class="brand js-target-scroll">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="RaRo Logo">
        </a>
        <div class="brand-name">RaRo</div>
        <?php if(is_page('home')): ?>
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
            <div class="vertical-panel-title">Raro agency</div>
            <div class="line"></div>
         </div>
        <ul class="social-list">
          <li><a href="https://www.instagram/rarocompany" class="fa fa-instagram"></a></li>
          <li><a href="https://www.twitter.com/RaRoCompany" class="fa fa-twitter"></a></li>
          <li><a href="https://www.linkedin.com/raro-company" class="fa fa-linkedin"></a></li>
          <li><a href="https://www.facebook.com/RaRoCompany" class="fa fa-facebook"></a></li>
         </ul>  
      </div> 

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="<?php echo site_url(); ?>" class="brand js-target-scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="RaRo Logo">
          </a>
          <ul class="navbar-desctop-menu">
            <?php if(is_page('home')): ?>
            <li>
                <a href="#about" class="js-target-scroll">About us</a>
            </li>
            <li>
              <a href="#our-team" class="js-target-scroll">Our Team</a>
            </li>
            <li>
              <a href="#services" class="js-target-scroll">Services</a>
            </li>
            <?php else: ?>
            <li>
              <a href="<?php echo site_url() ?>">Home</a>
            </li>
            <?php endif ?>
            <li>
              <a href="#contact" class="js-target-scroll">Contact</a>
            </li>
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
            <?php if(is_page('home')): ?>
            <li>
                <a href="#about" class="js-target-scroll">About us</a>
            </li>
            <li>
              <a href="#our-team" class="js-target-scroll">Our Team</a>
            </li>
            <li>
              <a href="#services" class="js-target-scroll">Services</a>
            </li>
            <?php else: ?>
            <li>
              <a href="<?php echo site_url() ?>">Home</a>
            </li>
            <?php endif ?>
            <li>
              <a href="#contact" class="js-target-scroll">Contact</a>
            </li>
          </ul>
        </div>
      </nav> 
    </header>