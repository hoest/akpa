<ul class="main">
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
      $type = get_field('onderdeel_naam');
      if($type != 'intro') { ?>
  <li>
    <a href="#<?php echo($type); ?>"><?php the_title(); ?></a>
  </li>
<?php }
    }
  } ?>
</ul>
<ul class="lang">
  <li>
    <a href="/">NL</a>
  </li>
  <li>
    <a href="/en/">EN</a>
  </li>
</ul>
