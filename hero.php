<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo("description"); ?></h3>
                <a href="<?php echo site_url(); ?>">
                    <h1 class="align-self-center display-1 text-center heading"><?php bloginfo("name"); ?></h1>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topmenu',
                            'menu_id' => 'topmenu',
                            'menu_class' => 'text-center',
                        )
                    );
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>