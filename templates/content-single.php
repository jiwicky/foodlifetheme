<?php 
$args = array(
          'before'           => '<p>' . __( 'Pages:' ),
    'after'            => '</p>',
    'link_before'      => '',
    'link_after'       => '',
    'next_or_number'   => 'number',
    'separator'        => ' ',
    'nextpagelink'     => __( 'Next page' ),
    'previouspagelink' => __( 'Previous page' ),
    'pagelink'         => '%',
    'echo'             => 1
  );
?>

<?php while (have_posts()) : the_post(); ?>
<div class="col-md-8 article">
  <article <?php post_class(); ?>>
    <header>
      <img class="single-header-fork" src="<?php echo get_template_directory_uri();?>/assets/images/logo-fork-graphic.png" alt="" />

      <h1 class="entry-title"><?php the_title(); ?></h1>

      <?php if(the_field('article_subhead')){ ?>

        <h4><?php echo the_field('article_subhead')?></h4>

      <?php } ?>
      
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages($args); ?> 
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>

  </article>
</div>
<div class=" col-md-4 logo">
  <?php get_template_part('templates/logo');?>
</div>

<div class="col-md-4 category-sidebar">
  <?php get_template_part('templates/covers-section'); ?>
</div>

<?php endwhile; ?>
<div class="container col-md-12">
    <?php get_template_part('templates/bottom-posts');?>
</div>