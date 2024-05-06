<?php get_header(); ?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-danger p-4">
                <div class="card-body text-center">
                    <h1 class="card-title" style="color: red;">ERROR 404</h1>
                    <p>We're sorry, but the page you're looking for is not available.</p>
                    <p><a href="<?php echo home_url(); ?>" style="color: red;">Back to Home</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
