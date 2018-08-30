<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
<body <?php body_class();   ?>>

<header class="site-header">
    <div class="container">
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/'));  ?>">
        <img src="<?php echo  get_template_directory_uri(); ?> /img/logo.svg" alt="" class="logoimage">
        </a>
    </div><!--.logo-->

    <div class="header-information">
        <div class="socials">
          
        <?php
            wp_nav_menu([
                'theme_location'   => 'social-menu',
                'container'        => 'nav',
                'container_class'  => 'socials',
                'container_id'     => 'socials',
                'link_before'      => '<span class="sr-text">',
                'link_after'       => '</span>'
            ]);


        ?>
        </div><!--.socials-->
        <div class="address">
                <p>9626 Church Lane</p>
                <p>Mob: 091/574-0000</p>
        </div>
    </div><!--.header-information-->
    </div><!--.container-->
</header>

<div class="main-menu">

    <div class="mobile-menu">
                <a href="#" class="mobile"><i class="fa fa-bars"></i>Menu</a>
    </div>
    <div class="navigation container">
    <?php
     wp_nav_menu([
        'theme_location'   => 'header-menu',
        'container'        => 'nav',
        'container_class'  => 'site-nav'
     ]);


     ?>
    
    </div>
</div>