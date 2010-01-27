 <hr class="hide" />
<div id="footer"> 
  <div class="inside"> 
    <ul>
        <li>
            <a href="portfolio.php">Portfolio</a>
        </li>
        <li>
            <a href="statement.php">Artist's Statement</a>
        </li>
        <li>
            <a href="mailto:jenerubin@gmail.com">Contact</a>
        </li>
        <li>
            <a href="blog.php">Blog</a>
        </li>
    </ul>
  </div>
</div>
<!-- [END] #footer -->
<div id="live-search"> 
  <div class="inside"> 
    <div id="search"> 
      <form method="get" id="sform" action="<?php bloginfo('home'); ?>/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/search.gif" alt="Search:" /> 
        <input type="text" id="q" value="<?php echo wp_specialchars($s, 1); ?>" name="s" size="15" />
      </form>
    </div>
  </div>
</div>
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php wp_footer(); ?>
</body>
</html>
