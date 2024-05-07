<?php get_header(); ?>

<!-- Slider con titolo in grande e sfondo immagine -->
<?php
// Recupera l'immagine di sfondo della home page
$background_image = get_the_post_thumbnail_url(get_option('page_on_front'), 'full');

// Recupera il testo della home page
$page_content = get_post_field('post_content', get_option('page_on_front'));
?>

<div id="slider" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <h1 class="titleBanner text-uppercase w-100"><?php echo apply_filters('the_content', $page_content); ?></h1>
</div>

<?php
// Recupera tutte le categorie
$categories = get_categories();

if ($categories) :
?>
<div class="container-fluid my-5 py-5">
    <div class="row">
        <?php foreach ($categories as $category) : ?>
            <?php
            // Recupera gli articoli all'interno della categoria
            $category_posts_args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'category__in' => array($category->term_id),
                'orderby' => 'date',
                'order' => 'DESC', // Ordina in modo decrescente per trovare l'articolo più recente
            );
            $category_posts_query = new WP_Query($category_posts_args);

            // Se trova un articolo all'interno della categoria
            if ($category_posts_query->have_posts()) :
                $category_posts_query->the_post();
                // Recupera l'immagine di copertina dell'articolo
                $article_cover_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <div class="col-12 col-lg-6 col-xxl-4 my-3">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="card cardPlace" style="background-image: url('<?php echo esc_url($article_cover_image); ?>'); background-size: cover;">
                        <div class="card-body namePlace">
                            <h2 class="card-title text-center text-uppercase titlePlace"><?php echo esc_html($category->name); ?></h2>
                        </div>
                    </a>
                </div>
            <?php
            endif;
            wp_reset_postdata(); // Ripristina il loop degli articoli
            ?>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>


<?php get_footer(); ?>
