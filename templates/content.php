<article <?php post_class(); ?>>
  <header> 
<?php if(has_post_thumbnail()) { ?>
  <div class="latest-post-thumbnail">
  	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(175,175,true);?></a>
  </div>
<?php  } ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>

  </div>
</article>