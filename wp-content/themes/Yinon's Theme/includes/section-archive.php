<?php
if (have_posts()) { ?>
  <?php while (have_posts()) { ?>
    <?php the_post() ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
  <?php } ?>
<?php } ?>