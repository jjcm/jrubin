<?php get_header(); ?>
<style type="text/css">
    #primary { height: auto; }
    #secondary{
        padding: 10px;
    }
    #name {
        padding-left: 10px;
    }
</style>

<div id="name">
    <a class="noEffects" href="/"><h1><?php bloginfo('name'); ?></h1></a>
</div>

<div id="primary" class="single-post"> 
  <div class="inside"> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="primary"> 
      <h2>
        <?php the_title(); ?>
      </h2>
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- [END] #primary -->
<hr class="hide" />
<div id="secondary"> 
  <div class="inside"> 
    <?php if ('open' == $post-> comment_status) {
				// Comments are open ?>
    <div class="comment-head"> 
      <h2>
        <?php comments_number('No comments','1 Comment','% Comments'); ?>
      </h2>
      <span class="details"><a href="#comment-form">Jump to comment form</a> | 
      <?php comments_rss_link('comments rss'); ?>
      <a href="#what-is-comment-rss" class="help">[?]</a> 
      <?php if ('open' == $post->ping_status): ?>
      | <a href="<?php trackback_url(true); ?>">trackback uri</a> <a href="#what-is-trackback" class="help">[?]</a>
      <?php endif; ?>
      </span> </div>
    <?php } elseif ('open' != $post-> comment_status) {
				// Neither Comments, nor Pings are open ?>
    <div class="comment-head"> 
      <h2>Comments are closed</h2>
      <span class="details">Comments are currently closed on this entry.</span> 
    </div>
    <?php } ?>
    <?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
</div>
