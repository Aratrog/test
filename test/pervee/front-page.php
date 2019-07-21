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
    <h2>О нас</h2>
    <div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        the_content();
      ?>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </content>
  <div id=news>
    <h2>Новости</h2>
    <div id=post>
      <?php
        $args=array('post_per_page'=>3, 'orderby' => 'comment_count', 'category_name'=>'3');
        $query = new WP_Query($args);
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            echo "<div class=new_post>";
              echo "<div class=image>";
                echo "<a href=";
                the_permalink();
                echo ">";
                echo the_post_thumbnail('thumbnail');
              echo "</a></div>";
              echo "<div class=text_post>";
                echo '<div><em>'.get_the_date().'</em></div>';
                echo '<div><p>'.get_the_title().'<p></div>';
              echo "</div>";
            echo "</div>";
          }
        }
        else {

        }
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
