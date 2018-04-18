<?php get_header(); ?>

    <!-- Contenido Artículo -->
    <div class="container">
      <div class="row">
        <!-- Artículo -->
        <div class="col-12 col-md-9 my-5">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid' ) );
          }
          ?>
          <h2 class="my-3"><?php the_title(); ?></h2>
          <p class="lead"><small><?php echo get_the_date(); ?></small></p>
          <div class="text-justify">
            <?php the_excerpt(); ?>
            <?php the_content(); ?>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <!-- Fin Artículo -->

        <!-- aside -->
        <div class="col-12 col-md-3 my-4">
          <?php get_sidebar(); ?>
        </div>
        <!-- Fin aside -->
      </div>
    </div>
    <!-- Fin Contenido Artículo -->

<?php get_footer() ?>