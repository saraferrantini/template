<?php
get_header();
?>

<?php the_post() ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <?php if (is_single()) : ?>
    <div>
    
    </div>
<?php endif; ?>

<?php get_footer(); ?>