<?php
/**
 * Template Name: Articles Archive
 */
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
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>