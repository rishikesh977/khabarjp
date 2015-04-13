<div class='container'>
  <header id='header'>
    <div class='header-top'>
      <div class='navbar meta clearfix'>
        <ul class='nav pull-left'>
          <li>
            <i class='icon-info-sign'></i>
            <span id='last-updated-at-container'></span>
            &nbsp;
          </li>
          <li>
            <span class='muted'>
              अहिले नेपालमा:
            </span>
            <i class='icon-calendar'></i>
            <span id='calendar-container'>
              <a class="btn-link convert-date" href="#"><?php echo date('l, j F Y');?></a>
            </span>
            &nbsp;
          </li>
          <li>
            <i class='icon-time'></i>
            <span id='clock-container'>
              <?php 
                 print "<HTML><body><pre>"; 
                 
                 setlocale( "LC_ALL", "np_NE" ); 
                 
                 putenv( "PHP_TZ=Asia/Kathmandu" ); 
                 
                 $now = time(); 
                 
                 
                 print date("H:i:s"); 
                 //print date("T"); 
              ?>
            </span>
          </li>
        </ul>
        <ul class='nav pull-right'>
          <li class='carousel-wrap' id='currencies-container'></li>
        </ul>
      </div>
      <div class='navbar brand clearfix'>
        <a class='brand' href='<?php bloginfo('url'); ?>' title='आजको ताजा खबर'>
          <img alt='आजको ताजा खबर' class='logo' height='50' src='<?php echo get_stylesheet_directory_uri()?>/assets/img/common/khabar.png' width='139'>
        </a>
        <ul class='nav pull-right' id='guru-bar'>
          <li>
            <a href='/guru'>
              <img alt='देवराज आचार्य' src='<?php echo get_stylesheet_directory_uri()?>/assets/img/guru_small.png'>
            </a>
          </li>
          <li>
            <blockquote class='quote'>
              <p class='text-success'>
                शुभ, अंक, वार र रंग जान्नुस
              </p>
              <small>
                देवराज आचार्य
                <a href='/guru' id='link'>
                  (यहाँ क्लिक गर्नुस्)
                </a>
              </small>
            </blockquote>
          </li>
          <li>
            <div class='position-container'>
              <div class='position-bottom'></div>
            </div>
            <div class='carousel-wrap' id='weather-container'></div>
          </li>
        </ul>
      </div>
    </div>
    <?php if (has_nav_menu('primary_navigation')):?>
    <div class='header-nav' id='primary-nav'>
      <div class='navbar navbar-inverse'>
        <div class='navbar-inner'>
          <div class='container'>
            <a class='btn btn-navbar' data-target='.primary-nav' data-toggle='collapse'>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </a>
            <a class='brand text-info' href='<?php bloginfo('url'); ?>'>
              ख़बर
            </a>
            <div class='primary-nav nav-collapse collapse'>
              <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif?>
    <?php if (has_nav_menu('secondary_navigation')):?>
    <div class='header-nav' id='secondary-nav-'>
      <div class='navbar'>
        <div class='navbar-inner'>
          <div class='container'>
            <a class='btn btn-navbar' data-target='.secondary-nav' data-toggle='collapse'>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </a>
            <strong class='brand'>
              <div class='charchama'>
                <span>
                  चर्चामा
                </span>
                <i class='icon-comments'></i>
              </div>
            </strong>
            <div class='secondary-nav nav-collapse collapse'>
              <?php wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav'));?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif?>
    <?php query_posts('tag=alert-news&posts_per_page=5&orderby=date&order=DESC');?>
    <?php if(have_posts()):?>
    <div id='alert-news'>
      <div class='row'>
        <div class='span1'>
          <label class='title label label-warning'>
            <i class='icon-bullhorn'></i>
            न्यूज़ अलर्ट
          </label>
        </div>
        <div class='span9'>
          <div class='carousel slide' data-ride='carousel' id='alert-carousel'>
            <ol class='carousel-inner'>
              <?php $i = 0;?>
              <?php while (have_posts()) : the_post();?>
              <?php $i++;?>
              <li class='item <?php echo $i != 1?: "active"?>'>
                <a href='<?php the_permalink();?>' title='<?php the_title();?>'>
                  <?php the_title()?>
                </a>
              </li>
              <?php endwhile;?>
              <?php $i = 0;?>
            </ol>
          </div>
        </div>
        <div class='span2'>
          <ul class='inline unstyled prev-next-arrow pull-right'>
            <li>
              <a class="icon-chevron-left" href="#alert-carousel" data-slide="prev"></a>

            </li>
            <li>
              <a class='icon-chevron-right' data-slide='next' href='#alert-carousel'></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php endif;?>
    <?php wp_reset_query();?>
    <?php query_posts('tag=breaking-news&posts_per_page=1&orderby=date&order=DESC');?>
    <?php while (have_posts()) : the_post();?>
    <div id='breaking'>
      <div class='row'>
        <div class='span2'>
          <div class='caption'>
            <h4>
              <i class='icon-bolt'></i>
              ब्रेकिंग न्यूज़
            </h4>
          </div>
        </div>
        <div class='span10'>
          <h4 class='title'>
            <?php the_title();?>
            <a href='<?php the_permalink();?>' title='<?php the_title();?>'>बाँकी अंश »</a>
          </h4>
        </div>
      </div>
    </div>
    <?php endwhile; wp_reset_query();?>
  </header>
</div>
