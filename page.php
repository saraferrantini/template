<?php get_header(); ?>


<div id="content" class="pagina">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
