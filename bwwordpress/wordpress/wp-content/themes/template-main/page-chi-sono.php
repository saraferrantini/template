<?php
/*
Template Name: page-chi-sono
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <p>Benvenuto nella pagina "Chi Sono" del mio sito! Sono lieto di condividere con te informazioni su di me e sul mio lavoro.</p>
                <p>Sono un appassionato viaggiatore e scrittore, e attraverso questo sito condivido le mie esperienze di viaggio, consigli e riflessioni personali. Spero che troverai il contenuto interessante e utile!</p>
                <p>Non vedo l'ora di esplorare insieme il mondo attraverso le mie parole e le mie avventure. Grazie per essere qui!</p>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
