<?php get_header(); ?>
<!-- Layout -->

<div class="layout">
    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();?>
    <!-- Home -->
    
    <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6" style="background: url(<?php the_post_thumbnail_url() ?>) 50% 0 no-repeat;">

      <!-- Lines -->

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
    </main>

    <div class="content">   
    
      <!-- Blog Details -->

      <section class="blog-details">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                <header class="post-header">
                  <h1><?php the_title() ?></h1>
                  <div class="blog-meta">
                    <div class="author">
                      by <a href="#"><?php the_author() ?></a>
                    </div>
                    <div class="time"><?php the_date() ?></div>
                  </div>
                </header>
                <div class="post-thumbnail">
                  <?php 
                    $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                  ?>
                  <img alt="<?php echo $alt ?>" class="img-responsive" src="<?php the_post_thumbnail_url() ?>">
                </div>
                <?php the_content() ?>
              </article>
            </div>
          </div>
        </div>
      </section>
      <?php endwhile; // End of the loop.?>  
<?php get_footer(); ?>