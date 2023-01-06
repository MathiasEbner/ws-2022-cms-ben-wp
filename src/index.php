<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->
<?php
/*
 * Template Name: TemplateIndex
 */
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="Frisch gebackene Brotware, der beste Kaffee Salzburgs und die köstlichsten Torten."
        />
        <meta name="keywords" content="Salzburg, Bäcker, Bäckerei, Frühstück, Jobs, Lehrberuf, Brot, Kaffee, Torte" />
        <title>Ben Müller | Bäckerei</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
        <?php wp_head(); ?>
    </head>
    <body>
    <?php wp_body_open(); ?>
    <?php get_header(); ?>
        <main>
            <section id="products">
                <h2>Was wir Ihnen zu bieten haben</h2>
                <p class="subHeadline">Wir sind stolz auf unsere umfangreichenden Spezialitäten</p>
                <div class="productsContainer">
                    <?php
                        $products_query = new WP_Query(array('category_name' => 'products', 'posts_per_page' => '3', 'order' => 'ASC' ));
                        if( $products_query->have_posts() ) {
                            while( $products_query->have_posts() ) {
                                $products_query->the_post(); // iterate the post here
                    ?>
                        <div class="product">
                            <?php the_post_thumbnail(); ?>
                            <div class="productTextContainer">
                                <p class="subHeadlineProduct"><?php the_title(); ?></p>
                                <?php the_content(); ?>
                                <a href=<?php the_permalink(); ?> class="button">Mehr erfahren</a>
                            </div>
                        </div>
                    <?php
                            }
                        }
                        ?>
                </div>
            </section>
            <section id="news">
                <h2>Neuigkeiten</h2>
                <p class="subHeadline">Bei uns gibt es stets Neues zu erfahren</p>
                <div class="newsContainer">
                <?php
                        $news_query = new WP_Query(array('category_name' => 'news', 'posts_per_page' => '3' ));
                        if( $news_query->have_posts() ) {
                            while( $news_query->have_posts() ) {
                                $news_query->the_post(); // iterate the post here
                    ?>
                    <article>
                        <?php the_post_thumbnail(); ?>
                        <div class="newsTextContainer">
                            <a href=<?php the_permalink(); ?>><h3><?php the_title(); ?></h3></a>
                            <?php the_content(); ?>
                            <div class="newsInfo">
                                <p><?= get_post_custom_values( 'category' )[0]; ?></p> 
                                <p><?php the_time('j F Y'); ?></p>
                            </div>
                        </div>
                    </article>
                    <?php
                            }
                        }
                        ?>
                </div>
            </section>
            <section id="jobs">
                <h2>Jobs und Karrieremöglichkeiten</h2>
                <p class="subHeadline">Wir suchen nach Ihren Fähigkeiten</p>
                <p>
                    Ob in der Bäckerei, in der Filiale, in der Logistik oder in der Zentrale - die Einsatzmöglichkeiten
                    sind vielfältig. Wir suchen Persönlichkeiten mit 100% Leidenschaft!
                </p>
                <div class="jobsContainer">
                <?php
                        $jobs_query = new WP_Query(array('category_name' => 'jobs', 'posts_per_page' => '3' ));
                        if( $jobs_query->have_posts() ) {
                            while( $jobs_query->have_posts() ) {
                                $jobs_query->the_post(); // iterate the post here
                    ?>
                        <div class="job">
                            <?php the_post_thumbnail(); ?>
                            <a href=<?php the_permalink(); ?> class="jobButton"><?php the_title(); ?></a>
                        </div>
                    <?php
                            }
                        }
                        ?>
                </div>
                <a href="#" class="button">Mehr ansehen</a>
            </section>
        </main>
        <script src='<?php echo get_template_directory_uri() ?>/main.js' type="module"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                MainNav.init();
            });
        </script>
        <?php get_footer(); ?>
        <?php wp_footer(); ?> 
    </body>
</html>
