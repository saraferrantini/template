<?php

get_header();
?>
<style>
    .card {
        height: 35rem;
        position: relative;
        overflow: hidden;
    }

    .card-overlay {
        position: absolute;
        top: 0%;
        left: 0%;
        transform: translate(0%, 50%);
        color: white;
        padding: 10px;
        text-align: center;
        transition: background-color 0.3s ease, opacity 0.3s ease; /* Aggiunge la transizione per l'opacità */
        z-index: 1; /* Assicura che il titolo sia sopra l'immagine */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Aggiunge un'ombra al testo */
        opacity: 0; /* Nasconde il titolo di default */
        text-transform: uppercase; 
    }

    .card-title {
        margin-bottom: 0;
    }

    .card-img-top {
        width: 100%;
        height: auto;
        z-index: 0; /* Assicura che l'immagine sia dietro il titolo */
    }

    .card:hover .card-overlay {
        opacity: 1; /* Mostra il titolo al passaggio del mouse */
    }
</style>

<?php
// Funzione per ottenere le card dei post in base alla categoria
function get_category_posts($category_name) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        
    );
    $posts_query = new WP_Query($args);

   
    if ($posts_query->have_posts()) :
        ?>
        <div class="col">
            <h2 class="text-center mt-5"><?php echo ucfirst($category_name); ?></h2>
            <div class="row">
                <?php
                while ($posts_query->have_posts()) : $posts_query->the_post();
                    
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    
                    $content = get_the_content();
                
                    if ($thumbnail_url && $content) {
                        ?><div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-overlay">
                                <h5 class="card-title"><strong><?php the_title(); ?></strong></h5>
                            </div>
                            <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <div class="card-body">
                                <div class="card-text"><?php echo wp_trim_words($content, 20); ?></div>
                                <a href="<?php the_permalink(); ?>" class="btn"><strong><u><em>Continua a leggere...</em></u></strong></a>
                            </div>
                        </div>
                    </div>
                    
                      
                        <?php
                    }
                endwhile;
                ?>
            </div>
        </div>
        <?php
        wp_reset_postdata();
    else :
        echo '<p>Nessun post trovato per la categoria ' . $category_name . '</p>';
    endif;
}

// Output delle card divise per categoria
?>

<div class="container">
   
<div class="row "><?php get_category_posts('Attività'); ?></div>
    <div class="row"><?php get_category_posts('Trasporti'); ?></div>
    <div class="row"><?php get_category_posts('Alloggi'); ?></div>
    <div class="row"><?php get_category_posts('Ristoranti'); ?></div>
    
    
</div>

<?php
get_footer();