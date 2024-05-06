<?php
get_header();
?>

<?php the_post() ?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-primary">
                <div class="card-body text-center">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <div class="mt-4">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>






