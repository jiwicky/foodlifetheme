<?php while (have_posts()) : the_post(); ?>
<div class="article">
  <article <?php post_class(); ?>>
    <header>
      <img class="single-header-fork" src="<?php echo get_template_directory_uri();?>/assets/images/logo-fork-graphic.png" alt="" />
      <h1 class="entry-title"><?php the_title(); ?></h1>

      <?php if(get_field('article_subhead')){ ?>

        <h4 class="subhead"><?php the_field('article_subhead')?></h4>

      <?php } ?>
      
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-content">
      <?php the_content(); ?>

    </div>

    <footer>
      <?php wp_link_pages(array
        (
          $args, 
          ['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']
        )
      ); ?>
    </footer>

  </article>
</div>
<?php endwhile; ?>