<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
          echo " - Welkom";
        }
      ?>
    </title>
    <link href="//fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <meta name="author" content="<?php bloginfo('name'); ?>" />
    <meta name="keywords" content="AKPA Holland, AKPA, Holland, Soest, Stroopwafels, Niels de Jong, Paul Alexander, Groothandel de Jong" />

    <meta property="og:locale" content="nl_NL" />
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/stroopwafels-intro.png" />
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

    <?php if(is_home() || is_front_page()) { ?>
    <meta property="og:title" content="Welkom bij <?php bloginfo('name'); ?>"/>
    <?php } else { ?>
    <meta property="og:title" content="<?php echo trim(wp_title('', false)); ?>"/>
    <?php } ?>

    <!-- if page is content page -->
    <?php if (is_single()) { ?>
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta property="og:type" content="article" />

    <!-- if page is others -->
    <?php } else { ?>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <?php } ?>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="outer">
      <header>
        <div class="inner">
          <nav>
            <div class="logo">
              <a href="/">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/akpa-logo-rood.png" alt="" />
              </a>
            </div>
            <?php get_sidebar(); ?>
          </nav>
        </div>
      </header>
