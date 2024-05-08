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
function get_category_posts() {
    $categories = get_categories();

    // Array per raggruppare le sottocategorie per nome
    $grouped_categories = array();

    // Itera su tutte le categorie
    foreach ($categories as $category) {
        // Se la categoria non ha genitori (è una categoria di primo livello)
        if ($category->parent == 0) {
            // Verifica se la categoria ha sottocategorie
            $sub_categories = get_categories(array(
                'parent' => $category->term_id
            ));

            // Se ci sono sottocategorie, raggruppale per nome
            if ($sub_categories) {
                foreach ($sub_categories as $sub_category) {
                    $grouped_categories[$sub_category->name][] = $sub_category;
                }
            }
        }
    }

    // Array per memorizzare gli ID dei post già visualizzati
    $displayed_posts = array();

    // Itera sui gruppi di sottocategorie per ottenere i post associati
    foreach ($grouped_categories as $group_name => $sub_categories) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mt-5"><?php echo ucfirst($group_name); ?></h2>
                    <div class="row">
                        <?php
                        foreach ($sub_categories as $sub_category) {
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'category__in' => $sub_category->term_id,
                            );
                            $posts_query = new WP_Query($args);

                            // Output delle card solo se ci sono post nella categoria corrente
                            if ($posts_query->have_posts()) :
                                while ($posts_query->have_posts()) : $posts_query->the_post();
                                    // Controlla se il post è già stato visualizzato
                                    if (in_array(get_the_ID(), $displayed_posts)) {
                                        continue;
                                    }

                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $content = get_the_content();

                                    if ($thumbnail_url && $content) {
                                        // Aggiungi l'ID del post all'array dei post visualizzati
                                        $displayed_posts[] = get_the_ID();
                                        ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
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
                            endif;
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

// Output delle card divise per categoria
get_category_posts();
?>

<?php
get_footer();
?>