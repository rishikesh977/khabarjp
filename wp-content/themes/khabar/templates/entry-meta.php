<?php if ( function_exists( 'sharing_display' ) ) echo sharing_display(); ?>
<small>
  <ul class='inline post-meta'>
    <li class='post-meta-part'>
      <i class='icon-user'></i>
      <span class='byline author vcard'>
        <?php echo __('by', 'roots'); ?>
        <a class='fn' href='<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>' rel='author'>
          <?php echo get_the_author(); ?>
        </a>
      </span>
    </li>
    <li class='post-meta-part'>
      <i class='icon-calendar'></i>
      <time class='updated' datetime='<?php echo get_the_time('c'); ?>' pubdate=''>
        <?php echo sprintf(__('on ') . get_the_date()); ?>
      </time>
    </li>
    <?php if(get_comments_number() > 0):?>
    <li class='post-meta-part'>
      <i class='icon-comment'></i>
      <a href='<?php comments_link(); ?>'>
        <?php echo( get_comments_number() ); ?>
      </a>
    </li>
    <?php endif;?>
    <li class='post-meta-part'>
      <i class='icon-tags'></i>
      <?php the_tags(); ?>
    </li>
  </ul>
</small>
