<p> 
<?php if(!is_category()){ ?>

	<span class="category-byline"><?php echo the_category(' | '); ?></span>

<?php } ?>

<?php if (is_single()) { ?>

	<?php
		if(get_field('fl_author')) { ?>
			by <?php the_field('fl_author');?>
	<?php
			if(get_field('fl_author') && get_field('fl_photographer')) {
				echo " | ";
			}
		}

		if(get_field('fl_photographer')){ ?>
			photography by <?php the_field('fl_photographer'); ?>
	<?php
		} ?>
</p>

<?php
} 
?>