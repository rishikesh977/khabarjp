<div class="row">
	<div id="featured-wrapped" class="span4">
		<div id="featuredCarousel" class="carousel slide" data-ride="carousel" style="background:#aaa;">
			<ol class="carousel-indicators">
			    <li data-target="#featuredCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#featuredCarousel" data-slide-to="1"></li>
			    <li data-target="#featuredCarousel" data-slide-to="2"></li>
			    <li data-target="#featuredCarousel" data-slide-to="3"></li>
			    <li data-target="#featuredCarousel" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<?php
                global $post;
                $args = array( 
                	'numberposts' => 5,
                	'tag' =>'featured'
                	); // set this to how many posts you want in the carousel
                $myposts = get_posts( $args );
                $post_num = 0;
                foreach( $myposts as $post ) :  setup_postdata($post);
                    $post_num++;
                    $post_thumbnail_id = get_post_thumbnail_id();
                    $featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'featured' );
                ?>

                <li class="<?php if($post_num == 1){ echo 'active'; } ?> item">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('featured'); ?></a>
					<div class="carousel-caption">
						<h4><a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title_attribute( );?>"><a href="<?php the_permalink();?>"><?php the_title();?></a></a></h4>
						<p><?php $excerpt = get_the_excerpt();
	    				echo string_limit_words($excerpt,15)."...";?></p> 
					</div> 	                   
                </li>
                <?php endforeach; ?>        
			</div>
			<a class="carousel-control left" href="#featuredCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#featuredCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	<div class="span4">
		<div class="clearfix">
			<span class="label label-info">आज देशमा</span>
			
			<ul class="news-list unstyled">
				<?php wp_reset_query();?>
				<?php $the_query = new WP_Query('category_name=&posts_per_page=10');?>
				<?php $count = 0; ?>
				<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php $count++; ?>
		    		<?php if ($count <= 3) : ?>
			    		<li>
			    		 	<h5 class="media-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
			    		 	<?php 
			    		 		$excerpt = get_the_excerpt();
			    				echo string_limit_words($excerpt,15)."...";
			    			?>
			    		</li>
						<?php else : ?>
						<li class="only-title">
							<a href="<?php the_permalink() ?>"><?php the_title();?></a>
						</li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>	

<h4 class="text-success block-heading">पांच आना कुरा </h4>
<div class="thumbnails thumbnails-list">
	<?php wp_reset_query();?>
	<?php $the_query = new WP_Query('tag=in-odd&posts_per_page=4');?>
	<?php while($the_query->have_posts() ) : $the_query->the_post();?>
		<div class="span2">
			<div class="thumbnail-unit">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-medium');?></a>
			</div>
			<div class="muted">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</div>
		</div>	
	<?php endwhile; ?>
</div>

<h4 class="text-error block-heading">झलक</h4>
<div class="thumbnails thumbnails-list">
	<?php wp_reset_query();?>
	<?php $the_query = new WP_Query('category_name=news&posts_per_page=4');?>
	<?php while($the_query->have_posts() ) : $the_query->the_post();?>
		<div class="span2">
			<div class="thumbnail-unit">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumb');?></a>
				<p>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</p>
			</div>
		</div>
	<?php endwhile; ?>
</div>

<div class="text-center">
	<a target="_blank" href="http://shopshara.com"><img src="<?php bloginfo('template_directory');?>/assets/img/ads/shopshara_ad_6.jpg"></a>
</div>
<div class="row">
	
	<div class="span4">
		<h4 class="text-info block-heading">घेरामा </h4>
		<div class="thumbnails thumbnails-list">
			<?php wp_reset_query();?>
			<?php $the_query = new WP_Query('tag=in-focus&posts_per_page=6');?>
			<?php while($the_query->have_posts() ) : $the_query->the_post();?>
				<div class="span2">
					<div class="thumbnail-unit">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-medium');?></a>
						<div class="muted">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</div>
					</div>
				</div>	
			<?php endwhile; ?>
		</div>
	</div>
	<div class="span4">
		<h4 class="text-error block-heading">मनको बह- कसलाई कह</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php $the_query = new WP_Query('tag=column&posts_per_page=6');?>
			<?php while($the_query->have_posts() ) : $the_query->the_post();?>
				<li class="media">
					<div class="pull-left">
						<div class="media-object">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
						</div>
					</div>
					<div class="media-body">
						<h5 class="media-heading">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h5>
					</div>	
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<div class="row-fluid">
    <div class="span4">
		<h5 class="text-info block-heading">कञ्चनपुर</h5>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('tag=kanchanpur&posts_per_page=4');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-medium');?></a>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
		</ul>
	</div>
	<div class="span4">
		<h5 class="text-info block-heading">जनकपुर</h5>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('tag=janakpurdham&posts_per_page=4');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-medium');?></a>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
		</ul>
	</div>
	<div class="span4">
		<h5 class="text-info block-heading">लमजुङ</h5>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('tag=lamjung&posts_per_page=4');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-medium');?></a>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
		</ul>
	</div>
