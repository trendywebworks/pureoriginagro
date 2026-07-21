<?php 
/* Template Name: Products */
get_header(); 
?>


    <section class="page-hero products-hero">
      <div class="hero-media"></div>
      <div class="wrap page-hero-copy reveal">
        <div class="micro">Products</div>
        <h1>Focused ingredients with<br><em>wide application potential.</em></h1>
        <p>Our current portfolio is intentionally focused: natural dehydrated powders for brands that need clean,
          practical and export-ready ingredient options.</p>
      </div>
    </section>
    <section class="product-catalog">
      <div class="wrap">
        <div class="section-head reveal">
          <div>
            <div class="label">Ingredient portfolio</div>
            <h2 class="heading">Three powders,<br><em>many possibilities.</em></h2>
          </div>
          <p class="intro">Use these product cards as placeholders until final specifications, grades and packaging
            details are confirmed.</p>
        </div>
        <div class="catalog-grid reveal">
          <article class="catalog-card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-onions.webp' ); ?>"
              alt="Onion powder and onion ingredient">
            <div><span>DEHYDRATED VEGETABLE</span>
              <h3>Onion Powder</h3>
              <p>Suitable for seasoning blends, food manufacturing, sauces, snacks and ready-to-cook applications.</p>
              <ul>
                <li>Bulk supply enquiries</li>
                <li>Natural flavour profile</li>
                <li>Export-ready coordination</li>
              </ul><a class="text-arrow" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Request details <b>→</b></a>
            </div>
          </article>
          <article class="catalog-card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-beetroot.webp' ); ?>" alt="Beetroot ingredient">
            <div><span>DEHYDRATED VEGETABLE</span>
              <h3>Beetroot Powder</h3>
              <p>Known for its vibrant natural colour and formulation flexibility across food, wellness and cosmetic
                uses.</p>
              <ul>
                <li>Colour-rich ingredient option</li>
                <li>Food and wellness applications</li>
                <li>Bulk quote support</li>
              </ul><a class="text-arrow" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Request details <b>→</b></a>
            </div>
          </article>
          <article class="catalog-card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-amla.webp' ); ?>" alt="Indian gooseberry amla fruit">
            <div><span>DEHYDRATED FRUIT</span>
              <h3>Amla Powder</h3>
              <p>Indian gooseberry powder for product-makers seeking a distinct botanical ingredient with broad usage
                potential.</p>
              <ul>
                <li>Also known as Indian gooseberry</li>
                <li>Wellness-oriented applications</li>
                <li>Custom enquiry support</li>
              </ul><a class="text-arrow" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Request details <b>→</b></a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="product-support">
      <div class="wrap route-grid reveal">
        <div>
          <div class="label">Buyer support</div>
          <h2 class="heading">Need specifications or<br><em>bulk pricing?</em></h2>
        </div>
        <div class="route-list">
          <div><span>01</span>
            <p>Share target product, quantity, destination country and packaging preferences.</p>
          </div>
          <div><span>02</span>
            <p>We discuss suitable product options, quote details and availability direction.</p>
          </div>
          <div><span>03</span>
            <p>We coordinate next steps for sample, documentation and shipment planning.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-strip">
      <div class="wrap reveal">
        <div>
          <div class="label">Product enquiries</div>
          <h2>Ask for a product quote.</h2>
        </div><a class="btn btn-outline" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Request a quote <b>↗</b></a>
      </div>
    </section>
<?php get_footer(); ?>
