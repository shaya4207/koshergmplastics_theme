      <div id="footer">
        <div class="left">
          <a href="<?php echo get_bloginfo('url'); ?>">Home</a>
          <?php
            $args = array(
              'container' => false,
              'echo' => false,
              'items_wrap' => '%3$s',
              'depth' => 1,
              'before' => '&nbsp;&nbsp;|&nbsp;&nbsp;'
            );
            echo strip_tags(wp_nav_menu($args),'<a>');
          ?>
        </div>
        <div class="right">	
          &copy;2013 All Rights Reserved <span class="blue">The Kosher Gourmet</span> &nbsp;&nbsp;|&nbsp;&nbsp; 416.781.9900 &nbsp;&nbsp;|&nbsp;&nbsp; Site Credits: <a href="http://www.parkmg.com">ParkMG</a>
        </div>
      </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/kosher.js" type="text/javascript"></script>
  </body>
</html>