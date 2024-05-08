<?php get_header(); ?>

<?php
    $terms = get_terms([
        // 'post_type' => 'post',
        'name__like' => $_GET['s'],
        'fields' => 'ids'
    ]);

    $search_posts = $terms ? get_posts([
        'category__in' => $terms,
    ]) : [];

    $all_posts = new WP_Query();
    $all_posts->posts = array_merge($posts, $search_posts);
    $all_posts->post_count = count($all_posts->posts);
    ?>

    <div class="container-fluid my-5 py-5">
        <div class="row">
        <div class="col-12">
    <h1 class="text-start py-4">Your search result for "<?php echo esc_html($_GET['s']); ?>"</h1>
</div>
        </div>
        <div class="row">
            <?php if ($all_posts->have_posts()) : while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
                    <div class="col-12 col-lg-6 col-xxl-4 my-3">
                        <a href="<?php the_permalink(); ?>" class="card cardPlace" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
                            <div class="card-body namePlace">
                                <h2 class="card-title text-center text-uppercase titlePlace"><?php the_title(); ?></h2>
                            </div>
                        </a>
                    </div>
            <?php endwhile;
            else : ?>
                <div class="col-12">
                    <p>Non ci sono articoli.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php
?>

<?php get_footer(); ?>