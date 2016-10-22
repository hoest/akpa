<!DOCTYPE html>
<html>
  <head>
    <!--
      Site developed by <H!P> Internet - http://hip-inter.net/
      Design by Studio Elvis - http://www.studio-elvis.nl/

      (c) 2016
    -->
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
          echo " - ".$site_description;
        }
      ?>
    </title>
    <link href="//fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <meta name="author" content="<?php bloginfo('name'); ?>" />
    <meta name="keywords" content="AKPA Holland, AKPA, Holland, Soest, Stroopwafels, Niels de Jong, Paul Alexander, Groothandel de Jong" />
    <meta name="description" content="The traditional Dutch “stroopwafels” are a real treat for all tourists visiting Holland. Once having tasted these delicious authentic cookies, one can simply not leave our country without purchasing a small supply of the typical Dutch stroopwafels. Now what would be more practical than being able to take these cookies with you in your suitcase, in a package that will assure you your stroopwafels will get to their destination in one piece? AKPA Holland offers you the solution: Delicious Dutch Stroopwafels, packaged in a flat can." />

    <meta property="og:locale" content="nl_NL" />
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/stroopwafels-intro.png" />
    <meta property="og:url" content="https://www.akpaholland.nl/"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:title" content="Delicious Dutch Stroopwafels"/>
    <meta property="og:description" content="The traditional Dutch “stroopwafels” are a real treat for all tourists visiting Holland. Once having tasted these delicious authentic cookies, one can simply not leave our country without purchasing a small supply of the typical Dutch stroopwafels. Now what would be more practical than being able to take these cookies with you in your suitcase, in a package that will assure you your stroopwafels will get to their destination in one piece? AKPA Holland offers you the solution: Delicious Dutch Stroopwafels, packaged in a flat can." />
    <meta property="og:type" content="website" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86167310-2', 'auto');
    ga('send', 'pageview');
  </script>
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
