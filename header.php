<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('&laquo;', true, 'right'); ?></title>
  <?php wp_head(); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Mono&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
    rel="stylesheet">
  
  <?php $t=time(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo($t); ?>">

  <script src="assets/js/main.js?v=<?php echo($t); ?>" defer></script>
</head>

<body <?php body_class(); ?>>
  <header id="site-header">
      <div class="wrap nav"><a class="logo" href="#home"><span class="logo-mark">✦</span><span>PURE ORIGIN<br>AGRO</span></a>
      <nav><a href="#home">Home</a><a href="about.html">About Us</a><a href="services.html">Services</a><a
          href="products.html">Products</a><a href="contact.html">Contact</a></nav>
      <div class="nav-right"><span class="micro">India · Global trade</span><a class="btn nav-cta"
          href="contact.html">Get in touch <b>↗</b></a></div>
    </div>
  </header>
  <main>