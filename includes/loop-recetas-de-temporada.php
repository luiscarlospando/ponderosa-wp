<?php
$current_post_id = get_the_ID(); // Get the ID of the current post

$desired_terms = ["recetas-de-temporada"];

$args = [
    "post_type" => "receta", // Custom post type
    "posts_per_page" => 3, // Number of posts to display
    "orderby" => "date", // Order by date
    "order" => "DESC", // Latest posts first
    "post__not_in" => [$current_post_id], // Exclude the current post
    "tax_query" => [
        [
            "taxonomy" => "categoria-recetas", // Custom taxonomy
            "field" => "slug", // You can also use 'term_id' or 'name'
            "terms" => $desired_terms, // Array of term slugs, term IDs, or names
            "operator" => "IN", // Possible values are 'IN', 'NOT IN', 'AND'
        ],
    ],
];

$receta_query = new WP_Query($args);

if ($receta_query->have_posts()):
    while ($receta_query->have_posts()):
        $receta_query->the_post(); ?>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <a href="<?php the_permalink(); ?>" class="thumb-link">
                    <?php the_post_thumbnail("thumb-receta", [
                        "class" => "card-img-left img-fluid",
                    ]); ?>
                </a>
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>">
                        <h1 class="card-title"><?php the_title(); ?></h1>
                    </a>
                    <p class="card-text"><?php html5wp_excerpt(
                        "html5wp_index"
                    ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
else:
     ?>
    <p>No se encontraron recetas.</p>
<?php
endif;
?>
