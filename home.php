<?php 
/* Template Name: Homepage */
get_header(); 
get_template_part( 'assets/partials/home/_section', 'hero' );
get_template_part( 'assets/partials/home/_section', 'welcome' );
get_template_part( 'assets/partials/home/_section', 'what-we-do' );
get_template_part( 'assets/partials/home/_section', 'products' );
get_template_part( 'assets/partials/home/_section', 'trade' );
get_template_part( 'assets/partials/home/_section', 'promise' );
get_template_part( 'assets/partials/home/_section', 'blog' );
get_footer();
?>