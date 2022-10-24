<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<?php if ( is_singular() && pings_open() ) { ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php }
wp_head(); ?>

<link href="https://fonts.12-05.com/roboto/style.css" rel="stylesheet">
<link href="https://fonts.12-05.com/lato/style.css" rel="stylesheet">
<script> 
function myFunc(){
const menu = document.getElementById("menu-menu-1");
menu.classList.toggle("active");
}
</script>
</head>
<body <?php body_class(); ?>>
<header id="header" class="clearfix" role="banner">
<div class="header-inner">
<h1 class="site-title">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<?php if ( get_field('logo' , 'option') ) { ?>
<img src="<?php the_field('logo','option') ?>" alt="" width="<?php the_field('logo_size','option') ?>"/>
<?php } else {
bloginfo( 'title' ); 
} ?>
</a>
</h1>
<nav class="navbar">
<button onClick="myFunc()" id="menu-toggle" data-class="menu-active" aria-controls="primary-menu" aria-expanded="false" class="hamburger" title="Primary Menu">
<span class="hamburger-line hamburger-line-top" aria-hidden="true"></span>
<span class="hamburger-line hamburger-line-middle" aria-hidden="true"></span>
<span class="hamburger-line hamburger-line-bottom" aria-hidden="true"></span>
</button>
<?php
         
            wp_nav_menu( array(
                'theme_location' => 'header-menu', 
                'container' => 'menu-xxx-container', 
                'menu_class' => 'nav navbar-nav menu__list ', 
                'menu' => 'Hauptmenü'
              )); 
              
?> 


<?php if (get_field('anfrage','option')) { ?>
<div class="phone--box"><div class="phone--link">... und alles ist möglich!</div></div>
<?php }else{
    echo "" ; 
} ?>
</nav>
</div>
</header>
<div id="wrapper" class="clearfix">
    <?php if (get_field('telefon','option') && get_field('phone-icon','option') && get_field('e-mail','option') && get_field('mail-icon','option')  ): ?>
<div class="quick-contact-box">
        <a  href="tel:<?php the_field('telefon', 'option') ?>"><img src="<?php the_field('phone-icon', 'option')?>" /></a>
         <a href="mailto:<?php the_field('e-mail', 'option') ?>"><img src="<?php the_field('mail-icon', 'option')?>" /></a>
    </div>

    <?php endif; ?>
