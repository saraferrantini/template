
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

    <h1>Prepara lo zaino, si parte!</h1>
</div>


<!-- Sezione "Dicono di noi" -->
<div id="about-us" class="section">
    <div class="container">
        <div class="about-us-content">
            <div class="about-us-text">
                <h1>Chi siamo</h1>
                <p>Con passione e impegno, creiamo esperienze indimenticabili che parlano da sole, guadagnandoci la fiducia di coloro che cercano avventure autentiche e memorabili. 
                    <p>La nostra missione è quella di ispirare avventure, connettere culture e rendere il mondo accessibile a tutti. Ci impegniamo a fornire viaggi che non solo soddisfino le vostre aspettative, ma che superino ogni vostra aspettativa, creando ricordi duraturi lungo il cammino. </p>
              
            </div>
            <div class="about-us-image">
                <img src="http://localhost/blog-viaggi/wordpress/wp-content/uploads/2024/04/viaggi-di-gruppo-1-680x408-1.jpg" alt="Immagine Chi siamo">
            </div>
        </div>
    </div>
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

<!-- Sezione Durante il viaggio -->
<div id="during-travel" class="section">
    <div class="container">
        <h1>Durante il viaggio</h1>
        <div class="during-travel-content">
            <div class="during-travel-item">
                <img class="social-icon" style="width: 50px; height: auto; fill: #ed6f1d;" src="<?php echo get_template_directory_uri(); ?>../assets/person.svg" alt="Person" />
                <h4>Chi conoscerai?</h4>
                <p>Durante il viaggio avrai l’opportunità di incontrare persone affascinanti provenienti da tutto il mondo, creando legami e scambiando esperienze con compagni di viaggio che condividono la tua passione per l’avventura e la scoperta.</p>
            </div>
            <div class="during-travel-item">
                <img class="social-icon" style="width: 50px; height: auto; fill: #ed6f1d;" src="<?php echo get_template_directory_uri(); ?>../assets/binoculars.svg" alt="Binocolo" />
                <h4>Chi ti guiderà?</h4>
                <p>Durante il viaggio sarà una guida locale esperta, dotata di profonda conoscenza della cultura, della storia e delle tradizioni del luogo. Grazie alla sua competenza, sarai accompagnato attraverso i luoghi più significativi e avrai accesso a racconti e aneddoti che arricchiranno la tua esperienza.</p>
            </div>
            <div class="during-travel-item">
                <img class="social-icon" style="width: 50px; height: auto; fill: #ed6f1d;" src="<?php echo get_template_directory_uri(); ?>../assets/fire.svg" alt="Fire" />
                <h4>Quali avventure ti aspettano?</h4>
                <p>Le avventure che farai includeranno esplorazioni in luoghi mozzafiato, incontri con culture diverse, e attività emozionanti che ti porteranno al di là dei confini della tua comfort zone. Ogni giorno ti riserverà nuove e indimenticabili esperienze.</p>
            </div>
        </div>
    </div>
</div>



<!-- Sezione Testimonianze -->
<div id="testimonials" class="section">
    <div class="container">
        <h2>Testimonianze</h2>
        <div id="testimonials-container">
            <!-- Testimonianza 1 -->
            <div class="testimonial-card">
                <img src="https://hips.hearstapps.com/cit.h-cdn.co/assets/17/14/2560x1706/gallery-1491579603-viaggiare-da-sola.jpg?resize=640:*" alt="Testimonianza 1">
                <p>Ogni momento è stato magico, dalle sorprese inaspettate alle connessioni umane profonde che abbiamo creato lungo il percorso</p>
                <div>-Maria-</div>
            </div>
            <!-- Testimonianza 2 -->
            <div class="testimonial-card">
                <img src="https://www.ramitours.it/wp-content/uploads/viaggiare-con-sconosciuti-1024x683.jpg" alt="Testimonianza 2">
                <p>E’ stata un’esperienza straordinaria che ha superato ogni aspettativa. Ogni tappa ci ha regalato emozioni uniche.

</p>
<div>-Luca e Giulia-</div>
            </div>
            <!-- Testimonianza 3 -->
            <div class="testimonial-card">
                <img src="https://images2.corriereobjects.it/methode_image/2022/06/29/Salute/Foto%20Salute%20-%20Trattate/GettyImages-1363398400-kskC-U33501866499873laF-656x492@Corriere-Web-Sezioni.jpg?v=20220730152137" alt="Testimonianza 3">
                <p>La dedizione del team e la cura per ogni dettaglio hanno reso questo viaggio un’esperienza indimenticabile.</p>
                <div>-Miya Galindo-</div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
