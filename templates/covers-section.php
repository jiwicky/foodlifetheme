<?php if(is_single()) {
	echo '<div class="vertical-covers">';
} else {
	echo '<div class="horizontal-covers">';
	}?>

<?php foreach (get_categories() as $cat) : ?>
	<?php if(is_single()) {
	echo '<div class="vertical-cover-single col-md-10 col-md-offset-1">';
} else {
	echo '<div class="col-md-4 horizontal-cover-single">';
	}?>
<a href="<?php echo get_category_link($cat->term_id); ?>">
	<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
</a>

<a href="<?php echo get_category_link($cat->term_id); ?>">

	<?php echo $cat->cat_name; ?>

</a>
	</div>
<?php endforeach; ?>

</div>