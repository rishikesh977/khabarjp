<form action="<?php echo home_url('/'); ?>" class="form-search" id="searchform" method="get" role="search">
  <div class="input-append">
    <input class="search-query span3" id="s" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>" type="text" value="" />
    <input class="btn btn-success" id="searchsubmit" type="submit" value="<?php _e('Search', 'roots'); ?>" />
  </div>
</form>
