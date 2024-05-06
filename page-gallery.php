<?php get_header(); ?>

<style>
  .slider2-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .card2 {
    flex: 0 0 auto;
    width: 300px;
    margin: 10px;
    transition: transform 0.3s ease; /* Aggiunge una transizione al passaggio del mouse */
  }

  .card2 img {
    width: 100%;
    height: auto;
    max-width: 100%;
  }

  .card2:hover {
    transform: scale(1.4); /* Ingrandisce la card al passaggio del mouse */
  }
</style>

<div class="slider2-container">
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
  );
  $posts_query = new WP_Query($args);

  if ($posts_query->have_posts()) :
    while ($posts_query->have_posts()) : $posts_query->the_post();

      // Ottieni l'URL dell'immagine in evidenza
      $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

      if ($thumbnail_url) {
  ?>
        <div class="card2">
          <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
          <h6><?php the_title(); ?></h6>
        </div>
  <?php
      }

    endwhile;
    wp_reset_postdata();
  else :
    echo 'Nessun post trovato.';
  endif;
  ?>
</div>

<?php get_footer(); ?>