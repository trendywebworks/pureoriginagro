<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('&laquo;', true, 'right'); ?></title>
  <?php wp_head(); ?>
  <script>document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Mono&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
    rel="stylesheet">
  
  <?php $t=time(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/style.css?v=' . $t ); ?>">

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?v=<?php echo($t); ?>" defer></script>
</head>

<body <?php body_class(); ?>>
  <header id="site-header">
      <div class="wrap nav"><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="logo-mark">✦</span><span>PURE ORIGIN<br>AGRO</span></a>
      <nav aria-label="<?php esc_attr_e( 'Main Navigation', 'wptuts' ); ?>">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'main_nav',
          'container'      => false,
          'menu_class'     => 'main-menu-list',
          'depth'          => 1,
          'fallback_cb'    => 'pure_origin_fallback_main_menu',
        ) );
        ?>
      </nav>
      <div class="nav-right"><span class="micro">India · Global trade</span><a class="btn nav-cta"
          href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Get in touch <b>↗</b></a></div>
    </div>
  </header>
  <main>
