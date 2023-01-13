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
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:title" content="Ben bäckt, die beste Bäckerei mit dem besten Cafe!" />
        <meta property="og:description" content="Frisch gebackenes Brot zum Verlieben, der beste Kaffee der Stadt und köstliche Torten. Was will man mehr?">
        <meta property="og:url" content="http://vm-ultramarine.multimediatechnology.at/ben" />
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/hero_bearbeitet.jpg" />

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
        <!-- Image Sources:
                https://www.freepik.com/free-vector/collection-handrawn-elements-bakery_10362246.htm#query=bread&position=1&from_view=search&track=sph
                https://www.freepik.com/free-vector/set-wheats-ears_15027822.htm#query=weizen&position=0&from_view=search&track=sph
                https://www.pexels.com/de-de/foto/person-die-teig-auf-braunem-holztisch-halt-6287295/
                https://unsplash.com/photos/2-U0A2tNYhM
                https://unsplash.com/photos/RndRFJ1v1kk
                https://unsplash.com/photos/6VhPY27jdps
                https://unsplash.com/photos/XtYPjMTNQUA
                https://unsplash.com/photos/Js05xQ5TLUw
                https://unsplash.com/photos/5QgIuuBxKwM
                https://unsplash.com/photos/neu4T59mTcY
                https://unsplash.com/photos/qPQqZ0y-rJ0
                https://unsplash.com/photos/jHu6Zyarhyk
                https://unsplash.com/photos/qoPrNU12Cg0
                https://unsplash.com/photos/0w-uTa0Xz7w
                https://unsplash.com/photos/hbYrBY8eVMc
                https://www.pexels.com/de-de/foto/mann-kuche-dessert-glucklich-8478178/
                https://www.pexels.com/de-de/foto/holz-ferien-winter-baum-5498382/
                https://www.pexels.com/de-de/foto/bar-freunde-manner-lacheln-5529899/
                https://unsplash.com/photos/LqkFX2Km1a0
                https://unsplash.com/photos/Ns2aJ5OXKds
                https://unsplash.com/photos/SIhqhxUA2_c
        -->
    </body>
</html>
