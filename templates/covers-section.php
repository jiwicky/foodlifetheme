<?php if(is_front_page()) {
	echo '<div class="horizontal-covers">';
} else {
	echo '<div class="vertical-covers">';
	echo '<h3 class="previous-issues">Previous Issues</h3>';
	}?>

<?php foreach (get_categories() as $cat) : ?>
	<?php if(is_front_page()) {
	echo '<div class="col-md-4 horizontal-cover-single">';
} else {
	echo '<div class="vertical-cover-single col-md-10 col-md-offset-1">';
	}?> 

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

</div>