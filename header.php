<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" contenet="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'description' ); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap&subset=cyrillic" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header" style="background-image: url(img/bg.jpg);">
    <div class="header_inner">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home.png" alt="">
      <div class="headr_name">
        timber House
      </div>
      <a class="phone" href="tel:+79788167486">+7 (978) 816-74-86</a>
      <div class="header_title">
        Дома из бруса под ключ
      </div>
      <div class="header_sale">
        <img src="img/sale.png" alt="">
      </div>
    </div>
  </header>
