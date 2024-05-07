<?php get_header(); ?>

<div class="container-fluid my-5 py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"><?php single_cat_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-12 col-lg-6 col-xxl-4 my-3">
                    <a href="<?php the_permalink(); ?>" class="card cardPlace" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
                        <div class="card-body namePlace">
                            <h2 class="card-title text-center text-uppercase titlePlace"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
        <?php endwhile;
        else : ?>
            <div class="col-12">
                <p>Non ci sono articoli.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>


