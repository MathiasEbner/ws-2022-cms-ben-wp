<header>

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
                <!-- <li><a href="index.php" class="active">Bäckerei & Cafe</a></li>
                <li><a href="/?page_id=5">Workshops</a></li>
                <li><a href="about.php">Über uns</a></li> -->
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </ul>
        </nav>
    </div>
    <div class="headerMainContainer">
        <div class="headerText">
            <p class="slogan">Die rundesten Semmerl Salzburgs</p>
            <a href="#products" class="button" id="headerButton">Produkte ansehen</a>
        </div>
    </div>
</header>