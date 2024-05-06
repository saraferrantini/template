<?php

get_header();
?>

   
  <div class="slider1">
    <div class="slider1-container">
        <?php
        // Query per recuperare tutti i post
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1, // Recupera tutti i post
        );
        $posts_query = new WP_Query($args);

        // Loop attraverso i post
        if ($posts_query->have_posts()) :
            while ($posts_query->have_posts()) : $posts_query->the_post();

                // Ottieni l'ID dell'immagine in evidenza
                $thumbnail_id = get_post_thumbnail_id();

                if ($thumbnail_id) {
                    // Ottieni l'URL dell'immagine in evidenza
                    $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full');
                    ?>
                    <div class="slide1">
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
                    </div>
                    <?php
                }

            endwhile;
            wp_reset_postdata();
        else :
            echo 'Nessun post trovato.';
        endif;
        ?>
    </div><!-- .slider1-container -->
    <div class="slider-controls">
        <button class="prev-slide">&lt;</button>
        <button class="next-slide">&gt;</button>
    </div><!-- .slider-controls -->
</div><!-- .slider1 -->

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var currentSlide = 0;
        var slides = document.querySelectorAll('.slide1');

        function showSlide(n) {
            slides.forEach(function(slide) {
                slide.style.display = 'none';
            });
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].style.display = 'block';
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        document.querySelector('.prev-slide').addEventListener('click', prevSlide);
        document.querySelector('.next-slide').addEventListener('click', nextSlide);

        showSlide(currentSlide); // Mostra il primo slide all'avvio
        setInterval(nextSlide, 2000); // Imposta l'intervallo per passare allo slide successivo ogni 2 secondi
    });
</script>
  

<?php
get_footer();
