<?php get_header(); ?>

    <!-- Contenido Menú -->
    <div class="container my-5">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <div class="text-justify">
        <?php the_content(); ?>
      </div>

      <?php endwhile; endif; ?>


    </div>
    <!-- Fin Contenido Menú -->

<?php get_footer(); ?>