<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<main id="main">
  <?php
  get_template_part('template-parts/about');
  get_template_part('template-parts/services');
  get_template_part('template-parts/counter');
  get_template_part('template-parts/portfolio');
  get_template_part('template-parts/testimonials');
  get_template_part('template-parts/blog');
  get_template_part('template-parts/contact');
  ?>
</main><!-- End #main -->

<?php get_footer(); ?>