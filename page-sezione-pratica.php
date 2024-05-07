<?php

get_header();
?>
<style>.card {height:32rem;}</style>
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
            <h2><?php echo ucfirst($category_name); ?></h2>
            <div class="row">
                <?php
                while ($posts_query->have_posts()) : $posts_query->the_post();
                    
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    
                    $content = get_the_content();
                
                    if ($thumbnail_url && $content) {
                        ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top " alt="<?php the_title_attribute(); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <div class="card-text"><?php echo wp_trim_words($content, 20); ?></div>
                                     <a href="<?php the_permalink(); ?>" class="btn border">Continua a leggere</a>
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
    <div class="row"><?php get_category_posts('Attività'); ?></div>
    <div class="row"><?php get_category_posts('Trasporti'); ?></div>
    <div class="row"> <?php get_category_posts('Alloggi'); ?></div>
    <div class="row"><?php get_category_posts('Ristoranti'); ?></div>
    
</div>

<?php
get_footer();