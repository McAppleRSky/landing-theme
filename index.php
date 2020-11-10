<?php get_header(); ?>
<main class="main">
  <div class="container">
    <div class="main_title">
      <?php the_field('main_title') ?>
    </div>
    <div class="main_text">
      <?php the_field('main_text') ?>
    </div>
    <div class="main_img">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main_img.png" alt="">
    </div>
    <div class="project">
      <div class="project_title">
        <?php the_field('project_title') ?>
      </div>

      <div class="project_item">
        <?php
        $posts = get_field('project_item');
        if( $posts ): ?>
        <ul>
        <?php foreach( $posts as $post): ?>
          <?php setup_postdata($post); ?>
          <li>
            <div class="project_name">
              <?php the_field('project_name'); ?>
            </div>
            <div class="project_size">
              <?php the_field('project_size'); ?>
            </div>
            <div class="project_area">
              <?php the_field('project_area'); ?>
            </div>
            <div class="project_price">
              <?php the_field('project_price'); ?>
            </div>
            <div class="project_images">
              <div class="project_images-item">
                <img src="<?php the_field('project_images-item-1'); ?>" alt="">
              </div>
              <div class="project_images-item">
                <img src="<?php the_field('project_images-item-2'); ?>" alt="">
              </div>
            </div>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="download">
    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home-download.png" alt="">
    <div class="download_link">
      <a href="<?php the_field('download_link') ?>" download>СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
    </div>
  </div>
  <div class="container">
    <div class="gallery"></div>
    <div class="gallery_title">
      <?php the_field('gallery_title') ?>
    </div>
    <div class="gallery_text">
      <?php the_field('gallery_text') ?>
    </div>
    <div id="gallery_inner">
      <?php the_field('photo') ?>
    </div>
    <div class="main_img">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main_img.png" alt="">
    </div>
  </div>
</main>
<?php get_footer(); ?>
