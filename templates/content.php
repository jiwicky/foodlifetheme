<article <?php post_class(); ?>>
  <header>
  <div class="latest-post-thumbnail"><?php the_post_thumbnail(175,175,true);?></div>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
