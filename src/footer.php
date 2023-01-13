<footer>
    <div class="footerInfo">
        <div class="adress">
            <p class="subHeadlineFooter">Adresse</p>
            <?php
                    $workshops_query = new WP_Query( array( 'p' => 51 ));
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
        <div class="openingHours">
            <p class="subHeadlineFooter">Öffnungszeiten</p>
            <?php
                    $workshops_query = new WP_Query( array( 'p' => 56 ));
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
        <div class="contact">
            <p class="subHeadlineFooter">Kontaktieren sie uns</p>
        <?php
                    $workshops_query = new WP_Query( array( 'p' => 59 ));
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
    </div>
    <div class="bottomContainer">
        <p>@ 2023 Ben Müller</p>
        <a href="#">Impressum & Datenschutz</a>
    </div>
</footer>