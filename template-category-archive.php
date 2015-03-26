<?php
/**
 * Template Name: Category Archive
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<?php foreach (get_categories() as $cat) : ?>
<div class="col-md-4">
<a href="<?php echo get_category_link($cat->term_id); ?>">
	<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
</a>

<div class="issue-name">
	<a href="<?php echo get_category_link($cat->term_id); ?>">
		<?php echo $cat->cat_name; ?>
	</a>
</div>
</div>

<?php endforeach; ?>