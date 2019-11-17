<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="posts">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="post" <?php post_class(); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="post-title">
                                        <?php the_title(); ?></a>
                                    </h2>
                                    <p class="text-center">
                                        <strong><?php the_author(); ?></strong><br /><?php the_date(); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail("large", array("class" => "img-fluid"));
                                            }
                                            ?>
                                    </p>

                                    <p>
                                        <?php
                                            the_content();
                                            ?>
                                    </p>
                                </div>


                                <?php if (comments_open()) : ?>
                                    <div class="col-md-10 offset-md-1">
                                        <?php
                                                comments_template();
                                                ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>



                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php 
              if(is_active_sidebar('sidebar-1')){
                  dynamic_sidebar("sidebar-1");
              }
            ?>
        </div>

    </div>

</div>

<div class="container mb-5 ">
    <div class="row">
        <div class="col-md-6">
            <?php previous_post_link(); ?>
        </div>
        <div class="col-md-3 offset-md-3">
            <?php next_post_link(); ?>
        </div>
    </div>

</div>
<?php

get_footer();

?>