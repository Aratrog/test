<?php get_header(); ?>
<div id=line>
  <?php
    echo do_shortcode('[smartslider3 slider=5]');
  ?>
</div>
</div>
</header>
<section>
  <content>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php
      get_the_title();
    ?></h2>
    <div>

      <?php
        the_content();
      ?>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </content>
</section>
<?php get_footer(); ?>
