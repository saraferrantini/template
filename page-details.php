<?php
/*
Template Name: Dettagli Canada
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title">Canada</h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <img src="https://assets3.thrillist.com/v1/image/3109501/1200x600/scale;;webp=auto;jpeg_quality=85.jpg" alt="Immagine Canada">
                <p>Il Canada è un vasto paese che abbraccia dalla costa atlantica a quella pacifica. È un paradiso naturale con paesaggi mozzafiato che spaziano dalle maestose Montagne Rocciose ai fiordi ghiacciati del Nord.</p>
                <p>È anche una terra di diversità culturale, con città dinamiche come Toronto e Montreal che riflettono l'energia cosmopolita e l'accoglienza degli immigrati da tutto il mondo.</p>
                <p>Alcune attrazioni popolari del Canada includono il Parco Nazionale Banff, il CN Tower, le Cascate del Niagara e molto altro.</p>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>