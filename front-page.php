<?php get_header(); ?>

<!-- Slider con titolo in grande e sfondo immagine -->
<div id="slider">
    <h1>Prepara lo zaino! Si parte.</h1>
</div>

<div class="container-fluid my-5 py-5">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-12 col-lg-6 col-xxl-4 my-3">
                <a href="<?php the_permalink()?>" class="card cardPlace" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
                    <div class="card-body namePlace">
                        <h2 class="card-title text-center text-uppercase titlePlace"><?php the_title(); ?></h2>
                    </div>
                </a>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>


<?php get_footer(); ?>