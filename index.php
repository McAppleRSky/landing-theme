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
        ПРОЕКТЫ ДОМОВ ИЗ БРУСА
      </div>
      <div class="project_item">
        <?php
        $posts = get_field('project_item');
        if( $posts ): ?>
        <ul>
        <?php foreach( $posts as $post): // variable mast be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <li>
            <?php the_field('project_name'); ?>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
        <!-- <div class="project_name">
          Дом №1
        </div>
        <div class="project_title">
          Размер дома: 6 х 6
        </div>
        <div class="project_area">
          Общая площадь дома: 54 кв. м
        </div>
        <div class="project_price">
          Стоимость - 402 000 рублей
        </div>
        <div class="project_images">
          <div class="project_images-item">
            <img src="img/project1-1.jpg" alt="">
          </div>
          <div class="project_images-item">
            <img src="img/project1-2.jpg" alt="">
          </div>
        </div> -->
        <div class="project_name">
          Дом №1
        </div>
        <div class="project_title">
          Размер дома: 6 х 6
        </div>
        <div class="project_area">
          Общая площадь дома: 54 кв. м
        </div>
        <div class="project_price">
          Стоимость - 402 000 рублей
        </div>
        <div class="project_images">
          <div class="project_images-item">
            <img src="img/project2-1.jpg" alt="">
          </div>
          <div class="project_images-item">
            <img src="img/project2-2.jpg" alt="">
          </div>
        </div>
        <div class="project_name">
          Дом №1
        </div>
        <div class="project_title">
          Размер дома: 6 х 6
        </div>
        <div class="project_area">
          Общая площадь дома: 54 кв. м
        </div>
        <div class="project_price">
          Стоимость - 402 000 рублей
        </div>
        <div class="project_images">
          <div class="project_images-item">
            <img src="img/project3-1.jpg" alt="">
          </div>
          <div class="project_images-item">
            <img src="img/project3-2.jpg" alt="">
          </div>
        </div>
      </div>
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
