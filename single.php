<?php
get_header();
?>

	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="date"><?php the_time('F jS') ?> <?php edit_post_link('Edit', ''); ?></div>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				
				<div class="meta">
				
					<div class="left">Category</div>
					<div class="right"><?php the_category(', ') ?></div>
					
					<div class="left">Tags</div>
					<div class="right"><?php the_tags('', ', '); ?></div>
					
					<div class="left">Comments</div>
					<div class="right"><?php comments_popup_link('Leave a Comment', 'One Comment', '% Comments'); ?></div>
					
					<div class="addtoany"><?php echo '<ul class="addtoany_list">'; if( function_exists('ADDTOANY_SHARE_SAVE_ICONS') ) ADDTOANY_SHARE_SAVE_ICONS( array("html_wrap_open" => "<li>", "html_wrap_close" => "</li>") ); if( function_exists('ADDTOANY_SHARE_SAVE_BUTTON') ) ADDTOANY_SHARE_SAVE_BUTTON( array("html_wrap_open" => "<li>", "html_wrap_close" => "</li>") ); echo '</ul>'; ?></div>
					
				</div>
				
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>