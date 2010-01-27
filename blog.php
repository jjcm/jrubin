<?php
/*
Template Name: Blog
*/
?>
<style type="text/css">
    #blog{
        width: 700px;
        float: left;
    }
    #sidebar {
        width: 220px;
        float: right;
    }
    #primary {
        padding-top: 30px;
    }

</style>


<?php get_header(); ?>
	<div id="primary" class="twocol-stories">
		<div id="blog">
			<?php
				// Here is the call to only make two posts show up on the homepage REGARDLESS of your options in the control panel
				query_posts('showposts=2');
			?>
			<?php if (have_posts()) : ?>
				<?php $first = true; ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="story<?php if($first == true) echo " first" ?>">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt() ?>
						<div class="details">
							Posted at <?php the_time('ga \o\n n/j/y') ?> | <?php comments_popup_link('no comments;', '1 comment', '% comments'); ?> | Filed Under: <?php the_category(', ') ?> | <span class="read-on"><a href="<?php the_permalink() ?>">read on</a></span>
						</div>
					</div>
					<?php $first = false; ?>
				<?php endwhile; ?>
				
			<?php else : ?>
		
				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		
			<?php endif; ?>
				
			<div class="clear"></div>
		</div>
<?php get_sidebar(); ?>
	</div>
	<!-- [END] #primary -->




<?php get_footer(); ?>
