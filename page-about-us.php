<?php get_header(); ?>

<style>
/* Stili CSS per la card "Chi Siamo" */
.about-us-content {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.about-us-content h2 {
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

.about-us-description {
  font-size: 16px;
  line-height: 1.6;
  color: #666;
}

.about-us-image {
  max-width: 100%;
  overflow: hidden; /* Nasconde parti dell'immagine che superano il contenitore */
  border-radius: 8px 8px 0 0; /* Bordi arrotondati solo in alto */
  margin-bottom: 20px; /* Aggiungi spazio sotto l'immagine */
}

.about-us-image img {
  width: 100%; /* Imposta la larghezza dell'immagine al 100% del contenitore */
  height: auto;
  transition: transform 0.3s ease; /* Aggiunge un'animazione al ridimensionamento dell'immagine */
}

.about-us-image img:hover {
  transform: scale(0.9); /* Riduce leggermente le dimensioni dell'immagine al passaggio del mouse */
}

/* Stili per i link nel contenuto */
.about-us-description a {
  color: #007bff;
  text-decoration: none;
}

.about-us-description a:hover {
  text-decoration: underline;
}

/* Stili per la sezione "Il Nostro Team" */
.our-team-section {
  margin-top: 40px; /* Aggiungi spazio sopra la sezione del team */
  display: flex; /* Imposta il layout dei membri del team su flex */
  justify-content: center; /* Centra gli elementi orizzontalmente */
}

.team-member {
  width: 20%; /* Imposta la larghezza dei membri del team al 20% della larghezza totale */
  text-align: center;
  margin-right: 10px; /* Riduci lo spazio tra le foto */
}

.team-member img {
  border-radius: 8px; /* Rendi le immagini del team quadrate */
  width: 100%; /* Imposta la larghezza dell'immagine al 100% del contenitore */
  height: 150px; /* Imposta un'altezza fissa per tutte le immagini */
  object-fit: cover; /* Copre l'area specificata mantenendo le proporzioni */
  margin-bottom: 10px;
}

.team-member p {
  margin: 0;
  font-size: 14px;
  color: #333;
}

.team-title {
  text-align: center; /* Centra il titolo orizzontalmente */
  margin-top: 90px; /* Aggiungi spazio sopra il titolo */
  margin-bottom: 40px; /* Aggiungi spazio sotto il titolo */
}

.team-card {
  margin-bottom: 100px; /* Aggiungi spazio sotto la sezione del team */
}
</style>

<?php // Recuperare il contenuto della pagina About Us
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <div class="about-us-content">
            <h2><?php the_title(); ?></h2>
            <div class="about-us-image">
                <?php
                // Definisci l'URL dell'immagine direttamente nel codice
                $image_url = 'https://strapi-imaginary.weroad.it/resource/medium/13772/viaggio-di-gruppo-giordania-petra.jpg';
                ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="Immagine About Us">
            </div>
            <div class="about-us-description">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    endwhile;
endif;
?>

<div class="team-title">
  <h2>Il nostro Team</h2>
</div>

<div class="team-card">
  <div class="our-team-section">
      <div class="team-member">
          <img src="https://www.grazia.it/content/uploads/2022/07/zaino-ragazza-viaggio.jpg" alt="Foto Persona 1">
          <p>Giulia</p>
          <p>Coordinatore</p>
      </div>
      <div class="team-member">
          <img src="https://img.freepik.com/free-photo/side-view-traveler-taking-photos_23-2148622579.jpg" alt="Foto Persona 2">
          <p>Marco</p>
          <p>Comunicazione</p>
      </div>
      <div class="team-member">
          <img src="https://mondointasca.it/wp-content/uploads/2015/12/viaggiointesta-Ragazzo-in-viaggio.jpg" alt="Foto Persona 3">
          <p>Pato</p>
          <p>Coordinatore</p>
      </div>
      <div class="team-member">
          <img src="  https://www.raiplay.it/cropgd/1440x810/dl/img/2023/07/10/1689017998666_2048x1152%205.jpg" alt="Foto Persona 4">
        
          <p>Carmen</p>
          <p>Guida montagna</p>
      </div>
      
  </div>
  <!-- Sezione Testimonianze -->
  <div id="testimonials" class="section mt-5"> <!-- Aggiunto mt-5 per aggiungere spazio sopra la sezione -->
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
                <p>E’ stata un’esperienza straordinaria che ha superato ogni aspettativa. Ogni tappa ci ha regalato emozioni uniche.</p>
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

  
</div>


<?php get_footer(); ?>
