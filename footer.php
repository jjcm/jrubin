<style type="text/css">
#name h1{
    position: absolute;
    top: 430px;
}
#navigation{
    position: absolute;
    left: 0px;
    top: 500px;
    width: 100%;
    color: #fff;
    padding-top: 2px;
    font-family: "Adobe Caslon Pro", Georgia, serif;
}
#navigation ul {
    list-style-type: none;
}
#navigation ul li {
    float: left;
    padding-right: 40px;
}
#navigation ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}
.noEffects {
    text-decoration: none;
}

body {
    background: #0d0d0d url("<?php bloginfo('stylesheet_directory'); ?>/images/background.jpg") 0px 500px no-repeat;
}
</style>
<div id="name">
    <a class="noEffects" href="/"><h1><?php bloginfo('name'); ?></h1></a>

</div>
<div id="navigation">
    <ul>
        <li>
            <a href="/portfolio">Portfolio</a>
        </li>
        <li>
            <a href="/statement">Artist's Statement</a>
        </li>
        <li>
            <a href="/resume">Resume</a>
        </li>
        <li>
            <a href="mailto:jenerubin@gmail.com">Contact</a>
        </li>
        <li>
            <a href="/blog">Blog</a>
        </li>
    </ul>
</div>



<div id="footer"> 
  <div class="inside"> 
  </div>
</div>
<!-- [END] #footer 
<div id="live-search"> 
  <div class="inside"> 
    <div id="search"> 
      <form method="get" id="sform" action="<?php bloginfo('home'); ?>/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/search.gif" alt="Search:" /> 
        <input type="text" id="q" value="<?php echo wp_specialchars($s, 1); ?>" name="s" size="15" />
      </form>
    </div>
  </div>
</div>-->
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php wp_footer(); ?>
</body>
</html>
