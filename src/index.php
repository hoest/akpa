<?php get_header(); ?>

<main>
<?php
  // WP_Query arguments
  $args = array(
    'posts_per_page' => -1,
    'meta_key' => 'positie',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'
  );

  // The Query
  $query = new WP_Query($args);

  // The Loop
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $order = get_field('positie');
      $image = get_field('afbeelding');
      $type = get_field('onderdeel_naam'); ?>

      <section id="<?php echo($type) ?>" class="<?php echo($type) ?>" data-order="<?php echo($order); ?>">
        <div class="inner"><?php
          switch($type) {
            case "intro": ?>
              <h1>
                <span class="hidden"><?php the_title(); ?></span>
              </h1>
              <p>
                <img src="<?php echo($image['url']); ?>" />
              </p>
              <?php if(get_field('aanbieding_actief_tm') && get_field('aanbieding_afbeelding')) {
                $afbeelding = get_field('aanbieding_afbeelding');
                $bestel_nu = get_field('bestel_nu');
                $date = DateTime::createFromFormat('Ymd', get_field('aanbieding_actief_tm'));
                if(new DateTime() <= $date) { // alleen als 'aanbieding_actief_tm' nog niet is verstreken ?>
                <div class="bestel-button" title="<?php echo($bestel_nu) ?>">
                  <a href="mailto:info@akpaholland.nl?Subject=<?php echo(rawurlencode($bestel_nu)) ?>">
                    <img src="<?php echo($afbeelding['url']) ?>" alt="<?php echo($bestel_nu) ?>" />
                  </a>
                </div>
              <?php } } ?>
<?php         break;
            case "product": ?>
              <div class="text offset-1 col-10">
                <h1 class="hidden"><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
<?php         break;
            case "bestelling": ?>
              <div class="col-6">
                <h1 class="hidden"><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
              <div class="col-6">
                <img src="<?php echo($image['url']); ?>" />
              </div>
<?php         break;
            case "over": ?>
              <div class="col-5">
                <img src="<?php echo($image['url']); ?>" />
              </div>
              <div class="col-7">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
<?php         break;
          } ?>
        </div>
      </section>
<?php
    }
  } else {
    // no posts found
  }

  // Restore original Post Data
  wp_reset_postdata();
?>
</main>

<?php get_footer(); ?>
