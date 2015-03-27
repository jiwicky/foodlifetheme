<div class="container">
<div class="bottom-posts">
	<h2>More from Food Life</h2> 
		<img class="more-posts-fork" src="<?php echo get_template_directory_uri();?>/assets/images/logo-fork-graphic-outlined.png" alt="Food Life" />
</div>
<?php 
$args = array(
	'orderby'        => 'rand',
	'posts_per_page' => '4',

);
$bottomposts = new WP_Query($args);?>
<?php
   if($bottomposts->have_posts()) : 
      while($bottomposts->have_posts()) : 
         $bottomposts->the_post(); ?>
<div class="container">
<?php get_template_part('templates/content'); ?>
</div>
<?php
	endwhile;
	else: ?>
	Something is up, bro.

<?php endif; ?>

</div>