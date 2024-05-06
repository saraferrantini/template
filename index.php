
<!-- Corrisponde al file index.php e sarebbe la HOME PAGE -->

<!-- il file index.php contiene tutti gli elementi che compongono la nostra home page-->

<!-- serve per richiamare quanto scritto nell'header -->
<?php get_header(); ?>

<!-- Slider con titolo in grande e sfondo immagine -->
<div id="slider">
    <h1>Prepara la valigia! Si parte.</h1>
</div>

<!-- Sezione "Dicono di noi" -->
<div id="about-us">

    <article>
        <blockquote>
        <h2>Dicono di noi</h2>
            <p>"Itinere è molto più di un'agenzia di viaggi: è un'opportunità per scoprire il mondo in modo autentico e significativo. Con il nostro approccio unico al turismo responsabile, offriamo esperienze di viaggio coinvolgenti che trasformano non solo i luoghi che visitiamo, ma anche le vite di coloro che vi partecipano. Dalle avventure all'aria aperta alle esplorazioni culturali, ogni viaggio con Itinere è un'opportunità per connettersi con il mondo e con se stessi, lasciando un'impronta positiva ovunque andiamo."</p>
        </blockquote>
    </article>
</div>

<!-- Cards -->

<div class="container fluid">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-3 card m-3">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h5>
                </div>
                <div style="height: 200px" class="overflow-hidden">
                    <img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">
                </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
