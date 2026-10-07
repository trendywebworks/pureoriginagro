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
  
  <?php $t = filemtime( get_template_directory() . '/assets/css/style.css' ); $js_version = filemtime( get_template_directory() . '/assets/js/main.js' ); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/style.css?v=' . $t ); ?>">

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?v=<?php echo esc_attr( $js_version ); ?>" defer></script>
</head>

<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
  <a class="skip-link" href="#main-content">Skip to content</a>
  <div class="utility-bar"><div class="wrap"><span>Rooted in India. Growing connections worldwide.</span><a href="mailto:info@pureoriginagro.com">info@pureoriginagro.com</a></div></div>
  <header id="site-header">
      <div class="wrap nav"><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Pure Origin Agro home', 'wptuts' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-pure-origin-agro.png' ); ?>" alt="<?php esc_attr_e( 'Pure Origin Agro', 'wptuts' ); ?>"></a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Open navigation"><span></span><span></span><span></span></button>
      <nav id="primary-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'wptuts' ); ?>">
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
      <div class="nav-right"><span class="micro">Natural ingredients</span><a class="btn nav-cta"
          href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Get in touch <b>↗</b></a></div>
    </div>
  </header>
  <main id="main-content">
