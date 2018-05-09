<?php get_header(); ?>

<div class="o-error404 col-xs-24">
  <div class="o-error404Content col-xs-24">
    <img class="m-error404__image" src="<?= get_template_directory_uri() . '/images/404Error.svg'?>" alt="Error 404">
    <p class="m-error404__text">Oops, page not found.</p>
    <a href="<?= home_url() ?>" class="m-error404__button">Let's go home</a>
  <!-- .o-error404Content -->
  </div>
<!-- .error404 -->
</div>

<?php wp_footer(); ?>
