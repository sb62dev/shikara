<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="singleIngsightsPage">
    <div class="container_outer container_outer_pb"> 

        <?php
            // Start the Loop.
            while ( have_posts() ) :
                the_post();
                ?>

				<section class="innerBanner">
					<div class="container">
						<div class="innerBanner_wrap" data-aos="fade-up"> 
							<div class="banner_bredcrumb">
								<ul> 
									<li> 
										<a href="/insights/"><span>< Back</span></a>  
									</li> 
								</ul>
							</div> 
							<div class="insight_cate">
								<?php 
									$categories = get_the_category();
									if ( ! empty( $categories ) ) {
										foreach ( $categories as $category ) {
											echo '<span>' . esc_html( $category->name ) . '</span> ';
										}
									}
								?>
							</div>
							<h1 class="h1 mb-0"> <?php the_title(); ?></h1>
							<span class="insight_date"><?php echo get_the_date(); ?></span>
						</div>
					</div>
				</section>
                
                <div class="singleInsight">
                    <div class="container">
						<!-- Display the featured image -->
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="featured-image">
								<?php the_post_thumbnail('full'); ?>
							</div>
						<?php endif; ?>
						<div class="singleContentWrap">
							<?php the_content(); ?>
						</div>
                        <div class="singleBtmContent">
							<?php
								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'your-theme-textdomain' ),
										'after'  => '</div>',
									)
								);
							?>
						</div>
						<div class="singleftrNav">
						<?php  
							the_post_navigation(
								array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'your-theme-textdomain' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'your-theme-textdomain' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'your-theme-textdomain' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'your-theme-textdomain' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
								)
							);
						?>
						</div>
                    </div>
                </div>
			<?php endwhile; 
        ?> 
    </div>
</div>

<?php
get_footer();
