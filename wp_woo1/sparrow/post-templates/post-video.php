<article class="post">
  <div class="entry-header cf">
    <h1><a href="single.html" title=""><?php the_title(); ?></a></h1>

  <div class="post-thumb">
    <?php the_post_thumbnail(); ?>
  </div>

  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <?php do_action('my_action') ?>
</article> <!-- post end -->


