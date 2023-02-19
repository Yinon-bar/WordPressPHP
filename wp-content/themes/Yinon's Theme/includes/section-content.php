<?php while (have_posts()) { ?>
  <h1><?php the_post(); ?></h1>
  <p><?php the_content(); ?></p>
<?php } ?>