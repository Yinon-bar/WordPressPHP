<?php while (have_posts()) { ?>
  <h1><?php the_post(); ?></h1>
  <p><?php echo get_the_date('D M Y') ?></p>
  <p><?php the_content(); ?></p>
  <p>Posted by <?php the_author(); ?></p>


<?php } ?>