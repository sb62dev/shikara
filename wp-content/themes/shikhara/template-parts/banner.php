<?php if( get_field('hero_title') ): ?>
<section class="innerBanner" style="background-color:<?php the_field('hero_bg_color'); ?>">
    <div class="container">
        <div class="innerBanner_wrap" data-aos="fade-up">
            <?php if (have_rows('breadcrumb')): ?>
            <div class="banner_bredcrumb">
                <ul>
                    <?php while (have_rows('breadcrumb')): the_row(); ?>
                    <li>
                        <?php 
                        $label = get_sub_field('label');
                        $link = get_sub_field('link');
                        if ($label): 
                        if ($link): ?>
                        <a href="<?php echo esc_url($link); ?>"><span><?php echo esc_html($label); ?></span></a>
                        <?php else: ?>
                        <span><?php echo esc_html($label); ?></span>
                        <?php endif;
                    endif; ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>
            <h1 class="h1 mb-0"> <?php the_field('hero_title'); ?> </h1>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
    function setBackgroundImage() {
        var mobileBgImage = "<?php the_field('bg_image_mobile'); ?>";
        var desktopBgImage = "<?php the_field('bg_image'); ?>";

        if (window.innerWidth < 768 && mobileBgImage) {
            document.querySelector('.innerBanner').style.backgroundImage = "url('" + mobileBgImage + "')";
        } else {
            document.querySelector('.innerBanner').style.backgroundImage = "url('" + desktopBgImage + "')";
        }
    }

    // Call the function on page load
    setBackgroundImage();

    // Call the function on window resize
    window.addEventListener('resize', setBackgroundImage);

</script>
