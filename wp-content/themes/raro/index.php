<?php get_header(); ?>
<!-- Layout -->

<div class="layout">
    
    <!-- Home -->
    
    <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h2><?php _e('Blog', 'raro') ?></h2>
        </header>
      </div>

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
    
      <!-- Blog List  -->

      <section class="blog-list">
        <div class="container">
        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('blog'); ?>>
            <div class="row">
              <div class="blog-thumbnail col-md-8">
                <?php 
                  $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                ?>
                <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></div>
                <div class="blog-thumbnail-img visible-xs visible-sm"><img alt="<?php echo $alt ?>" class="img-responsive" src="<?php the_post_thumbnail_url() ?>"></div>
              </div>
              <div class="blog-info col-md-4">
                <h1 class="blog-title">
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h1>
                <?php the_excerpt() ?>
                <div class="blog-meta">
                  <div class="author">
                    by <span><?php the_author() ?></span>
                  </div>
                  <div class="time"><?php the_date() ?></div>
                </div>
                <div class="text-right"><a href="<?php the_permalink() ?>" class="read-more">Read more</a></div>
              </div>
            </div>
          </article>
        <?php endwhile; // End of the loop.?>
          <div class="section-content text-center">
            <?php the_posts_pagination() ?>
          </div>
        </div>
      </section>

<?php get_footer(); ?>