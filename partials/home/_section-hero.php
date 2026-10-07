<section class="hero" id="home" aria-label="Discover Pure Origin Agro" aria-roledescription="carousel">
  <?php
  $slides = array(
    array( 'banner.webp', 'Nature’s goodness.<br>Endless possibilities.', 'Carefully sourced fruit and vegetable powders, bringing the best of Indian agriculture to your products.', 'Explore our products', '/products/' ),
    array( 'banner-about.webp', 'Rooted in nature.<br>Chosen with care.', 'Quality ingredients begin at the source. Discover our approach to purity, consistency and dependable supply.', 'Discover our story', '/about-us/' ),
    array( 'banner.jpg', 'From Indian origins.<br>To global markets.', 'Sourcing, supply and export coordination for businesses around the world. Let’s grow together.', 'Work with us', '/contact-us/' )
  );
  foreach ( $slides as $i => $slide ) : ?>
  <div class="hero-slide<?php echo $i === 0 ? ' is-active' : ''; ?>" <?php if ( $i !== 0 ) echo 'hidden'; ?> role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( ($i + 1) . ' of 3' ); ?>">
    <img class="slide-image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $slide[0] ); ?>" alt="" <?php echo $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"'; ?>>
    <div class="wrap hero-copy">
      <div class="micro">PURE INGREDIENTS. GLOBAL POSSIBILITIES.</div>
      <h1><?php echo wp_kses_post( $slide[1] ); ?></h1>
      <div class="hero-rule"></div>
      <p><?php echo esc_html( $slide[2] ); ?></p>
      <a class="btn" href="<?php echo esc_url( home_url( $slide[4] ) ); ?>"><?php echo esc_html( $slide[3] ); ?> <b aria-hidden="true">→</b></a>
    </div>
  </div>
  <?php endforeach; ?>
  <div class="slider-controls" hidden>
    <button class="slide-arrow slide-prev" aria-label="Previous slide" type="button">‹</button>
    <div class="slide-dots"><?php foreach ( $slides as $i => $slide ) : ?><button type="button" class="slide-dot<?php echo $i === 0 ? ' is-active' : ''; ?>" aria-label="Show slide <?php echo esc_attr( $i + 1 ); ?>" aria-pressed="<?php echo $i === 0 ? 'true' : 'false'; ?>"></button><?php endforeach; ?></div>
    <button class="slide-pause" type="button" aria-label="Pause slideshow">Ⅱ</button>
    <button class="slide-arrow slide-next" aria-label="Next slide" type="button">›</button>
  </div>
</section>
