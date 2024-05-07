<?php get_header(); ?>

<!-- Slider con titolo in grande e sfondo immagine -->
<?php
// Recupera l'immagine di sfondo della home page
$background_image = get_the_post_thumbnail_url(get_option('page_on_front'), 'full');

// Recupera il testo della home page
$page_content = get_post_field('post_content', get_option('page_on_front'));
?>

<div id="slider" style="background-image: url('<?php echo $background_image; ?>');">
    <h1 class="titleBanner text-uppercase w-100"><?php echo apply_filters('the_content', $page_content); ?></h1>
</div>

<div class="container-fluid my-5 py-5">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post', // Tipo di post da recuperare (nel caso degli articoli, è 'post')
            'posts_per_page' => -1, // Numero di articoli da visualizzare (-1 per mostrarli tutti)
            'ignore_sticky_posts' => 1 // Ignora gli articoli sticky
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="col-12 col-lg-6 col-xxl-4 my-3">
                    <a href="<?php the_permalink(); ?>" class="card cardPlace" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
                        <div class="card-body namePlace">
                            <h2 class="card-title text-center text-uppercase titlePlace"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
        endif;
        // Ripristina i dati dell'articolo principale
        wp_reset_postdata();
        ?>
    </div>
</div>


<?php get_footer(); ?>