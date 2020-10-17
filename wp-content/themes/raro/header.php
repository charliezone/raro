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

    <header id="top" class="header-home">
      <div class="brand-panel">
        <a href="#top" class="brand js-target-scroll">
          go<span class="text-primary">.</span>arch
        </a>
        <div class="brand-name">Go.arch</div>
        <div class="slide-number">
          <span class="current-number text-primary">0<span class="count">1</span></span>
          <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
      </div>
      <div class="header-phone">+7 (212) 674-25-10</div>
      <div class="vertical-panel"></div>
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Architecture buro</div>
            <div class="line"></div>
         </div>
        <ul class="social-list">
          <li><a href="" class="fa fa-instagram"></a></li>
          <li><a href="" class="fa fa-twitter"></a></li>
          <li><a href="" class="fa fa-behance"></a></li>
          <li><a href="" class="fa fa-facebook"></a></li>
         </ul>  
      </div> 

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="#top" class="brand js-target-scroll">
            go<span class="text-primary">.</span>arch
          </a>
          <ul class="navbar-desctop-menu">
            <li class="active">
              <a href="index.html">Home</a>
              <ul>
                <li><a href="../light/index.html">Home - Light</a></li>
                <li class="active">
                  <a href="index.html">Home - Dark</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="about.html">About us</a>
            </li>
            <li>
              <a href="projects.html">Projects</a>
              <ul>
                <li><a href="projects.html">Projects - List</a></li>
                <li>
                  <a href="project.html">Project - details</a>
                </li>
              </ul>
            </li>  
            <li>
              <a href="blog.html">Blog</a>
              <ul>
                <li><a href="blog.html">Blog - List</a></li>
                <li>
                  <a href="blog-details.html">Blog - Post</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contacts.html">Contacts</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Navigation Mobile -->

      <nav class="navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
          go<span class="text-primary">.</span>arch
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
            <li class="active">
              <a href="#">Home <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="../light/index.html">Home - Light</a></li>
                <li class="active">
                  <a href="index.html">— Home - Dark</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="about.html">About us</a>
            </li>
            <li>
              <a href="#">Projects <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="projects.html">Projects - List</a></li>
                <li>
                  <a href="project.html">Project - details</a>
                </li>
              </ul>
            </li>  
            <li>
              <a href="#">Blog <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="blog.html">Blog - List</a></li>
                <li>
                  <a href="blog-details.html">Blog - Post</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contacts.html">Contacts</a>
            </li>
          </ul>
        </div>
      </nav> 
    </header>