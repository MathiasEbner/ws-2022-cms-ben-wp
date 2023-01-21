<?php
/*
 * Template Name: TemplateWorkshops
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
        <title>Ben Müller | Workshops</title>
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
        <header id="headerWorkshop">
            <div class="topNavContainer">
                <h1>
                    <a href="/ben/"><img src="<?php echo get_template_directory_uri() ?>/images/Logo.svg" alt="" /> </a>
                </h1>
                <nav id="mainnav">
                    <button id="hamburger" class="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </button>
                    <ul>
                        <!-- <li><a href="index.php">Bäckerei & Cafe</a></li>
                        <li><a href="workshops.php" class="active">Workshops</a></li>
                        <li><a href="about.php">Über uns</a></li> -->
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section id="workshops">
                <h2>Ja, Sie können es auch!</h2>
                <p class="subHeadline">Wir zeigen Ihnen wie sie frische und köstliche Brotware backen können</p>
                <div class="workshopsContainer">
                    <div class="workshop">
                        <img src="<?php echo get_template_directory_uri() ?>/images/workshop_brot.jpg" alt="" />
                        <div class="workshopTextContainer">
                            <p class="subHeadlineWorkshop">Backen Sie Ihr eigenes Brot!</p>
                            <p>
                                “Lass uns zusammen ein selbstgebackenes Brot backen und lassen das Haus köstlich
                                duften.”
                            </p>
                            <a href="#" class="button">Jetzt buchen</a>
                        </div>
                    </div>
                    <div class="workshop">
                        <img src="<?php echo get_template_directory_uri() ?>/images/workshop_cookies.jpg" alt="" />
                        <div class="workshopTextContainer">
                            <p class="subHeadlineWorkshop">Kuchen, Muffins, Donuts!</p>
                            <p>
                                “Je mehr Sie wiegen, desto schwieriger ist es, Sie zu entführen. Bleiben Sie sicher,
                                essen Sie Kuchen!”
                            </p>
                            <a href="#" class="button">Jetzt buchen</a>
                        </div>
                    </div>
                    <div class="workshop">
                        <img src="<?php echo get_template_directory_uri() ?>/images/workshop_christmas.jpg" alt="" />
                        <div class="workshopTextContainer">
                            <p class="subHeadlineWorkshop">Zeit für Weihnachtskekse!</p>
                            <p>"Eine ausgewogene Ernährung ist ein oder zwei Weihnachtskekse in jeder Hand."</p>
                            <a href="#" class="button">Jetzt buchen</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="guides">
                <h2>Unsere Workshop Leiter</h2>
                <p class="subHeadline">Sind begabt und haben eine große Leidenschaft fürs Bäckerhandwerk</p>
                <div class="guidesContainer">
                    <div class="guide">
                        <img src="<?php echo get_template_directory_uri() ?>/images/person1.jpg" alt="" />
                        <a href="#" class="jobButton">Leonie Huber</a>
                    </div>
                    <div class="guide">
                        <img src="<?php echo get_template_directory_uri() ?>/images/person2.jpg" alt="" />
                        <a href="#" class="jobButton">Richard Wicht</a>
                    </div>
                    <div class="guide">
                        <img src="<?php echo get_template_directory_uri() ?>/images/person3.jpg" alt="" />
                        <a href="#" class="jobButton">Jasmin Mayer</a>
                    </div>
                </div>
            </section>
            <section id="register">
                <h2>Jetzt anmelden!</h2>
                <p class="subHeadline">Sie lieben das Backen? Nutzen Sie ihre Chance!</p>
                <div class="formContainer">
                <?php
                    $workshops_query = new WP_Query( array( 'p' => 58 ));
                    if( $workshops_query->have_posts() ) {

                        while( $workshops_query->have_posts() ) {
                            $workshops_query->the_post(); 
                ?>  
                <?php the_content(); ?>
                <?php
                }
            }
            wp_reset_postdata();
            ?>
                </div>
            </section>
        </main>    
        <script src="<?php echo get_template_directory_uri() ?>/main.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                MainNav.init();
            });
        </script>
        <?php get_footer(); ?>
        <?php wp_footer(); ?> 
    </body>
</html>
