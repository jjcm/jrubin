<div id="sidebar"> 
  <div class="inside"> 
    <div class="block"> 
      <h3>Recently Posted</h3>
      <ul class="dates">
        <?php
						// I love Wordpress so
						query_posts('showposts=10');
					?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink() ?>"><span class="date">
          <?php the_time('n.j') ?>
          </span> 
          <?php the_title() ?>
          </a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- [END] #ancillary -->
