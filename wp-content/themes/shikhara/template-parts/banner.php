<section class="innerBanner" style="background-color:<?php the_field('hero_bg_color'); ?>;background-image: url('<?php the_field('bg_image'); ?>');">
    <div class="container">
        <div class="innerBanner_wrap" data-aos="fade-up">
            <?php if( get_field('hero_sub_title') ): ?>
            <div class="subHeading"> <?php the_field('hero_sub_title'); ?> </div>
            <?php endif; ?>
            <?php if( get_field('hero_title') ): ?>
            <h1 class="h1 mb-0"> <?php the_field('hero_title'); ?> </h1>
            <?php endif; ?>
        </div>
    </div>
</section>
