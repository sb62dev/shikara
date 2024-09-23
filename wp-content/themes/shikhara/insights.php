<?php
/**
 * Template Name: Insights Page
**/

get_header(); 

// Get the featured post ID
$featured_query = new WP_Query(array(
    'meta_key' => 'featured_post',
    'meta_value' => '1',
    'posts_per_page' => 1,
));

$featured_post_id = 0;
if ($featured_query->have_posts()) : 
    while ($featured_query->have_posts()) : $featured_query->the_post(); 
        $featured_post_id = get_the_ID();
    endwhile; 
    wp_reset_postdata();
endif;

function custom_excerpt($post_id, $char_limit) {
    $excerpt = get_the_excerpt($post_id);
    
    // Check if the excerpt length is greater than or equal to the character limit
    if (strlen($excerpt) > $char_limit) {
        $excerpt = substr($excerpt, 0, $char_limit) . '...';
    } elseif (strlen($excerpt) == $char_limit) {
        $excerpt .= '...';
    }

    return $excerpt;
}

function render_post_card($post_id) {
    setup_postdata($post_id);
    ?>
    <div class="col-md-6 col-lg-4">
        <a href="<?php echo get_permalink($post_id); ?>" class="post_card">
            <div class="post_card_img">
                <?php echo get_the_post_thumbnail($post_id, 'full'); ?>
            </div>
            <div class="post_card_body">
                <div class="insight_cate">
                    <?php 
                    $categories = get_the_category($post_id);
                    if ( ! empty( $categories ) ) {
                        foreach ( $categories as $category ) {
                            echo '<span>' . esc_html( $category->name ) . '</span> ';
                        }
                    }
                    ?>
                </div>
                <h4><?php echo get_the_title($post_id); ?></h4>
                <div class="insight_para"><?php echo custom_excerpt($post_id, 128); ?></div>
                <div class="insight_date"><?php echo get_the_date('', $post_id); ?></div>
            </div>
        </a>
    </div>
    <?php
    wp_reset_postdata();
}

?>

<div class="ingsightsPage">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <?php if ($featured_post_id) : ?>
        <section class="insightFeature padd-row pb-0">
            <div class="container"> 
                <div class="insightFeature_inner">
                    <div class="insightFeature_heading" data-aos="fade-up"> 
                        <div class="sub_heading">
                            <h3>FEATURED INSIGHT</h3>
                        </div> 
                    </div> 
                    <?php 
                        $featured_post = get_post($featured_post_id);
                        setup_postdata($featured_post);
                    ?>
                    <a href="<?php echo get_permalink($featured_post_id); ?>" class="post_card post_card_feature">
                        <div class="row align-items-center">   
                            <div class="col-md-6"> 
                                <div class="post_card_img" data-aos="fade-up">
                                    <?php echo get_the_post_thumbnail($featured_post_id, 'full'); ?>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="post_card_body" data-aos="fade-up">
                                    <div class="insight_cate">
                                        <?php 
                                        $categories = get_the_category($featured_post_id);
                                        if ( ! empty( $categories ) ) {
                                            foreach ( $categories as $category ) {
                                                echo '<span>' . esc_html( $category->name ) . '</span> ';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <h4><?php echo get_the_title($featured_post_id); ?></h4>
                                    <div class="insight_para insight_para_block"><?php echo custom_excerpt($featured_post_id, 170); ?></div> 
                                    <div class="insight_date"><?php echo get_the_date('', $featured_post_id); ?></div>
                                </div>
                            </div> 
                        </div>
                    </a> 
                    <?php 
                        wp_reset_postdata();
                    ?> 
                </div>
            </div>
        </section> 
        <?php endif; ?>

        <section class="insightsSec padd-row">
            <div class="container"> 
                <div class="insightsSec_inner">
                    <div class="insightsSec_tabs" data-aos="fade-up"> 
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#blogall">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#bloginsights">Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#blogpress">Press Release</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#blognews">In The News</a>
                        </li>
                    </ul>
                    </div> 
                    <div class="insightsSec_content" data-aos="fade-up"> 
                        <div class="tab-content">
                            <div class="tab-pane active" id="blogall">
                                <div class="post_cardList">
                                    <div class="row"> 
                                        <?php 
                                        $all_posts_query = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => -1,
                                            //'post__not_in' => array($featured_post_id), // Exclude the featured post
                                        ));

                                        if ($all_posts_query->have_posts()) : 
                                            while ($all_posts_query->have_posts()) : $all_posts_query->the_post();
                                                render_post_card(get_the_ID());
                                            endwhile; 
                                            wp_reset_postdata();
                                        else : ?>
                                            <div class="col-12">
                                                <p>No content found.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bloginsights">
                                <div class="post_cardList">
                                    <div class="row"> 
                                        <?php 
                                        $insights_query = new WP_Query(array(
                                            'category_name' => 'insights',
                                            'posts_per_page' => -1,
                                            //'post__not_in' => array($featured_post_id), // Exclude the featured post
                                        ));

                                        if ($insights_query->have_posts()) : 
                                            while ($insights_query->have_posts()) : $insights_query->the_post();
                                                render_post_card(get_the_ID());
                                            endwhile; 
                                            wp_reset_postdata();
                                        else : ?>
                                            <div class="col-12">
                                                <p>No content found.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="blogpress">
                                <div class="post_cardList">
                                    <div class="row"> 
                                        <?php 
                                        $press_query = new WP_Query(array(
                                            'category_name' => 'press-release',
                                            'posts_per_page' => -1,
                                            //'post__not_in' => array($featured_post_id), // Exclude the featured post
                                        ));

                                        if ($press_query->have_posts()) : 
                                            while ($press_query->have_posts()) : $press_query->the_post();
                                                render_post_card(get_the_ID());
                                            endwhile; 
                                            wp_reset_postdata();
                                        else : ?>
                                            <div class="col-12">
                                                <p>No content found.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="blognews">
                                <div class="post_cardList">
                                    <div class="row"> 
                                        <?php 
                                        $news_query = new WP_Query(array(
                                            'category_name' => 'in-the-news',
                                            'posts_per_page' => -1,
                                            //'post__not_in' => array($featured_post_id), // Exclude the featured post
                                        )); 
                                        
                                        if ($news_query->have_posts()) : 
                                            while ($news_query->have_posts()) : $news_query->the_post();
                                                render_post_card(get_the_ID());
                                            endwhile; 
                                            wp_reset_postdata();
                                        else : ?>
                                            <div class="col-12">
                                                <p>No content found.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section> 

    </div>
</div>

<?php get_footer(); ?>
