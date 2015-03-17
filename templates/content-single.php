<?php while (have_posts()) : the_post(); ?>
<div class="col-md-8 article">
  <article <?php post_class(); ?>>
    <header>
      <img class="single-header-fork" src="<?php echo get_template_directory_uri();?>/assets/images/logo-fork-graphic.png" alt="" />
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
   <?php //comments_template('/templates/comments.php'); ?>
  </article>
</div>
<div class=" col-md-4 logo">
<?php get_template_part('templates/logo');?>
</div>
<?php endwhile; ?>