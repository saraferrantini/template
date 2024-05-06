<!-- <footer>
    <div class="footer-content">
    <p><strong>Itinere</strong></p>
        <p>Questo sito è di proprietà di Itinere – Via Avventura, 10 – 20100 Avventuraville (AV) | Cod. fiscale e P.IVA 12345678901 </p>
    </div>
</footer> -->

<footer>
    <div class="container">
        <div class="row">
        <div class="col-6 d-flex align-items-center">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </div>
            
            <div class="col-6">
                <h3 class="fw-bold">CONTACT US!</h3>
                <?php include 'form.php'; ?>
            </div>

        </div>
    </div>
</footer>
    
    <?php wp_footer(); ?>
</body>
</html>