</div>

<h4 class="muted block-heading">न्युज</h4>
<div class="row category-listing">
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in आज देशमा" href="<?php bloginfo('url');?>/news">आज देशमा</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=news&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<?php wp_reset_query();?>
			<a class="muted pull-right" title="View all post in आज देशमा" href="<?php bloginfo('url');?>/news" type="button">बाँकि सबै</a>
		</ul>
	</div>
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in टोक्यो स्काई ट्री" href="<?php bloginfo('url');?>/japan">टोक्यो स्काई ट्री</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php $the_query = new WP_Query('category_name=japan&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while($the_query->have_posts()) : $the_query->the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<?php wp_reset_query();?>
			<a class="muted pull-right" title="View all post in टोक्यो स्काई ट्री" href="<?php bloginfo('url');?>/japan" type="button">बाँकि सबै</a>
		</ul>
	</div>
</div>
<div class="row category-listing">
	<div class="span4">
		<h4 class="">
			<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Category Name</a>
			<a class="category-name dark-gray" title="View all post in कामशास्त्र" href="<?php bloginfo('url');?>/sex">कामशास्त्र</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=sex&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in कामशास्त्र" href="<?php bloginfo('url');?>/sex" type="button">बाँकि सबै</a>
		</ul>
	</div>
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in अंक-अर्थ" href="<?php bloginfo('url');?>/economy">अंक-अर्थ</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=economy&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in अंक-अर्थ" href="<?php bloginfo('url');?>/economy" type="button">बाँकि सबै</a>
		</ul>
	</div>
</div>
<div class="row category-listing">
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in अपराध" href="<?php bloginfo('url');?>/crimes">अपराध</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=crimes&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in अपराध" href="<?php bloginfo('url');?>/crimes" type="button">बाँकि सबै</a>
		</ul>
	</div>
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in स्मार्ट फोन र एप्स " href="<?php bloginfo('url');?>/smart-phones-apps-news-reviews">स्मार्ट फोन र एप्स</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=smart-phones-apps-news-reviews&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in स्मार्ट फोन र एप्स" href="<?php bloginfo('url');?>/smart-phones-apps-news-reviews" type="button">बाँकि सबै</a>
		</ul>
	</div>
</div>
<div class="row category-listing">
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in वल्लो घर पल्लो घर " href="<?php bloginfo('url');?>/indo-china">वल्लो घर पल्लो घर </a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=indo-china&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in वल्लो घर पल्लो घर" href="<?php bloginfo('url');?>/indo-china" type="button">बाँकि सबै</a>
		</ul>
	</div>
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in पढ्दा पढ्दै " href="<?php bloginfo('url');?>/not-in-news-but-news">पढ्दा पढ्दै</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=not-in-news-but-news&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in पढ्दा पढ्दै" href="<?php bloginfo('url');?>/not-in-news-but-news" type="button">बाँकि सबै</a>
		</ul>
	</div>
</div>
<div class="row category-listing">
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in सुसेली र सुस्केराहरु " href="<?php bloginfo('url');?>/susheli">सुसेली र सुस्केराहरु </a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=susheli&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in सुसेली र सुस्केराहरु" href="<?php bloginfo('url');?>/susheli" type="button">बाँकि सबै</a>
		</ul>
	</div>
	<div class="span4">
		<h4 class="">
			<a class="category-name dark-gray" title="View all post in वोमेनोमिक्स" href="<?php bloginfo('url');?>/womenomics-2">वोमेनोमिक्स</a>
		</h4>
		<ul class="news-list unstyled">
			<?php wp_reset_query();?>
			<?php query_posts('category_name=womenomics-2&posts_per_page=5');?>
			<?php $count = 0;?>
			<?php while(have_posts()) : the_post();?>
				<?php $count++;?>
				<?php if($count <=1) : ?>
					<li class="media">
						<div class="pull-left">
							<div class="media-object">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">
								
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>
							<?php
		 						$excerpt = get_the_excerpt();
		  						echo string_limit_words($excerpt,15)."...";
							?>
						</div>
					</li>
				<?php else : ?>
					<li class="only-title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</li>
				<?php endif;?>
			<?php endwhile;?>
			<a class="muted pull-right" title="View all post in आज देशमा" href="<?php bloginfo('url');?>/womenomics-2" type="button">बाँकि सबै</a>
		</ul>
	</div>
</div>


