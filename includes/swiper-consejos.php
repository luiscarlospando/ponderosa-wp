<!-- Swiper -->
<div class="swiper swiper-consejos">
    <div class="swiper-pagination"></div>
    <div class="swiper-wrapper">
        <?php
        $current_post_id = get_the_ID(); // Get the ID of the current post

        $args = [
            "post_type" => "consejo", // Custom post type
            "posts_per_page" => -1, // Number of posts to display
            "orderby" => "date", // Order by date
            "order" => "DESC", // Latest posts first
            "post__not_in" => [$current_post_id], // Exclude the current post
        ];

        $receta_query = new WP_Query($args);

        if ($receta_query->have_posts()):
            while ($receta_query->have_posts()):
                $receta_query->the_post(); ?>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="<?php the_permalink(); ?>" class="thumb-link">
                            <?php the_post_thumbnail("thumb-square", [
                                "class" => "card-img-top img-fluid",
                            ]); ?>
                        </a>
                        <div class="card-body">
                            <h1 class="card-title"><?php the_title(); ?></h1>
                            <a href="<?php the_permalink(); ?>" class="btn-ver">
                                Ver <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else:
             ?>
            <p>No se encontraron consejos.</p>
        <?php
        endif;
        ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
