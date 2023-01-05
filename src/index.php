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
                    <div class="product">
                        <img src="<?php print(get_template_directory_uri()); ?>/images/product_bread.jpg" alt="" />
                        <div class="productTextContainer">
                            <p class="subHeadlineProduct">Frisch gebackenes Brot zum Verlieben</p>
                            <p>
                                Backwaren schmecken am besten frisch aus dem Ofen. Deshalb ist jede unserer Filialen
                                seit jeher mit einem eigenen Backofen ausgestattet. Die Besonderheit unserer
                                Bäckereifilialen ist bis heute, dass sie nicht aufbacken, sondern jedes Stück wirklich
                                frisch "aus dem Rohteig" backen.
                            </p>
                            <a href="#" class="button">Mehr erfahren</a>
                        </div>
                    </div>
                    <div class="product">
                        <img src="<?php print(get_template_directory_uri()); ?>/images/product_Kaffee.jpg" alt="" />
                        <div class="productTextContainer">
                            <p class="subHeadlineProduct">Der beste Kaffee der Stadt</p>
                            <p>
                                Wir zelebrieren ein einzigartiges Lebensgefühl und eine Atmosphäre, von der man sich
                                einfach mitreißen lassen muss. Genießen Sie die gesamte Palette an Bio-, Fairtrade- und
                                anderen erlesenen 15 Kaffeesorten. Wir können Ihnen garantieren, dass Sie keinen
                                besseren Kaffee in der Stadt finden werden
                            </p>
                            <a href="#" class="button">Mehr erfahren</a>
                        </div>
                    </div>
                    <div class="product">
                        <img src="<?php print(get_template_directory_uri()); ?>/images/product_Torte.jpg" alt="" />
                        <div class="productTextContainer">
                            <p class="subHeadlineProduct">Köstliche Torten, süße Verführungen</p>
                            <p>
                                Klassiker wie Zaunerkipferl, und Schokotarte dürfen bei uns nicht fehlen. Eine Auswahl
                                an hausgemachten Kuchen und Torten für den süßen Hunger zwischendurch ist in unserem
                                wöchentlichen Angebot. Österreichische und auch internationale Mehlspeisen gehören zu
                                einer guten Tasse Kaffee!
                            </p>
                            <a href="#" class="button">Mehr erfahren</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="news">
                <h2>Neuigkeiten</h2>
                <p class="subHeadline">Bei uns gibt es stets Neues zu erfahren</p>
                <div class="newsContainer">
                    <article>
                        <img src="<?php print(get_template_directory_uri()); ?>/images/news_Weihnachten.jpg" alt="" />
                        <div class="newsTextContainer">
                            <a href="#"><h3>So schmeckt Weihnachten 2022</h3></a>
                            <p class="newsText">
                                Mit unseren Keksen kommen Sie schnell in die richtige Weihnachtsstimmung. Denn darin
                                stecken nur beste Zutaten, Liebe zum Detail, Können und viel Handarbeit. Mit unseren
                                Keksen kommen Sie schnell in die richtige Weihnachtsstimmung. Denn darin stecken nur
                                beste Zutaten, Liebe zum Detail, Können und viel Handarbeit.
                            </p>
                            <div class="newsInfo">
                                <p>Wissenswertes</p>
                                <p>13.12.2022</p>
                            </div>
                        </div>
                    </article>
                    <article>
                        <img src="<?php print(get_template_directory_uri()); ?>/images/news_Gutschein.jpg" alt="" />
                        <div class="newsTextContainer">
                            <a href="#"><h3>Unsere neuen Gutscheine sind da!</h3></a>
                            <p class="newsText">
                                Freude schenken mit einem unserer Gutscheine. Das passende Geschenk zu fast allen
                                Anlässen. Überraschen Sie Ihre Lieben mit einer schönen gemeinsamen Zeit.
                            </p>
                            <div class="newsInfo">
                                <p>Wissenswertes</p>
                                <p>13.12.2022</p>
                            </div>
                        </div>
                    </article>
                    <article>
                        <img src="<?php print(get_template_directory_uri()); ?>/images/news_Preis.jpg" alt="" />
                        <div class="newsTextContainer">
                            <a href="#"><h3>Backpreis gewonnen</h3></a>
                            <p class="newsText">
                                Unsere Lehrlinge haben dieses Jahr den Backpreis des Landes Salzburg gewonnen. Wir sind
                                stolz auf die Leistung unserer Mitarbeiter, die sich diesen Preis redlich verdient
                                haben.
                            </p>
                            <div class="newsInfo">
                                <p>Wissenswertes</p>
                                <p>13.12.2022</p>
                            </div>
                        </div>
                    </article>
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
                    <div class="job">
                        <img src="<?php print(get_template_directory_uri()); ?>/images/job_Verkaufen.jpg" alt="" />
                        <a href="#" class="jobButton">Verkäufer</a>
                    </div>
                    <div class="job">
                        <img src="<?php print(get_template_directory_uri()); ?>/images/job_Produktion.jpg" alt="" />
                        <a href="#" class="jobButton">Produktion</a>
                    </div>
                    <div class="job">
                        <img src="<?php print(get_template_directory_uri()); ?>/images/job_HR.jpg" alt="" />
                        <a href="#" class="jobButton">HR-Spezialist</a>
                    </div>
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
