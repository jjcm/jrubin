<style type="text/css">
    #primary {
        width: 960px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        height: 500px;
    }
    .content{
        margin-left: 10px;
        margin-right: 10px;
    }

</style>
<?php get_header(); ?>
<div id="primary"> 
  <div class="inside"> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3>
      <?php the_title(); ?>
    </h3>
    <div class="content">
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
    <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
    <?php endwhile; endif; ?>
    <?php// edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
