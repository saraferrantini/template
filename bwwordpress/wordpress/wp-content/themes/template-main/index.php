
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

<!-- Contenuto delle card -->
<div id="card-container">
    <!-- Card Messico -->
    <div class="card">
        <img src="https://cdn.ideeperviaggiare.it/media/2018/09/messico-tulum-spiaggia-1920x1277-11599.jpg" alt="Immagine Messico">
        <div class="card-text">
            <h2>Messico</h2>
            <p>Con le sue antiche rovine Maya, le spiagge di sabbia bianca della Riviera Maya, i colorati mercati locali e la deliziosa cucina messicana, il Messico offre una vasta gamma di esperienze uniche. </p>
        </div>
    </div>
    <!-- Card Thailandia -->
    <div class="card">
        <img src="https://strapi-imaginary.weroad.it/resource/cover/9349/tks-2.jpg" alt="Immagine Thailandia">
        <div class="card-text">
            <h2>Thailandia</h2>
            <p>La Thailandia, con le sue spiagge di sabbia bianca, le foreste pluviali lussureggianti e i templi antichi, è una destinazione affascinante che attira viaggiatori da tutto il mondo</p>
        </div>
    </div>
    <!-- Card Nuova Zelanda -->
    <div class="card">
        <img src="https://www.mlaworld.com/wp-content/uploads/2021/07/paesaggio-nuova-zelanda.jpg" alt="Immagine Nuova Zelanda">
        <div class="card-text">
            <h2>Nuova Zelanda</h2>
            <p>Conosciuta anche come "Aotearoa" nella lingua Maori, che significa "Terra della lunga nuvola bianca", la Nuova Zelanda è rinomata per la sua flora e fauna uniche, le sue avventure all'aria aperta e la sua cultura accogliente</p>
        </div>
    </div>
</div>

<!-- Card 2 -->
<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>

<div id="card-container">

    <!-- Card Cappadocia -->
    <div class="card">
        <img src="https://assets3.thrillist.com/v1/image/3109501/1200x600/scale;;webp=auto;jpeg_quality=85.jpg" alt="Immagine Cappadocia">
        <div class="card-text">
            <h2>Cappadocia</h2>
            <p>Situata nel cuore della Turchia, incanta i visitatori con le sue iconiche formazioni rocciose chiamate "camini delle fate" e le antiche città sotterranee. Celebre per i suoi paesaggi surreali e le mongolfiere che solcano il cielo all'alba, la Cappadocia offre un'esperienza indimenticabile che mescola storia, avventura e bellezza naturale.</p>
        </div>
    </div>
    <!-- Card Marocco -->
    <div class="card">
        <img src="https://siviaggia.it/wp-content/uploads/sites/2/2021/06/Marocco-apre-ai-turisti.jpg" alt="Immagine Marocco">
        <div class="card-text">
            <h2>Marocco</h2>
            <p>Il Marocco, incantevole crocevia tra l'Africa e l'Europa, affascina con i suoi colori vivaci, i mercati animati, e le maestose catene montuose che si tuffano nell'oceano. Una terra ricca di storia millenaria, dai labirintici souk di Marrakech alle antiche rovine romane di Volubilis, dove l'ospitalità e la cultura si fondono in un'esperienza indimenticabile</p>
        </div>
    </div>
    <!-- Card Canada -->
    <div class="card">
        <img src="https://canadasys.com/wp-content/uploads/2021/05/Canada.jpg.webp" alt="Immagine Canada">
        <div class="card-text">
            <h2>Canada</h2>
            <p>Il Canada, vasto paese che abbraccia dalla costa atlantica a quella pacifica, è un paradiso naturale con paesaggi mozzafiato che spaziano dalle maestose Montagne Rocciose ai fiordi ghiacciati del Nord. È anche una terra di diversità culturale, con città dinamiche come Toronto e Montreal che riflettono l'energia cosmopolita e l'accoglienza degli immigrati da tutto il mondo.</p>
        </div>
    </div>
</div>

<!-- Contenuto dei post -->
<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
