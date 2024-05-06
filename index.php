
<!-- Corrisponde al file index.php e sarebbe la HOME PAGE -->

<!-- il file index.php contiene tutti gli elementi che compongono la nostra home page-->

<!-- serve per richiamare quanto scritto nell'header -->
<?php get_header(); ?>

<!-- Slider con titolo in grande e sfondo immagine -->
<div id="slider">
    <h1>Prepara lo zaino! Si parte.</h1>
</div>

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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/turisti_felici.jpg" alt="Logo" class="logo">
            </div>
        </div>
    </div>
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
