<?php
/**
* Homepage Template
* @package shiv
*/
?>
<?php get_header(); ?>
<!-- header -->

<div class=" col-md-12">	 
	 	 <div class="about">
		 
		  <?php if ( have_posts() ) : 
		  	while ( have_posts() ) : the_post(); ?>
		  <div class="abt-top">
			 <div class="col-md-8 abt-info">
				 <h4><?php the_title(); ?></h4>
				 <p><?php echo get_the_content();?></p>
			 </div>
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
			 <div class="col-md-4 abt-pic">
				
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) {


		do_action( 'before_sidebar' );
		dynamic_sidebar( 'sidebar-1' );


	}?>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
