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
 * Template Name: TemplateAbout
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
        <title>Ben Müller | Über uns</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
        <?php wp_head(); ?>
    </head>
    <body>
    <?php wp_body_open(); ?>
        <header id="headerAbout">
            <div class="topNavContainer">
                <h1>
                    <a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/Logo.svg" alt="" /> </a>
                </h1>
                <nav id="mainnav">
                    <button id="hamburger" class="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </button>
                    <ul>
                        <!-- <li><a href="index.php">Bäckerei & Cafe</a></li>
                        <li><a href="workshops.php">Workshops</a></li>
                        <li><a href="about.php" class="active">Über uns</a></li> -->
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section id="energie">
                <h2>100% nachhaltige Energie</h2>
                <p class="subHeadline">Alle unsere Standorte werden mit gründer Energie betriebens</p>
                <div class="energieContainer">
                    <div class="imagesColumn">
                        <img src="<?php echo get_template_directory_uri() ?>/images/Sonnenuntergang.jpg" alt="" />
                        <img src="<?php echo get_template_directory_uri() ?>/images/getreide.jpg" alt="" />
                    </div>
                    <div class="textColumn">
                        <div class="workshopTextContainer">
                            <p class="subHeadlineWorkshop">Weil wir es der Umwelt schuldig sind</p>
                            <p>
                                Je hochwertiger das Material, desto besser das Resultat. Deswegen setzen wir auf
                                Bio-Qualität, verzichten auf Backtriebmittel und geben dem Teig die Zeit, die er
                                braucht. Schon seit jeher setzen wir dabei auf 100% Mehl aus Österreich und 100%
                                Ökostrom. Dadurch sind wir weitgehend unabhängig vom Geschehen auf dem Weltmarkt und
                                können unseren Kunden verlässlicher Partner sein.
                            </p>
                            <p>
                                Um die Wichtigkeit der Regionalität zu unterstreichen, lassen wir auch regelmäßig
                                Zertifizierungen durchführen. Es sind oft die kleinen Dinge, die beim bewussten Backen
                                eine große Rolle spielen. Dabei sind es nicht nur die Lebensmittel, die wir verwenden,
                                sondern auch die Utensilien, die wir einsetzen, die einen nachhaltigen Unterschied
                                machen können. Umweltbewusst, ressourcenschonend und fair zu backen liegt uns am Herzen.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="ben">
                <h2>Ben Müller</h2>
                <p class="subHeadline">Backen ist Handwerk. Backen ist Kunst</p>
                <div class="benContainer">
                    <img src="<?php echo get_template_directory_uri() ?>/images/BenMueller.jpg" alt="" />
                    <div class="textColumn">
                        <div class="workshopTextContainer">
                            <p class="subHeadlineWorkshop">Wenn Leidenschaft zur Berufung wird</p>
                            <p>
                                Für mich war das Backen immer schon etwas ganz spezielles. Schon mit jungen Jahren hatte
                                ich sehr viel Spaß meiner Familie Köstlichkeiten zu backen. Nach meiner erfolgreichen
                                Ausbildung und Meisterprüfung, beschloss ich meiner Traumberufung nachzugehen. Dies war
                                definitiv der richtige Schritt. Heute hat die Ben bäckt Kette schon drei Standorte in
                                Salzburg.
                            </p>
                            <p>
                                Backen ist für uns ein kreativer Prozess, bei dem aus hochwertigen Materialien mit
                                handwerklichem Geschick etwas Neues entsteht - etwas, das uns bewegt und Freude macht.
                                Bei uns rund um die Uhr gearbeitet. Während andere schlafen, läuft unser Backofen auf
                                Hochtouren. 15 Mitarbeiter, davon 9 Bäcker und 2 Lehrlinge, sorgen dafür, dass Ihr
                                Frühstück bereits in einer unserer vier Filialen auf Sie wartet.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="./main.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                MainNav.init();
            });
        </script>
        <?php get_footer(); ?>
        <?php wp_footer(); ?> 
    </body>
</html>
