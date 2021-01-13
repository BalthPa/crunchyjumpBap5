<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<header>

    <nav>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
         <?php 
        wp_nav_menu( 
            array( 
                'theme_location' => 'main', 
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'crunchy_header_menu', // ma classe personnalisée 
            ) 
        );
        ?>
    </nav>
  
</header>



<body <?php body_class(); ?>>



<?php wp_body_open(); ?>