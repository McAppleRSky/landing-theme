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
        ПРОЕКТЫ ДОМОВ ИЗ БРУСА
      </div>
      <div class="project_item">
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
            <img src="img/project1-1.jpg" alt="">
          </div>
          <div class="project_images-item">
            <img src="img/project1-2.jpg" alt="">
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
    <a href="#">Скачать весь каталог домов</a>
  </div>
  <div class="container">
    <div class="gallery"></div>
    <div class="gallery_title">
      ФОТОГРАФИИ НАШИХ ДОМОВ
    </div>
    <div class="gallery_text">
      некоторые фотографии построенных нами домов и бань из бруса
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
