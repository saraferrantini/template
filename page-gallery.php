<?php get_header(); ?>

<style>
#carouselExample {width:85em;
  margin: 0 auto;
  margin-bottom: 10rem;
}
</style>



<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1
    );
    $posts_query = new WP_Query($args);

    $count = 0; // Contatore per la prima immagine

    if ($posts_query->have_posts()) :
      while ($posts_query->have_posts()) : $posts_query->the_post();
        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

        if ($thumbnail_url) {
          // Aggiungi la classe 'active' alla prima immagine
          $active_class = ($count == 0) ? 'active' : '';
    ?>
          <div class="carousel-item <?php echo $active_class; ?>">
            <img src="<?php echo esc_url($thumbnail_url); ?>" class="d-block w-100" alt="<?php the_title_attribute(); ?>">
            <div class="carousel-caption d-none d-md-block">
        <h5><?php the_title(); ?></h5>
        
      </div>
          </div>
    <?php
          $count++; 
        }
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php get_footer(); ?>