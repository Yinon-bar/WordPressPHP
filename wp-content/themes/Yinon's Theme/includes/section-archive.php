<?php
if (have_posts()) { ?>
  <?php while (have_posts()) { ?>
    <?php the_post() ?>
    <div class="card mb-3">
      <div class="card-body">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a class="btn btn-success" href="<?php the_permalink() ?>">Read more...</a>
      </div>
    </div>
  <?php } ?>
<?php } ?>