<?php get_header(); ?>

    <?php
    $jumbotron = locate_template("includes/jumbotron.php");
    if ($jumbotron) {
        load_template($jumbotron, true);
    }
    ?>

    <section id="productos" class="section-gray py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1><?php single_cat_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                    <div class="col-lg-4 mb-5">
                        <div class="card">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail("thumb-vertical", [
                                    "class" => "card-img-top img-fluid",
                                ]); ?>
                            </a>
                            <div class="card-body">
                                <h1 class="card-title"><?php the_title(); ?></h1 >
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                    Ver producto
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile; ?>
                <?php
                else:
                     ?>
                <?php
                endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
