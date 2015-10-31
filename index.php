<?php
/**
* Homepage Template
* @package shiv
*/
?>
<?php get_header(); ?>
<!-- header -->
<div class="col-md-2 sidebar">
		 <div class="sidebar_top">
			 <h1><a href="index.html">BARAN<span>B</span></a></h1> 			 
		 </div>
		 <div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="<?php print(get_template_directory_uri()); ?>/assets/images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
		</div>
		<div class="drop-navigation">
			 <div class="top-menu">
				 <p>write anything here</p>		 		 
			 </div>
			<!-- script-for-menu -->
						
			
			 <div class="side-btm">
				<div class="social-icons">
						<ul>
							<li><a href="#"><span class="fa"> </span></a></li>
							<li><a href="#"><span class="tw"> </span></a></li>
							<li><a href="#"><span class="g"> </span></a></li>
							<li><a href="#"><span class="in"> </span></a></li>
						</ul>
						<div class="clearfix"></div>
				</div>
				<div class="copyright">
					<p> © 2015 Rissner. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
			 </div>
		</div>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">	 
		<div class="clearfix"></div>
	 	 <div class="about">
		 <h3>Recent Blog Posts</h3>
		  <?php if ( have_posts() ) : 
		  	while ( have_posts() ) : the_post(); ?>
		    <a href="<?php echo the_permalink();?>"><div class="abt-top">
			 <div class="col-md-8 abt-info">
				 <h4><?php the_title(); ?></h4>
				 <p><?php echo get_the_excerpt();?></p>
			 </div>
			 <div class="col-md-4 abt-pic">
				 <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>
		 </div></a>
		<?php endwhile;
          // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'blogshiv' ),
				'next_text'          => __( 'Next page', 'blogshiv' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogshiv' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
		 endif;?>

	 </div>
<div>
<!-- categories start -->
<div class="cat-mem" id="cat">
			   <div class="cat-main">
					<div class="about-head">
			          <h3>OUR cate</h3>
			          <span> </span>
			        </div>
						<ul class="ch-grid">
					
					<li>
						<a href="#"><div class="ch-item" style="background-image: url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/cate/saurabh.jpg);">
							<div class="ch-info">
								<h3>Saurabh</h3>
								<p></p>
							</div>
						</div></a>
					</li>
					<li>
						<a href="#"><div class="ch-item" style="background-image: url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/cate/tushar.png);">
							<div class="ch-info">
								<h3>Tushar</h3>
								<p></p>
							</div>
						</div></a>
					</li>
					<li>
						<a href="#"><div class="ch-item" style="background-image: url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/cate/desi.jpg);">
							<div class="ch-info">
								<h3>Deshraj</h3>
								<p></p>
							</div>
						</div></a>
					</li>
					
					<li>
						<a href="#"><div class="ch-item" style="background-image: url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/cate/shivbaran.jpg);">
							<div class="ch-info">
								<h3>Shiv Baran</h3>
								<p></p>
							</div>
						</div></a>
					</li>
					
				</ul>
					<div class="clearfix"> </div>
			</div>
</div>
</div>
<!-- categories ends -->

</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
