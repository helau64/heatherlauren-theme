<?php
/**
* The template used to display archive content
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>

    <?php
$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));


if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 15;

$my_query = new WP_Query('post_type=post&nopaging=1');
if($my_query->have_posts()) {
  echo '<h1 class="archive-title">Recent Posts</h1>&nbsp;';
  echo '<div class="archives-latest-section"><ul class="archive-list">';
  $counter = 1;
  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
    $my_query->the_post(); 
    ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
    <?php
    $counter++;
  }
  echo '</ul></div>';
  wp_reset_postdata();
}
?>

<h1 class="archive-title">By Month</h1>&nbsp;
<div class="archive-list">
  <span><?php wp_get_archives('type=monthly&format=custom&after= |'); ?></span>
</div>

  </div><!-- .entry-content -->

</article><!-- #post-## -->